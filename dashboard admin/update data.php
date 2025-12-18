<?php
require '../koneksi.php';
$b=$_POST['id_bengkel'];
$c=$_POST['nama'];
$d=$_POST['alamat'];
// $e=$_POST['id_owner'];
$f=$_POST['latitude'];
$g=$_POST['longitude'];
$h=$_POST['deskripsi'];

$ft=$_FILES['img']['name'];
$file=$_FILES['img']['tmp_name'];

if($file != "")
{
    move_uploaded_file($file,"img/".$ft);
    $sqlq="update bengkel set nama='$c',alamat='$d',latitude='$f', longitude='$g', deskripsi='$h', gambar='$ft' where id_bengkel='$b'";
}else
{
    $sqlq="update bengkel set nama='$c',alamat='$d',latitude='$f', longitude='$g', deskripsi='$h' where id_bengkel='$b'";
}

$sql=mysqli_query($conn,$sqlq);

// $sql=mysqli_query($conn,"insert into bengkel(nama,alamat,id_owner,latitude,longitude,gambar) values('$c','$d','$e','$f','$g','$ft')");
// move_uploaded_file($file,"img/".$ft);


if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully saved.');
        window.location='tables.php';
    </script>
    <?php
    }

?>