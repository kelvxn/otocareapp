<?php
session_start();
if(!isset($_SESSION['nama'])){
    die("you're not logged in yet.");
}
if($_SESSION['role']!="owner"){
    die("you're not an owner.");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard Owner</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logos.png">
    <!-- Custom Stylesheet -->
    
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <!-- <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="..." alt=""> </b>
                    <span class="logo-compact"><img src="..." alt=""></span>
                    <span class="brand-title">
                        <img src="..." alt="">
                    </span>
                </a>
            </div>
        </div> -->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="blank.html">
                    <b class="logo-abbr"><img src="images/logos.png" alt="" > </b>
                    <span class="logo-compact"><img src="./images/logos.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/comp.png" alt="" width="200" height="70" class="mt-1">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header bg-warning" >    
            <div class="header-content clearfix ">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu" style="color:white"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                       <div class="drop-down   d-md-none">
							<form action="#">
								<input type="text" class="form-control" placeholder="Search">
							</form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <?php
                             
                                require '../koneksi.php';
                                $owner=$_SESSION['id_user'];
                                $sql=mysqli_query($conn,"select * from user where id_user='$owner'");
                                while($data=mysqli_fetch_array($sql)){
                             
                                 
             if($data['img']==null){
             ?>
                 <img src="img/1.png" height="40" width="40" alt="" />
       <?php } else { ?>
        <img src="img/<?php echo $data['img']; ?>" height="40" width="40" alt="" />
         <?php } }?>
                  <!-- <img src="images/user/1.png" height="40" width="40" alt="" /> -->
                  
                            </div>
                            <div class="drop-down dropdown-profile   dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                    <li>
                                    <a href=""><span>logged in as <?php echo $_SESSION['nama']; ?></span></a>
                                    </li>
                                        <li>
                                            <a href="?url=profil"><i class="icon-user" ></i> <span>Profile</span></a>
                                        </li>
                                        
                                        <hr class="my-2">
                                        <li><a href="../logout.php"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        
        <div class="nk-sidebar ">     
            <div class="nk-nav-scroll ">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li>
                        <a href="admin.php" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="mega-menu mega-menu-sm">
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class=" fa fa-light fa-table"></i><span class="nav-text">Tabel</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="?url=tabel_informasi">Tabel Informasi Harga</a></li>
                            <li><a href="?url=tabel_status_kendaraan">Tabel Status Kendaraan</a></li>
                            <li><a href="?url=tabel_service">Tabel Service</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <?php include 'halaman_admin.php'; ?>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; Designed & Developed by <a href="">Otocare</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    

</body>

</html>