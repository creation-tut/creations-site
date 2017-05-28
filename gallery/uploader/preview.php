<?php
/**
 * preview
 *
 * @version 0.1
 * @author konoiz <izumi@konome.org>
 */

require_once 'function.inc.php';
requireLogin();

// parameter check
if (empty($_GET['id']) || !ctype_digit($_GET['id'])) {
    exit("Error: unspecified image ID");
}

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

// exists check
$imgId = (int)$_GET['id'];
$img   = getImageData($db, $imgId, $table, 'id', 'int');
if ($img == false) {
    exit("Error: image not found (ID: {$_GET['id']})");
}

// format data
$id = $img['id'];
$handle = htmlspecialchars($img['handle']);
switch ($img['grade']) {
    case 1: $grade = '1年'; break;
    case 2: $grade = '2年'; break;
    case 3: $grade = '3年'; break;
    case 4: $grade = '4年'; break;
    case 5: // through
    default: $grade = '他'; break; 
}
$uid    = $img['uid'];
$file   = IMAGE_DIR_NAME .'/'. $img['imgFileName'];
$imgName    = htmlspecialchars($img['imgFileName']);
$title  = htmlspecialchars($img['title']);
$touchup = '';
$isNew  = '';
if ($img['touchup']) {
    $touchup = ", <a href=\"overwrite.php?old={$img['touchup']}&amp;new={$id}\">更新</a>";
    $isNew = ' style="background-color: #ffcccc;"';
}

$origFile = IMAGE_DIR_NAME . '/' . $img['origFileName'];
$thmFile = IMAGE_DIR_NAME . '/' . $img['thmFileName'];
?>
<html>
<head>
<title>Image preview</title>
<meta name="robots" content="noindex,nofollow" />
<meta http-equive="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<p><a href="./admin.php">戻る</a></p>
<table width="70%" border="1px">
    <tr>
        <th>タイトル</th>
        <td><?php echo $title; ?></td>
    </tr>
<?php if ($theme['isRemake']): ?>
    <tr>
        <th><?php echo OUTPUT_IMG_NAME; ?></th>
        <th><?php echo OUTPUT_ORIG_NAME; ?></th>
    </tr>
    <tr>
        <td><img src="<?php echo $file; ?>" width="100%" /></td>
        <td><img src="<?php echo $origFile; ?>" width="100%" /></td>
    </tr>
<?php else: ?>
    <tr>
        <th><?php echo OUTPUT_IMG_NAME; ?></th>
        <td><img src="<?php echo $file; ?>" width="100%" /></td>
    </tr>
<?php endif; ?>
    <tr>
        <th>ハンドル</th>
        <td><?php echo $handle; ?></td>
    </tr>
    <tr>
        <th>学年</th>
        <td><?php echo $grade; ?></td>
    </tr>
    <tr>
        <th>サムネイル</th>
        <td><img src="<?php echo $thmFile; ?>" /></td>
    </tr>
</table>
<p><a href="./admin.php">戻る</a></p>
</body>
</html>
