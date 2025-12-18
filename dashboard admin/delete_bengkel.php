<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql1=mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0");
$sql=mysqli_query($conn,"delete from bengkel where id_bengkel='$id'");

if($sql){
    ?>
    <script type="text/javascript">
        alert('Data successfully deleted.');
        window.location='javascript:history.go(-1)';
    </script>
    <?php
}
?>