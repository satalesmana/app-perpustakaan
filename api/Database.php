<?php
class Database  {
    private $host = 'localhost';
    private $user = 'admin';
    private $pass = '4rfv5tgb6yhn';
    private $db   = 'lp3ipustaka';
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
