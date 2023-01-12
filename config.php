<?php

class ConnectDB
{
    private $connect;

    public function connect($host, $port, $dbname, $user, $password)
    {
        if (!$this->connect) {
            $connString = "host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password;
            try {
                $this->connect = pg_pconnect($connString);
                return true;
            } catch (\Throwable $th) {
                logError($th->getMessage());
                msg_error();
                return false;
            }
        }
    }

    public function disConnect()
    {
        if ($this->connect) {
            return pg_close($this->connect);
        }
    }
}
