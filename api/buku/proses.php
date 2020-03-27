<?php
include "Buku.php";
$buku = new Buku();
$mode = $_POST['mode'];
$out = [];
switch($mode){
    case 'add':
        $buku->add($_POST);
    break;
    case 'delete':
        $buku->delete($_POST['id']);
    break;
    case 'getdata':
        $out['data'] = $buku->get();
        echo json_encode($out);
    break;
}