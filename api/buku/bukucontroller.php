<?php 
include "BukuModel.php";

$buku = new BukuModel();
$data = $buku->get();
echo json_encode($data);