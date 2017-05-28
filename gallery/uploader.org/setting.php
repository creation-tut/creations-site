<?php
/**
 * Theme management system
 *
 * @version 0.3
 * @author konoiz <izumi@konome.org>
 */
require_once 'function.inc.php';
requireLogin();

// open database file
try {
    $db = new SQLite3(TEIKI_DB_NAME);
    $query = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='theme'";
    $res = $db->query($query);
    $res = $res->fetchArray();
    if ($res[0] !== 1) {
        $query = 'CREATE TABLE "theme" (
            "id"           INTEGER     NOT NULL    PRIMARY KEY     AUTOINCREMENT,
            "schoolYear"    INTEGER,
            "year"          INTEGER,
            "month"         INTEGER,
            "theme"         TEXT,
            "ttl"           TEXT,
            "isRemake"      INTEGER,
            "isOpen"        INTEGER
        )';
        if ($db->exec($query) === false) {
            exit("Error: Failed to create database");
        }
    }
} catch (Exception $e) {
    exit("Error: Cannot open database");
}

// check parameter
if (isset($_POST['mode']) && $_POST['mode'] === 'update') {
    // value check
    if (empty($_POST['year'])) {
        exit("Error: Year is not selected");
    }
    if (ctype_digit($_POST['year']) === false) {
        exit("Error: Invalid year value");
    }
    if (empty($_POST['month'])) {
        exit("Error: Month is not selected");
    }
    if (ctype_digit($_POST['month']) === false
        || ($_POST['month'] < 1 || $_POST['month'] > 12)
    ) {
        exit("Error: Invalid month value");
    }
    if (empty($_POST['theme'])) {
        exit("Error: Theme name is blank");
    }

    if (isset($_POST['isRemake']) === false) {
        exit("Error: Remake flag is blank");
    } else {
        $isRemake = ($_POST['isRemake'] ? 1 : 0);
    } 

    if (isset($_POST['isOpen']) === false) {
        exit("Error: Available flag is blank");
    } else {
        $isOpen = ($_POST['isOpen'] ? 1 : 0);
    }

    if (empty($_POST['ttl'])) {
        $ttl = '-';
    } else {
        $ttl = $db->escapeString($_POST['ttl']);
    }

    // reset open flag
    if ($isOpen) {
        $query = "UPDATE \"theme\" SET \"isOpen\"=0 WHERE \"isOpen\"=1";
        $db->exec($query);
    }

    // exist check
    $year  = (int)$_POST['year'];
    $month = (int)$_POST['month'];
    $theme = $db->escapeString($_POST['theme']);
    $query = "SELECT count(*) FROM \"theme\" WHERE \"year\"={$year} AND \"month\"={$month}";
    $res = $db->query($query);
    $res = $res->fetchArray();
    if ($res[0]) {
        // override
        $query = "UPDATE \"theme\" SET \"theme\"='{$theme}', \"ttl\"='{$ttl}', \"isRemake\"={$isRemake}, \"isOpen\"={$isOpen}";
        if ($db->exec($query) === false) {
            exit("Error: Failed to update database");
        }
    } else {
        $schoolYear = toSchoolYear($year, $month);
        $query = "INSERT INTO \"theme\" VALUES(NULL, {$schoolYear}, {$year}, {$month}, '{$theme}', '{$ttl}', {$isRemake}, {$isOpen})";
        if ($db->exec($query) === false) {
            var_dump($db->lastErrorMsg);
            exit("Error: Cannot insert record to database");
        }
    }

}

// change open theme
if (isset($_GET['mode']) && $_GET['mode'] == 'open' && isset($_GET['id'])) {
    if (ctype_digit($_GET['id']) === false) {
        exit("Error: Unknown theme id (E:".__LINE__.")");
    }
    $id = $_GET['id'];
    $query = "SELECT count(*) FROM \"theme\" WHERE \"id\"={$id}";
    $res = $db->query($query);
    $res = $res->fetchArray();
    if ($res[0]) {
        // reset open flag
        $query = "UPDATE \"theme\" SET \"isOpen\"=0 WHERE \"isOpen\"=1";
        $db->exec($query);

        // set open flag
        $query = "UPDATE \"theme\" SET \"isOpen\"=1 WHERE \"id\"={$id}";
        $db->exec($query);
    } else {
        exit("Error: Unknown theme id (E:".__LINE__.")");
    }
}

// all close
if (isset($_GET['mode']) && $_GET['mode'] == 'close' && isset($_GET['id'])) {
    if (ctype_digit($_GET['id']) === false) {
        exit("Error: Unknown theme id (E:".__LINE__.")");
    }
    $id = $_GET['id'];
    $query = "SELECT count(*) FROM \"theme\" WHERE \"id\"={$id}";
    $res = $db->query($query);
    $res = $res->fetchArray();
    if ($res[0]) {
        // set close flag
        $query = "UPDATE \"theme\" SET \"isOpen\"=0 WHERE \"id\"={$id}";
        $db->exec($query);
    } else {
        exit("Error: Unknown theme id (E:".__LINE__.")");
    }
}

// delete
if (isset($_GET['mode']) && $_GET['mode'] == 'delete' && isset($_GET['id'])) {
    if (ctype_digit($_GET['id']) === false) {
        exit("Error: Unknown theme id (E:".__LINE__.")");
    }
    $id = $_GET['id'];
    $query = "SELECT count(*) FROM \"theme\" WHERE \"id\"={$id}";
    $res = $db->query($query);
    $res = $res->fetchArray();
    if ($res[0]) {
        // delete
        $query = "DELETE FROM \"theme\" WHERE \"id\"={$id}";
        $db->exec($query);
    } else {
        exit("Error: Unknown theme id (E:".__LINE__.")");
    }
}

// fetch available theme
$query = "SELECT count(*) FROM \"theme\" WHERE \"isOpen\"=1";
$res = $db->query($query);
$res = $res->fetchArray();
$current = array();
if ($res[0] === 0) {
    $current = array(
        'id'        => 0,
        'school'    => 0,
        'year'      => 0,
        'month'     => 0,
        'theme'     => '',
        'ttl'       => '',
        'isRemake'  => 0,
        'isOpen'    => 0,
    );
} else {
    $query = "SELECT * FROM \"theme\" WHERE \"isOpen\"=1";
    $res = $db->query($query);
    $res = $res->fetchArray();
    $current = array(
        'id'        => $res['id'],
        'school'    => $res['schoolYear'],
        'year'      => $res['year'],
        'month'     => $res['month'],
        'theme'     => htmlspecialchars($res['theme']),
        'ttl'       => htmlspecialchars($res['ttl']),
        'isRemake'  => $res['isRemake'],
        'isOpen'    => $res['isOpen'],
    );
}

// generate form parts
//   select year
$fromYear = date('Y') - 2; // the past 2 year
$yearOption = '';
if ($current['year']) {
    $yearOption .= '<option value="0">year</option>';
} else {
    $yearOption .= '<option value="0" selected="selected">year</option>';
}
for ($i=$fromYear; $i < $fromYear+10; ++$i) {
    if ($i === $current['year']) {
        $yearOption .= "<option value=\"{$i}\" selected=\"selected\">{$i}</option>";
    } else {
        $yearOption .= "<option value=\"{$i}\">{$i}</option>";
    }
}

//   select month
$monthOption = '';
if ($current['month']) {
    $monthOption .= '<option value="0">month</option>';
} else {
    $monthOption .= '<option value="0" selected="selected">month</option>';
}
for ($i=1; $i<=12; ++$i) {
    if ($i === $current['month']) {
        $monthOption .= "<option value=\"{$i}\" selected=\"selected\">{$i}</option>";
    } else {
        $monthOption .= "<option value=\"{$i}\">{$i}</option>";
    }
}

//   select remake
$remakeOption = '';
if ($current['isRemake']) {
    $remakeOption .= '<option value="0">通常</option>';
    $remakeOption .= '<option value="1" selected="selected">リメイク</option>';
} else {
    $remakeOption .= '<option value="0" selected="selected">通常</option>';
    $remakeOption .= '<option value="1">リメイク</option>';
}

//   select open
$openOption = '';
if ($current['isOpen']) {
    $openOption .= '<option value="0">close</option>';
    $openOption .= '<option value="1" selected="selected">open</option>';
} else {
    $openOption .= '<option value="0" selected="selected">close</option>';
    $openOption .= '<option value="1">open</option>';
}

// all list
$allList = array();
$query = "SELECT * FROM \"theme\"";
$res = $db->query($query);
if ($res->fetchArray()) {
    $res->reset();
    while($data = $res->fetchArray()) {
        $allList[] = array(
            'id'            => $data['id'],
            'schoolYear'    => $data['schoolYear'],
            'year'          => $data['year'],
            'month'         => $data['month'],
            'theme'         => htmlspecialchars($data['theme']),
            'ttl'           => htmlspecialchars($data['ttl']),
            'remake'        => $data['isRemake'] ? 'remake' : 'common',
            'open'          => $data['isOpen']   ? 'open'   : 'close',
            'openLink'      => $data['isOpen']   ? 'close'  : 'open',
        );
    }
} else {
    $allList[0] = array(
        'id'            => 0,
        'schoolYear'    => 0,
        'year'          => 0,
        'month'         => 0,
        'theme'         => 'No DATA',
        'ttl'           => '-',
        'remake'        => 'error',
        'open'          => '-',
        'openLink'      => '0',
    );
}
?>
<html>
<head>
<title>theme setting</title>
<meta name="robots" content="noindex,nofollow" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<p><a href="admin.php">戻る</a>&nbsp;<a href="?logout=1">ログアウト</a></p>
<form action="<?php echo $_SERVER['SCRIPT_NAME']; ?>" method="POST">
    <select name="year" id="year">
        <?php echo $yearOption; ?>
    </select>年&nbsp;
    <select name="month" id="month">
        <?php echo $monthOption; ?>
    </select>月&nbsp;
    テーマ:<input type="text" name="theme" id="theme" value="<?php echo $current['theme']; ?>" size="30" />
    <input type="hidden" name="ttl" id="ttl" value="<?php echo $current['ttl']; ?>" size="20" />
    <select name="isRemake" id="isRemake">
        <?php echo $remakeOption; ?>
    </select>
    <select name="isOpen" id="isOpen">
        <?php echo $openOption; ?>
    </select>
    <input type="submit" name="mode" id="mode" value="update" /> 
</form>

<p><a href="cleaning.php">新しいテーマを設定する時は、作品の一時保存ディレクトリを掃除するのを忘れないでください。</a></p>
<table border="1">
    <tr>
        <th>年</th>
        <th>月</th>
        <th>テーマ</th>
        <th>種別</th>
        <th>状態</th>
        <th>操作</th>
    </tr>
    <?php foreach($allList as $value): ?>
    <tr>
        <td><?php echo $value['year']; ?></td>
        <td><?php echo $value['month']; ?></td>
        <td><?php echo $value['theme']; ?></td>
        <td><?php echo $value['remake']; ?></td>
        <td><?php echo $value['open']; ?></td>
        <td>
            <a href="<?php echo "{$_SERVER['SCRIPT_NAME']}?mode={$value['openLink']}&amp;id={$value['id']}"; ?>"><?php echo $value['openLink'] ?></a>
            <a href="<?php echo "{$_SERVER['SCRIPT_NAME']}?mode=delete&amp;id={$value['id']}"; ?>" onclick="return confirm('本当に削除しますか?')">del</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>


</body>
</html>
