<?php
include "../Database.php";

class BukuModel {
    private $koneksi;
    private $table;

    public function __construct(){
        $db = new Database();
        $this->table = 'peminjaman';
        $this->koneksi = $db->connect();
    }

    public function add($data){
        $noAuto = 2123123;

        $q1 = "insert into ke table header no =noAuto";
        mysqli_query($this->koneksi, $q1);

        for(kiriman dari form){
            $q1 = "insert into ke table detail no = noAuto";
            mysqli_query($this->koneksi, $q1);
        }
    }

}