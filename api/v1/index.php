<?php
require_once 'api.php';
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

$dbname = 'pregnancy_base';
$sqluser = 'pregServer';
$sqlpass = 'pTI0M3WRL034vfJz' ;

$mysqli = new mysqli('localhost', $sqluser, $sqlpass, $dbname);
if($mysqli->connect_error) {
  die(json_encode(Array('error' => 'MySQL Connect Error ('.
    $mysqli->connect_errno.') '.
    $mysqli->connect_error)));
}

try {
    $API = new mAPI($_REQUEST['request'], $_SERVER['HTTP_ORIGIN'],$mysqli);
    print $API->runAPI();
} catch (Exception $e) {
    print json_encode(Array('error' => $e->getMessage()));
}

?>
