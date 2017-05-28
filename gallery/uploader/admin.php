<?php
/**
 * Administrator menu
 *
 * @version 0.3
 * @author konoiz <izumi@konome.org>
 */

require_once('function.inc.php');
requireLogin();

// fetch theme
$theme = array();
try {
    $db = new SQLite3(TEIKI_DB_NAME);
    if (existsTable($db, 'theme') === false) {
        exit('<a href="setting.php">Error: theme table notfound</a>');
    }
    $theme = getOpenTheme($db);
    if ($theme === false) {
        exit('<a href="setting.php">Error: open theme not found</a>');
    }
} catch (Exception $e) {
    exit('Error: cannot open theme database');
}

$list = array();
try {
    $db = new SQLite3(IMAGE_DIR_NAME .'/'. IMAGE_DB_NAME);
    $table = "list_{$theme['year']}_" . sprintf('%02d', $theme['month']);
    $table = $db->escapeString($table);

    // delete?
    if (empty($_GET['del']) == false && empty($_GET['file']) == false && $_GET['del']) {
        $file = $db->escapeString($_GET['file']);
        if (getImageData($db, $file, $table)) {
            if (deleteImageData($db, $file, $table) === false) {
                exit('Error: delete failed');
            }
            $file = pathinfo($file);
            unlink(IMAGE_DIR_NAME . '/' . $file['filename'] . '.jpg');
            unlink(IMAGE_DIR_NAME . '/' . $file['filename'] . '_thm.jpg');
            @unlink(IMAGE_DIR_NAME . '/' . $file['filename'] . '_orig.jpg');
        } else {
            exit("Error: unknown file ({$file})");
        }
    }

    // get all image information
    $list = getImageList($db, $table);
    if ($list === false) {
        throw new Exception('no data.');
    }
} catch (Exception $e) {
    $list[0] = array(
        'id'        => '-',
        'handle'    => '-',
        'grade'     => '-',
        'uid'       => '-',
        'file'      => '#',
        'title'     => 'NO DATA',
    );
}

?>

<html>
<head>
<title>Admin menu</title>
<meta name="robots" content="noindex,nofollow" />
<meta http-equive="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<ul>
    <li><a href="setting.php">テーマ設定</a></li>
    <li><a href="download.php">ZIPダウンロード</a></li>
    <li><a href="mkgallery.php" onclick="return confirm('ギャラリーを生成しますか?')">ギャラリーページ生成</a></li>
    <li><a href="?logout=1">ログアウト</a></li>
</ul>
<table border="1">
    <tr>
        <th>ID</th>
        <th>ハンドル<br />ネーム</th>
        <th>学年</th>
        <th>作品<br />番号</th>
        <th>タイトル</th>
        <th>操作</th>
    </tr>
<?php
    foreach($list as $value):
        $id     = $value['id'];
        $handle = htmlspecialchars($value['handle']);
        switch ($value['grade']) {
            case 1: $grade = '1年'; break;
            case 2: $grade = '2年'; break;
            case 3: $grade = '3年'; break;
            case 4: $grade = '4年'; break;
            case 5:
            default: $grade = '他'; break; 
        }
        $uid    = $value['uid'];
        $file   = IMAGE_DIR_NAME .'/'. $value['imgFileName'];
        $img    = htmlspecialchars($value['imgFileName']);
        $title  = htmlspecialchars($value['title']);
        $touchup = '';
        $isNew  = '';
        if ($value['touchup']) {
            $touchup = ", <a href=\"overwrite.php?old={$value['touchup']}&amp;new={$id}\">更新</a>";
            $isNew = ' style="background-color: #ffcccc;"';
        }
?>
    <tr<?php echo $isNew; ?>>
        <td><?php echo $id; ?></td>
        <td><?php echo $handle; ?></td>
        <td><?php echo $grade; ?></td>
        <td><?php echo $uid; ?></td>
        <td><a href="./preview.php?id=<?php echo $id; ?>"><?php echo $title; ?></a></td>
        <td><a href="?del=1&amp;file=<?php echo $img; ?>" onclick="return confirm('本当に削除しますか?');">削除</a><?php echo $touchup; ?></td>
    </tr>
<?php endforeach; ?>
</table>
<p style="color: red;">
    ハイライトされている作品は修正版であることを示しています。<br />
    必ず、更新または削除を行う必要があります。
</p>
</body>
</html2
