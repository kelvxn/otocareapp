<?php
require '../koneksi.php';
$b=$_POST['id_owner'];
$c=$_POST['id_kendaraan'];
$d=$_POST['tanggal'];
$e=$_POST['biaya'];
$f=$_POST['status'];
$g=$_POST['id_user'];
$h=$_POST['deskripsi'];

$sql=mysqli_query($conn,"insert into servis(id_bengkel,id_kendaraan,tanggal,biaya,status,id_customer,deskripsi) values('$b','$c','$d','$e','$f','$g','$h')");



if($sql){
    $sql0=mysqli_query($conn,"select id_servis from servis where id_kendaraan='$c'");
    while($data=mysqli_fetch_array($sql0)){
        $z=$data['id_servis'];
    $sql1=mysqli_query($conn,"update kendaraan set id_servis='$z' where id_kendaraan='$c'");
    if($sql1){
    ?>
    <script type="text/javascript">
        alert ('Data successfully saved.');
        window.location='admin.php?url=tabel_service';
    </script>
    <?php
    }
}
}
?>