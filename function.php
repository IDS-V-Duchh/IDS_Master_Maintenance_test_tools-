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
    $connectUpdateString = "{$host}, {$port}, {$dbName}, {$userName}, {$password}, {$numberConnections}";
    echo '<script type="text/javascript">updateData('.$connectUpdateString.');</script>';
}
function scrollToProgress(){
    echo '<script type="text/javascript">scrollToProgress();</script>';
}
