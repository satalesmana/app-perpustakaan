<?php
include "../Database.php";
class Buku {
    private $koneksi;
    private $table;
    
    public function __construct()
    {
        $db = new Database();

        $this->koneksi = $db->connect();
        $this->table = "buku";
    }

    public function add($data){
        $data = json_decode(json_encode($data));
        $query = "INSERT INTO `".$this->table."` (`judul`) 
                 VALUES('".$data->judul."')";
        $res = mysqli_query($this->koneksi, $query);
        return $res;
    }
    
    public function delete($id){
        $query = "DELETE FROM `".$this->table."` WHERE id='".$id."'";
        $res = mysqli_query($this->koneksi, $query);
        return $res;
    }

    public function get(){
        $query ="SELECT * FROM ".$this->table;
        $res = mysqli_query($this->koneksi,$query);

        $data =[];
        while($row= mysqli_fetch_assoc($res)){
            $data[] = $row;
        }
        return $data;
    }

}