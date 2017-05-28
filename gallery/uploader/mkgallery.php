<?php
/**
 * generate gallery page
 *
 * @versino 0.2
 * @author konoiz <izumi@konome.org>
 */
error_reporting(-1);
ini_set("display_errors", 1);
require_once('function.inc.php');
requireLogin();

// initialization for process display
// @apache_setenv('no-gzip', 1);
@ini_set('zlib.output_compression', 0);
@ini_set('implicit_flush', 1);
ob_implicit_flush(true);
echo str_repeat(' ', 1024) . "\n<pre>";

// fetch theme
echo "Get theme information...";
$theme = array();
try {
    $db = new SQLite3(TEIKI_DB_NAME);
    if (existsTable($db, 'theme') === false) {
        exit("Error: table not found");
    }
    $theme = getOpenTheme($db);
    if ($theme === false) {
        exit("Error: open theme not found");
    }
} catch (Exception $e) {
    exit("Error: cannot open database".__LINE__.")");
}
echo "ok. \nTheme ID is {$theme['id']}\n\n";

// fetch image list
echo "Get image list...";
try {
    $db = new SQLite3(IMAGE_DIR_NAME . '/' . IMAGE_DB_NAME);
    $table = "list_{$theme['year']}_" . sprintf('%02d', $theme['month']);
    $table = $db->escapeString($table);
    $list = getImageList($db, $table, 'ORDER BY "grade" ASC,"handle_sort" ASC, "uid" ASC');
    if ($list === false) {
        exit("Error: No image data");
    }

} catch (Exception $e) {
    exit("Error: cannot open database (".__LINE__.")");
}
echo "ok.\n";
echo "Total ".count($list) . " works.\n\n";

// check touchup data
$touchupList = getTouchupList($db, $table);
if ($touchupList) {
    exit('Error: please <a href="./admin.php">check</a> touchup data.');
}

// make gallery directory
echo "Writable gallery parent dir ...";
if (is_writable(GALLERY_DIR_PATH) === false) {
    exit("Error: ".GALLERY_DIR_PATH." is not writable");
}
echo "yes.\nExists school year dir...";
$dir = GALLERY_DIR_PATH . $theme['schoolYear'] . '/';
if (file_exists($dir) === false) {
    echo "no.\n make school year dir...";
    if (mkdir($dir) === false) {
        exit("Error: mkdir {$dir}: Permissino denied");
    }
    echo "ok.\n";
} elseif (is_dir($dir) === false || is_writable($dir) === false) {
    exit("Error: {$dir} is not writable");
} else {
    echo "yes.\n";
}

echo "Exists gallery dir...";
$dir = $dir . substr($theme['year'], -2, 2) . '_'. sprintf('%02d', $theme['month']).'/';
if (file_exists($dir) === false) {
    echo "no.\n make gallery dir...";
    if (mkdir($dir) === false) {
        exit("Error: mkdir {$dir}: Permission denied");
    }
    echo "ok.\n\n";
} elseif (is_dir($dir) === false || is_writable($dir) === false) {
    exit("Error: {$dir} is not writable");
} else {
    echo "yes.\n\n";
}

echo "copy images...\n";
foreach ($list as $key => $data) {
    echo "process ". ($key+1) ." / ".count($list).":\n";
    $list[$key]['id'] = sprintf('%02d', $key);
    $list[$key]['autofocus'] = '';
    $list[$key]['imgFile']  = $list[$key]['id']. '/' . OUTPUT_IMG_NAME;
    $list[$key]['thmFile']  = $list[$key]['id']. '/' . OUTPUT_THM_NAME;
    $list[$key]['origFile'] = $list[$key]['id']. '/' . OUTPUT_ORIG_NAME;


    $key = $list[$key]['id'];
    $workDir = $dir . $key . '/';

        echo "  Exists work dir...";
    if (file_exists($workDir) === false) {
        echo "no.\n  make work dir...";
        if (mkdir($workDir) === false) {
            exit("Error: mkdir {$workDir}: Permission denied");
        }
        echo "ok.\n";
    } elseif (is_dir($workDir) === false || is_writable($workDir) === false) {
        exit("Error: {$workDir} is not writable");
    } else {
        echo "yes.\n";
    }

    // copy images
    echo "  copy " . OUTPUT_IMG_NAME . "...";
    if (copy(IMAGE_DIR_NAME.'/'.$data['imgFileName'], $workDir.OUTPUT_IMG_NAME)) {
        echo "ok.\n  copy " . OUTPUT_THM_NAME . "...";
    } else {
        exit("Error: failed");
    }

    if (copy(IMAGE_DIR_NAME.'/'.$data['thmFileName'], $workDir. OUTPUT_THM_NAME)) {
        echo "ok.\n";
    } else {
        exit("Error: failed");
    }
    if ($theme['isRemake']) {
        echo "  copy " . OUTPUT_ORIG_NAME . "...";
        if (copy(IMAGE_DIR_NAME.'/'.$data['origFileName'], $workDir.OUTPUT_ORIG_NAME)) {
            echo "ok.\n";
        } else {
            exit("Error: filed");
        }
    }
    echo "  save work data...";
    $dataStr = "{$data['title']}\n{$data['handle']}\n{$data['comment']}";
    if (file_put_contents($workDir.'data.txt', $dataStr) === false) {
        exit("Error: failed");
    }
    echo "ok.\n";
}

// set autofocus
$list[0]['autofocus'] = ' autofocus="autofocus"';

echo "generate gallery html...";
ob_implicit_flush(false);
@ini_set('implicit_flush', 0);

// generate gallery html
ob_start();
if ($theme['isRemake']) {
    // remake
    require_once 'remake_gallery_template.inc.php';
} else {
    // common
    require_once 'gallery_template.inc.php';
}
$out = ob_get_clean();
if (file_put_contents($dir.GALLERY_FILE_NAME, $out) === false) {
    exit("Error: failed");
}
echo "ok.\n\n";
echo '<a href="'.$dir.'">DONE</a>.</pre>';

