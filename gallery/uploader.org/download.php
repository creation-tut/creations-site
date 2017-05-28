<?php
/**
 * Generate ZIP and download
 *
 * @version 0.2
 * @author konoiz <izumi@konome.org>
 */

require_once('function.inc.php');
requireLogin();

// initialization for process display
// @apache_setenv('no-gzip', 1);
@ini_set('zlib.output_compression', 0);
@ini_set('implicit_flush', 1);
ob_implicit_flush(true);
echo str_repeat(' ', 1024)."\n<pre>";

// fetch theme
echo "Get theme information....";
$theme = array();
if ($db = new SQLite3(TEIKI_DB_NAME)) {
    if (existsTable($db, 'theme') === false) {
        exit("Error: Theme table not found");
    }
    $theme = getOpenTheme($db);
    if ($theme === false) {
        exit("Error: Theme data fetch error");
    }
} else {
    exit("Error: Theme database connection error");
}
unset($db);
echo "ok.\nTheme ID is {$theme['id']}\n\n";

// fetch image list
echo "Get image data..";
try {
    $db = new SQLite3(IMAGE_DIR_NAME .'/'. IMAGE_DB_NAME);
} catch (Exception $e) {
    exit("Error: Database connection error");
}

$table = "list_{$theme['year']}_" . sprintf('%02d', $theme['month']);
$table = $db->escapeString($table);

$list = getImageList($db, $table);
if ($list == false) exit("Error: Database fetch error");
echo "ok.\n";

// check touchup data
$touchupList = getTouchupList($db, $table);
if ($touchupList) {
    exit('Error: please <a href="admin.php">check</a> touchup data.');
}

$parent  = "img_{$theme['id']}";
$zipName = "{$parent}.zip";

echo "Exists ZIP file...";
if (file_exists(IMAGE_DIR_NAME . '/'. $zipName)) {
    echo "yes.\n  delete old zip...";
    if (@unlink(IMAGE_DIR_NAME .'/'. $zipName) === false) {
        exit("Error: Permission denied");
    }
    echo "ok.\n";
} else {
    echo "no.\n";
}

echo "Create new zip...";
$zip = new ZipArchive;
$stat = $zip->open(IMAGE_DIR_NAME . '/' .$zipName, ZipArchive::CREATE);
//echo IMAGE_DIR_NAME .'/'. $zipName;
if ($stat !== true) {
    exit("Error: Failed create zip file ({$stat})");
}
echo "ok.\n\nAdd files";
$zip->addEmptyDir($parent);

foreach($list as $data) {
    echo '.';
    $dirName =$parent . '/'. mb_convert_encoding($data['grade'] . '_' . $data['handle'] . '_' . $data['uid'], 'sjis-win', 'UTF-8');
    $zip->addEmptyDir($dirName);
    $zip->addFile(IMAGE_DIR_NAME . '/' . $data['imgFileName'], $dirName . '/teiki.jpg');
    $zip->addFile(IMAGE_DIR_NAME . '/' . $data['thmFileName'], $dirName . '/teiki_s.jpg');
    $zip->addFile(IMAGE_DIR_NAME . '/' . $data['origFileName'], $dirName . '/teiki_2.jpg');
}

$zip->close();
echo "done.\n</pre>";

echo "<a href=\"./".IMAGE_DIR_NAME."/{$zipName}\">Download</a>&nbsp;[<a href=\"admin.php\">back</a>]";
