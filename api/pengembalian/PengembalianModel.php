<?php
include "../Database.php";

class PengembalianModel {
    private $koneksi;
    private $table;
    private $db;

    public function __construct(){
        $this->db = new Database();
        $this->table = 'pengembalian';
        $this->koneksi = $this->db->connect();
    }

    public function add($data){
        $request= json_decode(json_encode($data));
        $idPengembalian = $this->db->autoNumber('id_pengembalian',$this->table);
        
        //insert ketable pengembalian
        $query_header = "INSERT INTO $this->table (`id_pengembalian`, `id_pinjam`, `nim`, `tgl_kembali`, `tgl_realisasi`,`denda`)";
        $query_header .=" VALUES ('".$idPengembalian."', '".$request->id_pinjam."', '".$request->nim."', '".$request->tgl_kembali."', '".$request->tgl_realisasi."',".$request->denda.")";
        $res = mysqli_query($this->koneksi, $query_header);

        //update table peminjaman header
        $update = mysqli_query($this->koneksi, "UPDATE peminjaman_header SET `status`='1' WHERE idpinjam='".$request->id_pinjam."'");
        return $res;
    }

}

?>