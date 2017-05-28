<?php
/**
 * Cleaning temporary directory system
 *
 * @version 0.2
 * @author konoiz <izumi@konome.org>
 */
require_once 'function.inc.php';
requireLogin();

if (empty($_GET['confirm']) || $_GET['confirm'] !== 'yes') {
    $dir = IMAGE_DIR_NAME;
    $target = glob($dir . '/*');
    $list = '';
    foreach ($target as $val) {
        $list .= $val . "\n";
    }
    echo <<<EOF
<html>
<head>
<title>Cleaning</title>
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<p>{$dir}以下のファイルがすべて削除されます。</p>
<pre>{$list}</pre>
<form action="cleaning.php" method="get">
    <label><input type="checkbox" name="confirm" id="confirm" value="yes" />確認</label><br />
    <input type="submit" value="削除" />
</form>
<p><a href="admin.php">back</a></p>
EOF;
    exit();
}

// initialization for process display
@apache_setenv('no-gzip', 1);
@ini_set('zlib.output_compression', 0);
@ini_set('implicit_flush', 1);
ob_implicit_flush(true);
echo str_repeat(' ', 1024). "\n<pre>";

echo "check files...";
$target = glob(IMAGE_DIR_NAME . '/*');
echo count($target) . "files.\n\n";
$err = false;
foreach($target as $val) {
    echo "unlink {$val}...";
    if (@unlink($val)) {
        echo "ok\n";
    } else {
        $err = true;
        echo "failed\n";
    }
}

if ($err) {
    echo "ERROR: some files is not deleted. please manually delete.";
} else {
    echo 'done. [<a href="admin.php">back</a>]';
}
