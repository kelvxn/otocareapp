<?php
require '../koneksi.php';
$c=$_POST['nama'];
$d=$_POST['harga'];
$e=$_POST['deskripsi'];
$f=$_POST['bengkel'];

$sql=mysqli_query($conn,"insert into informasi(nama,harga,deskripsi,id_bengkel) values('$c','$d','$e','$f')");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully saved.');
        window.location='admin.php?url=tabel_informasi';
    </script>
    <?php
}
?>