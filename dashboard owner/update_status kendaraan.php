<?php
require '../koneksi.php';
$b=$_POST['tipe'];
$c=$_POST['merk'];
$d=$_POST['status'];
$id=$_POST['id_kendaraan'];

$sql=mysqli_query($conn,"update kendaraan set tipe='$b',merk='$c',status='$d' where id_kendaraan='$id'");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully updated.');
        window.location='admin.php?url=tabel_status_kendaraan';
    </script>
    <?php
}
?>