<?php
include "../Database.php";

class PeminjamanModel {
    private $koneksi;
    private $table;
    private $db;

    public function __construct(){
        $this->db = new Database();
        $this->table = 'peminjaman_header';
        $this->tbl_member='member';
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

    public function get($request){
        $query = "SELECT ".$this->table.".*, ".$this->tbl_member.".nama, ".$this->tbl_member.".nim FROM ";
        $query .= "peminjaman_header ";
        $query .="INNER JOIN member on member.nim = peminjaman_header.idpeminjam ";
        $query .= "where peminjaman_header.idpinjam LIKE('%".$request['search']['value']."%')";

        $res = mysqli_query($this->koneksi, $query);

        $data=[];
        while($row=mysqli_fetch_assoc($res)){
            $data[]=$row;
        }

        return $res = [
            "draw"=> $request['draw'],
            "recordsTotal"=> 0,
            "recordsFiltered"=> 0,
            "data"=>$data
        ];
        
    }

}