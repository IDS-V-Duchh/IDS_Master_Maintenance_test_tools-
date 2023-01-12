<?php

require_once("config.php");
require_once("function.php");

$config = new ConnectDB();
if (isset($_POST['btnConnect']) && isset($_POST['dbName']) && isset($_POST['host']) && isset($_POST['port']) && isset($_POST['userName']) && isset($_POST['password']) && isset($_POST['numberConnections'])) {
    $host = $_POST['host'];
    $port = $_POST['port'];
    $dbName = $_POST['dbName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
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
