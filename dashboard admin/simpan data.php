<?php
require '../koneksi.php';
$c=$_POST['nama'];
$d=$_POST['alamat'];
$e=$_POST['id_owner'];
$f=$_POST['latitude'];
$g=$_POST['longitude'];
$h=$_POST['deskripsi'];

$ft=$_FILES['img']['name'];
$file=$_FILES['img']['tmp_name'];

// if($file != "")
// {
//     move_uploaded_file($file,"img/".$ft);
//     $sqlq="update owner set nama='$c',username='$d',password='$e',telp='$f', img='$ft' where id_owner='$b'";
// }else
// {
//     $sqlq="update owner set nama='$c',username='$d',password='$e',telp='$f' where id_owner='$b'";
// }

// $sql=mysqli_query($conn,$sqlq);

$sql=mysqli_query($conn,"insert into bengkel(nama,alamat,id_owner,latitude,longitude,deskripsi,gambar) values('$c','$d','$e','$f','$g','$h','$ft')");
move_uploaded_file($file,"img/".$ft);


if($sql){
    ?>
    <script type="text/javascript">
        alert ('Data successfully saved.');
        window.location='tables.php';
    </script>
    <?php
    }

?>