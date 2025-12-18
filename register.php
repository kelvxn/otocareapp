<?php
require 'koneksi.php';
$nama=$_POST['nama'];
$usn=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];
$role=$_POST['role'];

$sql=mysqli_query($conn,"insert into user values(NULL,'$nama','$usn','$pass','$telp','$alamat',NULL,'$role')");
if($sql){
    ?>
    <script>
        alert('Data successfully saved, please use it for login.');
        window.location="login.html";
    </script>    
<?php
}
?>