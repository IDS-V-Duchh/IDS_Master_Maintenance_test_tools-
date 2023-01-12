<?php

require_once("config.php");
require_once("function.php");

$config = new ConnectDB();
if (isset($_POST['btnConnect']) && isset($_POST['dbName']) && isset($_POST['host']) && isset($_POST['port']) && isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['numberConnections'])) {
    $host = (string)$_POST['host'];
    $port = (int)$_POST['port'];
    $dbName = (string)$_POST['dbName'];
    $userName = (string)$_POST['userName'];
    $password = (string)$_POST['password'];
    $numberConnections = (int)$_POST['numberConnections'];
    updateData($host, $port, $dbName, $userName, $password, $numberConnections);

    //Connect to a database
    $dbconnect = $config->connect($host, $port, $dbName, $userName, $password);
    disableButtonConnect();
    scrollToProgress();
    for ($i = 1; $i <= $numberConnections; $i++) {
        if (!empty($dbconnect)) {
            msg_success();
            changeProgress($i, $numberConnections);
        } else {
            msg_error();
        }
    }
    enableButtonConnect();
}
if (isset($_POST['btnDisConnect'])) {
    $config->disConnect();
    enableButtonConnect();
}
