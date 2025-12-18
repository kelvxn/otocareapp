<?php
require '../koneksi.php';
$b=$_POST['id_owner'];
$c=$_POST['val-nama'];
$d=$_POST['val-username'];
$e=$_POST['val-password'];
$f=$_POST['val-phone'];
$g=$_POST['val-alamat'];

$ft=$_FILES['img']['name'];
$file=$_FILES['img']['tmp_name'];

if($file != "")
{
    move_uploaded_file($file,"img/".$ft);
    $sqlq="update user set nama='$c',username='$d',password='$e',telp='$f',alamat='$g', img='$ft' where id_user='$b'";
}else
{
    $sqlq="update user set nama='$c',username='$d',password='$e',telp='$f',alamat='$g' where id_user='$b'";
}

$sql=mysqli_query($conn,$sqlq);

// $sql=mysqli_query($conn,"update owner set nama='$c',username='$d',password='$e',telp='$f' where id_owner='$b'");

if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully updated.');
        window.location='admin.php?url=profil';
    </script>
    <?php
}
?>