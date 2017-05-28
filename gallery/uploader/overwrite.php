<?php
/**
 * work update check system
 *
 * @versino 0.2
 * @author konoiz <izumi@konome.org>
 */
require_once('function.inc.php');
requireLogin();

// fetch theme
try {
    $db = new SQLite3(TEIKI_DB_NAME);
    if (existsTable($db, 'theme') === false) {
        exit("Error: theme table not found");
    }
    $theme = getOpenTheme($db);
    if ($theme === false) {
        exit("Error: open theme not found");
    }
} catch (Exception $e) {
    exit("Error: cannot open theme database" . __LINE__ . ")");
}

// open database connection
try {
    $db = new SQLite3(IMAGE_DIR_NAME.'/'.IMAGE_DB_NAME);
    $table = "list_{$theme['year']}_" . sprintf('%02d', $theme['month']);
    $table = $db->escapeString($table);
    if (existsTable($db, $table) === false) {
        exit("Error: no data");
    }
} catch (Exception $e) {
    exit("Error: cannot open theme database (" . __LINE__ . ")");
}

// parameter check
if (empty($_GET['old']) || ctype_digit($_GET['old']) === false) {
    exit("Error: old image id is unspecified");
}
if (empty($_GET['new']) || ctype_digit($_GET['new']) === false) {
    exit("Error: new image id is unspecified");
}

// string to integer
$oldId = (int)$_GET['old'];
$newId = (int)$_GET['new'];

// exists check
if (($oldData = getImageData($db, $oldId, $table, 'id', 'int')) === false) {
    exit("Error: old image not found");
}
if (($newData = getImageData($db, $newId, $table, 'id', 'int')) === false) {
    exit("Error: new image not found");
}

// get upload date
$oldData['time'] = @filemtime(IMAGE_DIR_NAME .'/'. $oldData['imgFileName']);
$newData['time'] = @filemtime(IMAGE_DIR_NAME .'/'. $newData['imgFileName']);
if ($oldData['time'] === false || $newData['time'] === false) {
    exit("Error: Image file(s) not found");
}

// time to date
$oldData['date'] = date('Y/m/d H:i:s', $oldData['time']);
$newData['date'] = date('Y/m/d H:i:s', $newData['time']);

// original check
if ($oldData['touchup']) {
    exit("Error: old image is not original image");
}
if ($newData['touchup'] === false) {
    exit("Error: new image is original image");
}

$baseName = pathinfo($oldData['imgFileName']);
$baseName = $baseName['filename'];
if (substr($newData['imgFileName'], 0, strlen($baseName)) !== $baseName) {
    exit("Error: ID {$newId} is not touch-up from ID {$oldId}");
}

// overwrite
if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    // check image file permission
    if (@is_writable(IMAGE_DIR_NAME.'/'.$oldData['imgFileName']) !== true
     || @is_writable(IMAGE_DIR_NAME.'/'.$oldData['thmFileName']) !== true   
    ) {
        exit("Error: old image is not writable (1)");
    }
    if ($oldData['isRemake']) {
        if (@is_writable(IMAGE_DIR_NAME.'/'.$oldData['origFileName']) !== true) {
            exit("Error: old image is not writable (2)");
        }
    }

    if (@is_readable(IMAGE_DIR_NAME.'/'.$newData['imgFileName']) === false
     || @is_readable(IMAGE_DIR_NAME.'/'.$newData['thmFileName']) === false
    ) {
        exit("Error: new image is not readable (1)");
    }
    if ($oldData['isRemake']) {
        if (@is_readable(IMAGE_DIR_NAME.'/'.$newData['origFileName']) === false) {
            exit("Error: new image is not readable (2)");
        }
    }

    // overwrite original image
    rename(IMAGE_DIR_NAME.'/'.$newData['imgFileName'], IMAGE_DIR_NAME.'/'.$oldData['imgFileName']);
    rename(IMAGE_DIR_NAME.'/'.$newData['thmFileName'], IMAGE_DIR_NAME.'/'.$oldData['thmFileName']);
    if ($oldData['isRemake']) {
        rename(IMAGE_DIR_NAME.'/'.$newData['origFileName'], IMAGE_DIR_NAME.'/'.$oldData['origFileName']);
    }

    // overwrite database
    $title_s    = $db->escapeString($newData['title']);
    $comment_s  = $db->escapeString($newData['comment']);
    $key        = $db->escapeString($oldData['imgFileName']);
    $query = "UPDATE \"{$table}\" SET \"title\"='{$title_s}', \"comment\"='{$comment_s}' WHERE \"imgFileName\"='{$key}'";
    if ($db->exec($query) === false) {
        exit("Error: Failed update database");
    }

    // delete touchup data
    if (deleteImageData($db, $newId, $table, 'id', 'integer') === false) {
        exit("Error: Failed delete record");
    }
    exit('UPDATE OK. [<a href="./admin.php">back</a>]');
}

?>

<html>
<head>
<title>Update work</title>
<meta name="robots" content="noindex,nofollow" />
<meta http-qeuiv=Content-Type" content="text/html; charset=utf8" />
</head>
<body>
<p>以下の情報が上書きされ、古い情報は削除されます。</p>
<p>サムネイルをクリックすると作品を確認できます。</p>
<table border="1">
    <tr>
        <th>更新前(ID: <?php echo $oldId; ?>)</th>
        <th rowspan="5">→</th>
        <th>更新後(ID: <?php echo $newId; ?>)</th>
    </tr>
    <tr>
        <td>『<?php echo $oldData['title']; ?></a>』</td>
        <td>『<?php echo $newData['title']; ?></a>』</td>
    </tr>
    <tr>
        <td><?php echo $oldData['comment']; ?></td>
        <td><?php echo $newData['comment']; ?></td>
    </tr>
    <tr>
        <td><a href="<?php echo IMAGE_DIR_NAME.'/'.$oldData['imgFileName']; ?>"><img src="<?php echo IMAGE_DIR_NAME.'/'.$oldData['thmFileName']; ?>" /></a></td>
        <td><a href="<?php echo IMAGE_DIR_NAME.'/'.$newData['imgFileName']; ?>"><img src="<?php echo IMAGE_DIR_NAME.'/'.$newData['thmFileName']; ?>" /></a></td>
    </tr>
    <tr>
        <td><?php echo $oldData['date']; ?></td>
        <td><?php echo $newData['date']; ?></td>
    </tr>
</table>
<?php if ($oldData['time'] > $newData['time']): ?>
     <p style="color: red;">
        ID:<?php echo $oldId; ?>はID:<?php echo $newId; ?>よりも新しくアップロードされた作品の可能性があります。<br />
        意図しない逆戻りが発生しないよう注意してください。<br />
        もしID:<?php echo $newId; ?>がより古い作品の場合、更新せずに<a href="admin.php">一覧</a>から削除してください。
    </p> 
<?php endif; ?>
<form action="overwrite.php" method="get">
    <input type="hidden" name="old" id="old" value="<?php echo $oldId; ?>" />
    <input type="hidden" name="new" id="new" value="<?php echo $newId; ?>" />
    <label><input type="checkbox" name="confirm" id="confirm" value="yes" />確認</label><br />
    <input type="submit" value="更新" />
</form>
<p><a href="admin.php">back</a></p>
