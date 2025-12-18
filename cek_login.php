<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($conn,"select * from user where username='$user' and password='$pass'");
$cek=mysqli_num_rows($sql);

if($cek>0){
    $data=mysqli_fetch_array($sql);
    if($data['role']=="owner"){
       $id=$data['id_user'];
        $sql0=mysqli_query($conn,"select * from bengkel where id_owner='$id'");
        $cek=mysqli_num_rows($sql0);

        if($cek>0){
            $data0=mysqli_fetch_array($sql0);
            session_start();
            $_SESSION['id_user']=$data['id_user'];
            $_SESSION['id_bengkel']=$data0['id_bengkel'];
            $_SESSION['nama_bengkel']=$data0['nama'];
            $_SESSION['user']=$user;
            $_SESSION['nama']=$data['nama'];
            $_SESSION['img']=$data['img'];
            $_SESSION['role']=$data['role'];
    
            header('location:dashboard owner/admin.php');
        } else {
            header('location:dashboard owner/tes.html');
        }
    } else if($data['role']=="admin") {
    session_start();
    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['user']=$user;
    $_SESSION['nama']=$data['nama'];
    $_SESSION['img']=$data['img'];
    $_SESSION['role']=$data['role'];
    header('location:dashboard admin/index.php');
    } else {
    session_start();
    $_SESSION['id_user']=$data['id_user'];
    $_SESSION['user']=$user;
    $_SESSION['nama']=$data['nama'];
    $_SESSION['img']=$data['img'];
    $_SESSION['role']=$data['role'];
    header('location:dashboard user/halaman setelah login.php');
    }
} else {
    ?>
    <script>
    alert('Username or password are not found.');
    window.location="login.html";
    </script>   
<?php
}
?>
