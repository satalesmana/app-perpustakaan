<?php
include "../Database.php";

class PeminjamanModel {
    private $koneksi;
    private $table;
    private $db;

    public function __construct(){
        $this->db = new Database();
        $this->table = 'peminjaman_header';
        $this->koneksi = $this->db->connect();
    }

    public function add($data){
        $request= json_decode(json_encode($data));
        $idPinjam = $this->db->autoNumber('idpinjam',$this->table);
        
        //insert ketable header
        $query_header = "INSERT INTO $this->table (`idpinjam`, `idpeminjam`, `tglPinjam`, `tglKembali`, `status`)";
        $query_header .=" VALUES ('".$idPinjam."', '".$request->peminjam."', '".$request->tglpinjam."', '".$request->tglkembali."', '0')";
        $res = mysqli_query($this->koneksi, $query_header);

        //insert ketable detail
        $query_detail = "INSERT INTO `peminjaman_detail` (`idpinjam`, `idbuku`, `qty`) VALUES ";
        foreach($request->detail as $row){
            $query_detail .=" ('".$idPinjam."', '".$row->id."', '".$row->jml."'), ";
        }
        $res = mysqli_query($this->koneksi, rtrim($query_detail, ", "));

        return $res;
    }

}