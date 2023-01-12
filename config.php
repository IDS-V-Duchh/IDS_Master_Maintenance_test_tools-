<?php
class ConnectDB
{
    private $connect;

    function connect($host,$port,$dbname, $user,$password)
    {
        if (!$this->connect) {
            $connString = "host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password;
            return $this->connect = pg_pconnect($connString);
        }
    }

    function disConnect()
    {
        if ($this->connect) {
           return pg_close($this->connect);
        }
    }
}