<?php

function msg_error()
{
    echo '<script type="text/javascript">toastMaintenace?.failToast();</script>';
}

function msg_success()
{
    echo '<script type="text/javascript">toastMaintenace?.successToast();</script>';
}

function changeProgress($value, $total)
{
    echo '<script type="text/javascript">changeProgress('.$value.','.$total.')</script>';
}
function disableButtonConnect()
{
    echo '<script type="text/javascript">disableConnect();</script>';
}
function enableButtonConnect()
{
    echo '<script type="text/javascript">enableConnect();</script>';
}

function updateData($host, $port, $dbName, $userName, $password, $numberConnections)
{
    $connectUpdateString = "'{$host}', {$port}, '{$dbName}', '{$userName}', '{$password}', {$numberConnections}";
    echo '<script type="text/javascript">updateData('.$connectUpdateString.');</script>';
}
function scrollToProgress()
{
    echo '<script type="text/javascript">scrollToProgress();</script>';
}

function logError($logMsg)
{
    $log_filename = "log";
    if (!file_exists($log_filename)) {
        // create directory/folder uploads.
        mkdir($log_filename, 0777, true);
    }
    $log_file_data = $log_filename.'/log_' . date('d-M-Y') . '.log';
    // if you don't add `FILE_APPEND`, the file will be erased each time you add a log
    file_put_contents($log_file_data, $logMsg . "\n", FILE_APPEND);
}
