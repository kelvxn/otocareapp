<?php
require '../koneksi.php';
$b=$_POST['id_owner'];
$c=$_POST['id_kendaraan'];
$d=$_POST['tanggal'];
$e=$_POST['biaya'];
$f=$_POST['status'];
$g=$_POST['id_user'];
$h=$_POST['deskripsi'];
$id=$_POST['id_servis'];

$sql=mysqli_query($conn,"update servis set id_bengkel='$b',id_kendaraan='$c',tanggal='$d',biaya='$e', status='$f', id_customer='$g', deskripsi='$h' where id_servis='$id'");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully updated.');
        window.location='admin.php?url=tabel_service';
    </script>
    <?php
}
?>