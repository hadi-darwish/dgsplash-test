<?php


class Database
{
    protected $host = "localhost";
    protected $db_user = "root";
    protected $db_pass = "4423";
    protected $db_name = "dgsplashdb";

    public function connect()
    {
        $connection = new mysqli($this->host, $this->db_user, $this->db_pass, $this->db_name);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }
        return $connection;
    }
}
