<?php
if(isset($_GET['url'])){
    $url=$_GET['url'];
    switch($url){

        case 'tabel_service';
        include 'tabel service.php';
        break;

        case 'tabel_status_kendaraan';
        include 'tabel status kendaraan.php';
        break;

        case 'tabel_informasi';
        include 'tabel informasi.php';
        break;

        case 'tambah_informasi';
        include 'tambah_informasi.php';
        break;

        case 'tambah_kendaraan';
        include 'tambah_kendaraan.php';
        break;

        case 'tambah_servis';
        include 'tambah_servis.php';
        break;

        case 'edit_servis';
        include 'edit_servis.php';
        break;

        case 'edit_informasi';
        include 'edit_informasi.php';
        break;
        
        case 'edit_status_kendaraan';
        include 'edit_status_kendaraan.php';
        break;

        case 'profil';
        include 'profil.php';
        break;
    }
} else {}
    ?>