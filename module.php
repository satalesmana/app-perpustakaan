<?php 
    $app_js	    = "";
    $app_page   = "";
    $url 	    = isset($_GET['url'])?$_GET['url']:'';

    switch ($url){
        case "biodata":
            $app_page = "page/biodata/biodataIndex.php";
            $app_js = "page/biodata/biodataJs.php";
        break;

        case "buku":
            $app_page = "page/buku/bukuIndex.php";
            $app_js = "page/buku/bukuJs.php";
        break;

        case "peminjaman":
            $app_page = "page/peminjaman/peminjamanIndex.php";
            $app_js = "page/peminjaman/peminjamanJs.php";
        break;

        default:
            echo "Welcome to my App";
        break;
    }

?>