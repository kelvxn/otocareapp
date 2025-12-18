<?php
require '../koneksi.php';
$b=$_POST['id_informasi'];
$c=$_POST['nama'];
$d=$_POST['harga'];
$e=$_POST['deskripsi'];
$sql=mysqli_query($conn,"update informasi set nama='$c',harga='$d',deskripsi='$e' where id_informasi='$b'");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully updated.');
        window.location='admin.php?url=tabel_informasi';
    </script>
    <?php
}
?>