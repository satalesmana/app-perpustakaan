<?php 
include "BukuModel.php";

$buku = new BukuModel();
$mode = $_POST['mod'];

switch($mode){
    case 'get':
        $data   = $buku->get(); 
        echo json_encode($data);
    break;

    case 'add':
        var_dump($_FILES['gambar']);
        $sourcePath = $_FILES['gambar']['tmp_name'];       // Storing source path of the file in a variable
        $targetPath = "upload/".$_FILES['gambar']['name']; // Target path where file is to be stored
        move_uploaded_file($sourcePath,$targetPath) ;    // Moving Uploaded file

        $buku->add($_POST, $targetPath); // ini nyimpan ke database
        echo json_encode($data);
    break;
}
