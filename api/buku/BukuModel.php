<?php
include "../Database.php";

class BukuModel {
    private $koneksi;
    private $table;

    public function __construct(){
        $db = new Database();
        $this->table = 'buku';
        $this->koneksi = $db->connect();
    }

    public function get(){
        $query = "SELECT * FROM ".$this->table;
        $res = mysqli_query($this->koneksi, $query);
        
        $data=[];
        while($row=mysqli_fetch_assoc($res)){
            $data[]=$row;
        }
        return $data;
    }
}