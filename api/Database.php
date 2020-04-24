<?php
require('config_db.php');

class Database  {
    private $host = DB_HOST;
    private $user = DB_USERNAME;
    private $pass = DB_PASSWORD;
    private $db   = DB_NAME;
    private $myconn;

    public function connect() {
        $con = mysqli_connect($this->host, 
            $this->user, 
            $this->pass, 
            $this->db
        );

        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
        }
        return $this->myconn;
    }

    public function close() {
        mysqli_close($this->myconn);
    }
}
