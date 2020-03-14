<?php

include '../Database.php';
class Member {
    private $connect;
    private $table;

    public function __construct()
    {
        $db = new Database();
        $this->connect = $db->connect();
        $this->table = "member";
    }

    public function get(){
        $query = "SELECT * FROM ".$this->table;
        $result = mysqli_query($this->connect, $query);

        $data =[];
        while($row= mysqli_fetch_assoc($result)){
            $data[] = $row;
        }

        return $data;
    }

    public function delete($id){
        $query  = "DELETE FROM ".$this->table;
        $query .=" WHERE id='".$id."'";

        $res = mysqli_query($this->connect,$query);
        return $res;
    }

    public function add($data){
        $request= json_decode(json_encode($data));
        $query = "INSERT INTO member (`nim`,`nama`,`telpon`,`alamat`)";
        $query .= "VALUES ('".$request->nim."','".$request->nama."','".
                    $request->telpon."','".$request->alamat."')";
        $res = mysqli_query($this->connect, $query);
        return $res;
    }

}