<?php
/**
 * common functions
 *
 * @version 0.1
 * @author konoiz <izumi@konome.org>
 */

require_once('config.inc.php');
date_default_timezone_set('Asia/Tokyo'); 

function existsTable($db, $tableName) {
    if ($db instanceof SQLite3) {
        $query = "SELECT count(*) FROM sqlite_master WHERE type='table' AND name='{$tableName}'";
        $res = $db->query($query);
        $res = $res->fetchArray();
        if ($res[0]) {
            return true;
        } 
    }
    return false;
}

function getImageData($db, $key, $table = 'list', $column = 'imgFileName', $columnType = 'string') {
    if ($db instanceof SQLite3) {
        switch ($columnType) {
            case 'integer':
            case 'int':
                $query = "SELECT * FROM \"{$table}\" WHERE \"{$column}\"={$key}";
                break;

            case 'string':
            case 'str':
            default:
                $query = "SELECT * FROM \"{$table}\" WHERE \"{$column}\"='{$key}'";
                break;
        }

        $res = $db->query($query);
        return $res->fetchArray();
    }
    return false;
}

function getImageList($db, $table = 'list', $option = '') {
    if ($db instanceof SQLite3) {
        $query = "SELECT * FROM \"{$table}\" {$option}";
        $res = @$db->query($query);
        if ($res) {
            $res->reset();
            $list = array();
            while ($list[] = $res->fetchArray());
            array_pop($list);
            if (!empty($list)) {
                return $list;
            }
        } 
    }
    return false;
}

function getTouchupList($db, $table = "list", $column = 'touchup') {
    if ($db instanceof SQLite3) {
        $query = "SELECT * FROM \"{$table}\" WHERE \"{$column}\"!=0";
        $res = @$db->query($query);
        if ($res) {
            $res->reset();
            $list = array();
            while ($list[] = $res->fetchArray());
            array_pop($list);
            return $list;
        }
    }
    return false;
}

function deleteImageData($db, $key, $table = 'list', $column = 'imgFileName', $columnType = 'string') {
    if ($db instanceof SQLite3) {
        switch ($columnType) {
            case 'integer':
            case 'int':
                $query = "DELETE FROM \"{$table}\" WHERE \"{$column}\"={$key}";
                break;

            case 'string':
            case 'str':
            default:
                $query = "DELETE FROM \"{$table}\" WHERE \"{$column}\"='{$key}'";
                break;
        }

        if ($db->exec($query)) {
            return true;
        }
    }
    return false;
}

function getOpenTheme($db, $table = 'theme', $column = 'isOpen') {
    if ($db instanceof SQLite3) {
        $table = $db->escapeString($table);
        $column = $db->escapeString($column);
        $query = "SELECT * FROM \"{$table}\" WHERE \"{$column}\"=1";
        $res = $db->query($query);
        if ($res = $res->fetchArray()) {
            return $res;
        }
    }
    return false;
}

function getThemeList($db, $table = 'theme') {
    if ($db instanceof SQLite3) {
        $table = $db->escapeString($table);
        $query = "SELECT * FROM \"{$table}\"";
        if ($res = $db->query($query) && $res->fetchArray()) {
            $res->reset();
            $list = array();
            while($list[] = $res->fetchArray());
            array_pop($list);   // last value is false
            if (empty($list)) {
                $list[0] = array(
                    'id'            => 0,
                    'schoolYear'    => 0,
                    'year'          => 0,
                    'month'         => 0,
                    'theme'         => 'No DATA',
                    'ttl'           => '-',
                    'isRemake'      => 0,
                    'isOpen'        => 0,
                );
            }
            return $list;
        }
    }
    return false;
}

function getThemeById($db, $id, $table = 'theme') {
    if ($db instanceof SQLite3) {
        if (is_numeric($id) === false) {
            return false;
        }
        $id    = (int)$id;
        $table = $db->escapeString($table);
        $query = "SELECT * FROM \"{$table}\" WHERE \"id\"={$id}";
        $res = $db->query($query);
        return $res->fetchArray();
    }
}

function getThemeByDate($db, $year, $month, $table = 'theme') {
    if ($db instanceof SQLite3) {
        if (is_numeric($year) === false || is_numeric($month) === false ||
            $month > 12 || $month < 1
        ) {
            return false;
        }
        $year  = (int)$year;
        $month = (int)$month;
        $table = $db->escapeString($table);
        $query = "SELECT * FROM \"{$table}\" WHERE \"year\"={$year} AND \"month\"={$month}";
        $res = $db->query($query);
        return $res->fetchArray();
    }
}

function resetOpenTheme($db, $table = 'theme', $column = 'isOpen') {
    if ($db instanceof SQLite3) {
        $table  = $db->escapeString($table);
        $column = $db->escapeString($column);

        $query = "UPDATE \"{$table}\" SET \"{$column}\"=0 WHERE \"{$column}\"=1 ";
        $db->exec($query);
    }
}

function setOpenTheme($db, $id, $table = 'theme', $column = 'isOpen') {
    if ($db instanceof SQLite3) {
        resetOpenTheme($db, $table, $column);
        $table  = $db->escapeString($table);
        $column = $db->escapeString($column);

        $query = "UPDATE \"{$table}\" SET \"{$column}\"=1 WHERE 'id'={$id}";
        $db->exec($query);
    }
}

function toSchoolYear($year, $month, $yearEnd = 3) {
    if ($month <= $yearEnd) {
        return $year - 1;
    } 
    return $year;
}

function convertByteUnit($byte) {
    $units = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB');
    $i = 0;
    while ($byte >= 1024) {
        ++$i;
        $byte /= 1024;
    }

    return $byte . $units[$i];
}

function requireLogin() {
    session_name('CreAdmin');
    session_start();

    if (empty($_GET['logout']) === false) {
        $_SESSION['isValid'] = false;
    }

    $file = pathinfo($_SERVER['SCRIPT_NAME']);
    if (
        (empty($_SESSION['isValid']) 
        || $_SESSION['isValid'] == false)
        && $file['basename'] != 'login.php'
    ) {
        redirect('login.php');
    }
    if ($_SESSION['isValid'] === true) {
        return true;
    }
    return false;
}

function redirect($url) {
    header("Location: {$url}");
}
