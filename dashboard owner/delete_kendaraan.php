<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($conn,"delete from kendaraan where id_kendaraan='$id'");

if($sql){
    ?>
    <script type="text/javascript">
        alert('Data successfully deleted.');
        window.location='javascript:history.go(-1)';
    </script>
    <?php
}
?>