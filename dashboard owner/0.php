<?php 
session_start();
echo "nama : ".$_SESSION['nama']."<br>";
echo "id_user : ".$_SESSION['id_user']."<br>";
echo "id_bengkel : ".$_SESSION['id_bengkel']."<br>";
echo "nama bengkel : ".$_SESSION['nama_bengkel']."<br>";
echo "user : ".$_SESSION['user']."<br>";
echo "role : ".$_SESSION['role']."<br>";
echo "img : ".$_SESSION['img']."<br>";
?>