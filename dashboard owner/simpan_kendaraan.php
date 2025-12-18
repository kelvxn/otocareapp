<?php
require '../koneksi.php';
$d=$_POST['tipe'];
$e=$_POST['merk'];
$f=$_POST['status'];
$g=$_POST['idb'];

$sql=mysqli_query($conn,"insert into kendaraan(tipe,merk,status,id_bengkel,id_servis) values('$d','$e','$f','$g',NULL)");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully saved.');
        window.location='admin.php?url=tabel_status_kendaraan';
    </script>
    <?php
}
?>