<?php
/**
 * upload function core
 *
 * @version 0.2a
 * @author konoiz <izumi@konome.org>
 */
require_once 'function.inc.php';

$err = ''; // no error

// fetch theme
$theme = array('id'=>0, 'name'=>'', 'isRemake'=>0);
if ($db = new SQLite3(TEIKI_DB_NAME)) {
    if (existsTable($db, 'theme') === false) {
        $err .= "<p class=\"error\">テーマ情報の取得に失敗しました。(".__LINE__.")</p>\n";
        goto last_of_check_process;
    }

    // check open theme
    $theme = getOpenTheme($db);
    if ($theme === false) {
        $theme = array('id'=>0, 'name'=>'error', 'isRemake'=>0);
        $err .= "<p class=\"error\">現在、投稿を受け付けていません。</p>\n";
        goto last_of_check_process;
    }
} else {
    $err .= "<p class=\"error\">テーマ情報の取得に失敗しました。(".__LINE__.")</p>\n";
    goto last_of_check_process;
}
unset($db);

// check teiki.jpg
if (isset($_FILES['img']) && is_uploaded_file($_FILES['img']['tmp_name'])) {
    // imginfo =  (0: width, 1: height, 2: imagetype)
    if ($imgInfo = @getimagesize($_FILES['img']['tmp_name'])) {
        if ($imgInfo[2] !== IMAGETYPE_JPEG) {
            $err .= "<p class=\"error\">作品画像はJPEG形式です。（どうしても他の形式で投稿したい場合は、web担当に相談してください）</p>\n";
        }
        if ($imgInfo[0] > IMAGE_MAX_WIDTH) {
            $err .= "<p class=\"error\">作品画像の横幅が大きすぎます。</p>\n";
        }
        if ($imgInfo[1] > IMAGE_MAX_HEIGHT) {
            $err .= "<p class=\"error\">作品画像の縦幅が大きすぎます。</p>\n";
        }
        if ($_FILES['img']['size'] > IMAGE_MAX_SIZE) {
            $err .= "<p class=\"error\">作品画像のファイルサイズが大きすぎます。</p>\n";
        }
    } else {
        $err .= "<p class=\"error\">作品画像に画像ファイル以外が指定されています。</p>\n";
    }
} else {
    $err .= "<p class=\"error\">作品画像が選択されていません。</p>\n";
}

// check teiki2.jpg (remake)
if ($theme['isRemake']) {
    if (isset($_FILES['orig']) && is_uploaded_file($_FILES['orig']['tmp_name'])) {
        if ($imgInfo = @getimagesize($_FILES['orig']['tmp_name'])) {
            if ($imgInfo[2] !== IMAGETYPE_JPEG) {
                $err .= "<p class=\"error\">リメイク前画像はJPEG形式を使用してください。</p>\n";
            }
            if ($imgInfo[0] > IMAGE_MAX_WIDTH) {
                $err .= "<p class=\"error\">リメイク前画像の横幅が大きすぎます。</p>\n";
            }
            if ($imgInfo[1] > IMAGE_MAX_HEIGHT) {
                $err .= "<p class=\"error\">リメイク前画像の縦幅が大きすぎます。</p>\n";
            }
            if ($_FILES['orig']['size'] > IMAGE_MAX_SIZE) {
                $err .= "<p class=\"error\">リメイク前画像のファイルサイズが大きすぎます。</p>\n";
            }
        } else {
            $err .= "<p class=\"error\">リメイク前画像に画像ファイル以外が指定されています。</p>\n";
        }
    } else {
        $err .= "<p class=\"error\">リメイク前の作品画像が選択されていません。</p>\n";
    }
}


// cehck teiki_s.jpg
if (isset($_FILES['thm']) && is_uploaded_file($_FILES['thm']['tmp_name'])) {
    // imginfo = (0: width, 1: height, 2: imagetype)
    if ($imgInfo = @getimagesize($_FILES['thm']['tmp_name'])) {
        if ($imgInfo[2] !== IMAGETYPE_JPEG) {
            $err .= "<p class=\"error\">作品サムネイルはJPEG形式を使用してください。</p>\n";
        }
        if ($imgInfo[0] != THUMB_WIDTH || $imgInfo[1] != THUMB_HEIGHT) {
            $err .= "<p class=\"error\">作品サムネイルは100pxの正方形を指定してください。</p>\n";
        }
    } else {
        $err .= "<p class=\"error\">作品サムネイルに画像ファイル以外が指定されています。</p>\n";
    }
} else {
    $err .= "<p class=\"error\">作品サムネイルが選択されていません。</p>\n";
}

// check title
if (empty($_POST['title'])) {
    $err .= "<p class=\"error\">タイトルが入力されていません。</p>\n";
}

// check handle
if (empty($_POST['handle'])) {
    $err .= "<p class=\"error\">ハンドルが入力されていません。</p>\n";
}

// check grade
if (empty($_POST['grade'])) {
    $err .= "<p class=\"error\">学年が選択されていません。 </p>\n";
}

// check comment
if (empty($_POST['comment'])) {
    $err .= "<p class=\"error\">コメントが入力されていません。</p>\n";
}

// check uid
if (empty($_POST['uid']) || ctype_digit($_POST['uid'] === false)) {
    $err .= "<p class=\"error\">作品番号が選択されていません。</p>\n";
} else if ($_POST['uid'] > IMAGE_MAX_UID) {
    $err .= "<p class=\"error\">作品は" . IMAGE_MAX_UID . "枚までしか投稿できません。</p>\n";
}

 

// open database file
$table = "list_{$theme['year']}_" . sprintf('%02d', $theme['month']);
try {
    $db = new SQLite3(IMAGE_DIR_NAME .'/'. IMAGE_DB_NAME);
    $table = $db->escapeString($table);
    if (existsTable($db, $table) === false) {
        $remakeTable = ($theme['isRemake'] ? '"origFileName" TEXT,' : '');
        // create tabel
        $query = 'CREATE TABLE '.$table.' (
            "id"            INTEGER    NOT NULL    PRIMARY KEY  AUTOINCREMENT,
            "imgFileName"   TEXT,
            ' . $remakeTable . '
            "thmFileName"   TEXT,
            "uid"           INTEGER,
            "handle"        TEXT,
            "handle_sort"    TEXT,
            "grade"         INTEGER,
            "title"         TEXT,
            "comment"       TEXT,
            "touchup"       INTEGER
        )';
        if ($db->exec($query) === false) {
            $err .= "<p class=\"error\">アップロードに失敗しました。(" . __LINE__ . ")</p>\n";
        }
    } 
} catch (Exception $e) {
    $err .= "<p class=\"error\">アップロードに失敗しました。(".__LINE__.")</p>\n";
}

if ($err !== '') {
    goto last_of_check_process;
}

// check uid order
if (empty($_POST['uid']) === false && $_POST['uid'] >= 2) {
    for ($i=1; $i<$_POST['uid']; ++$i) {
        $key = md5($_POST['handle']) . '_' . $i .'.jpg';
        if (getImageData($db, $key, $table) === false) {
            $err .= "<p class=\"error\">作品番号{$i}がアップロードされていません。</p>\n";
            goto last_of_check_process;
        }
    }
}

// check touchup
$isTouchUp = false;
if (empty($_POST['touchup']) === false) {
    $key = md5($_POST['handle']) . '_' . $_POST['uid'] . '.jpg';
    if (getImageData($db, $key, $table) === false) {
        $err .= "<p class=\"error\">作品番号{$_POST['uid']}はアップロードされていません。</p>\n";
        goto last_of_check_process;
    }
    $isTouchUp = true;
}

// basename
$baseName   = md5($_POST['handle']) . '_' . $_POST['uid'];
$imgFileKey = $baseName . '.jpg';
if ($isTouchUp) {
    $baseName = $baseName . '_touchup_' . date('ymdhis');
}
$imgFileName  = $baseName . '.jpg';


// check exist uid
$existData = getImageData($db, $imgFileKey, $table);
if ($existData) {
    if ($isTouchUp === false) {
        $err .= "作品番号{$_POST['uid']}は既にアップロードされています。";
        goto last_of_check_process;
    }
    /*
    // overwrite
    $title_s        = $db->escapeString($_POST['title']);
    $comment_s      = $db->escapeString(nl2br(htmlspecialchars($_POST['comment'])));
    $query = "UPDATE \"{$table}\" SET \"title\"='{$title_s}', \"comment\"='{$comment_s}' WHERE \"imgFileName\"='{$imgFileName_s}'";
    if ($db->exec($query) === false) {
        $err = "<p class=\"error\">アップロードに失敗しました。(" . __LINE__ . ")</p>\n";
    }
     */
}

// move images
$thmFileName  = $baseName . '_thm.jpg'; 
$origFileName = $baseName . '_orig.jpg';
if (move_uploaded_file($_FILES['img']['tmp_name'], IMAGE_DIR_NAME .'/'. $imgFileName) === false) {
    $err .= "<p class=\"error\">アップロードに失敗しました。(" . __LINE__ . ")<p>\n";
} else {
    if (move_uploaded_file($_FILES['thm']['tmp_name'], IMAGE_DIR_NAME .'/'. $thmFileName) === false) {
        $err .= "<p class==\"error\">アップロードに失敗しました(" . __LINE__ . ")</p>\n";
    }
}
if ($err === '' && $theme['isRemake']) {
    if (move_uploaded_file($_FILES['orig']['tmp_name'], IMAGE_DIR_NAME .'/'. $origFileName) === false) {
        $err .= "<p class=\"error\">アップロードに失敗しました。</p>\n";
    }
}

 
// new image 
$imgFileName_s  = $db->escapeString($imgFileName);
$thmFileName_s  = $db->escapeString($thmFileName);
$origFileName_s = $db->escapeString($origFileName);
if ($theme['isRemake']) {
    $origFileName_s = "'{$origFileName_s}', ";
} else {
    $origFileName_s = '';
}
$uid_s          = (int)$_POST['uid'];
$handle_s       = $db->escapeString($_POST['handle']);
$handle_sort    = mb_convert_case(mb_convert_kana($_POST['handle'], 'asHVc', 'UTF-8'), MB_CASE_LOWER, 'UTF-8');
$grade_s        = (int)$_POST['grade'];
$title_s        = $db->escapeString($_POST['title']);
$comment_s      = $db->escapeString(nl2br(htmlspecialchars($_POST['comment'])));
$touchUpId      = $isTouchUp ? $existData['id'] : 0;

$query = "INSERT INTO \"{$table}\" VALUES (NULL, '{$imgFileName_s}', {$origFileName_s}'{$thmFileName_s}', {$uid_s}, '{$handle_s}', '{$handle_sort}', {$grade_s}, '{$title_s}', '{$comment_s}', $touchUpId)";
if ($db->exec($query) === false) {
    $err = "<p class=\"error\">アップロードに失敗しました。(" . __LINE__ . ")</p>\n";
}


if ($err !== '') {
    goto last_of_check_process;
}
$imgTitle = htmlspecialchars($_POST['title']); 
$imgName  = htmlspecialchars($_FILES['img']['name']);
$imgSize  = $_FILES['img']['size'];
$uid      = (int)$_POST['uid'];

last_of_check_process:

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="/default.css" />
<title>Creation's Graffiti</title>
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/header.php") ?>
	<div class="article">
		<div class="section">
            <h1>定期作品アップローダー</h1>
            <p style="margin-bottom:2em;">
                <?php
                    if ($err === '') {
                        $imgSize = convertByteUnit($imgSize);
                        echo "作品番号{$uid} <b>{$imgTitle}</b> ({$imgSize})をアップロードしました。[◎]";
                    } else {
                        echo $err;
                    }
                ?>
            </p>
		</div>
		<div class="footer">Copyright 2000-2014 Creation all rights reserved.</div>
	</div>
</body>
</html>
