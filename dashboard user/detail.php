<?php
session_start();
if(!isset($_SESSION['nama'])){
    die("you're not logged in yet.");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Dashboard User</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logos.png" />
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
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
      <div class="nav-header">
        <div class="brand-logo">
          <a href="halaman setelah login.php">
            <span class="logo-compact" style="text-align: center"><img src="images/comp.png" alt="" width="120" height="50" style="margin-top: 10px" /></span>
          </a>
        </div>
      </div>
      <!--**********************************
            Nav header end
        ***********************************-->

      <!--**********************************
            Header start
        ***********************************-->
      <div class="header bg-warning ">
        <div class="header-content clearfix">
          <div class="header-right">
            <ul class="clearfix">
              <li class="icons dropdown d-none d-md-flex">
                <a href="lokasi.php" class="log-user">
                  <span class="text-white">Lokasi</span>
                </a>
              </li>
              <li class="icons dropdown d-none d-md-flex">
                <a href="harga.php" class="log-user data-toggle="dropdown">
                  <span class="text-white">Informasi</span>
                </a>
              </li>
              <li class="icons dropdown d-none d-md-flex">
                <a href="tabel status user.php" class="log-user">
                  <span class="text-white">Status</span>
                </a>
              </li>
              <li class="icons dropdown">
                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                  <span class="activity active"></span>
                  <?php
               require '../koneksi.php';
               $user=$_SESSION['id_user'];
               $sql0=mysqli_query($conn,"select img from user where id_user='$user'");
               while($data0=mysqli_fetch_array($sql0)){

        if($data0['img']==null){
   ?>
                 <img src="img/2.jpg" height="40" width="40" alt="" />
       <?php } else { ?>
        <img src="img/<?php echo $data0['img']; ?>" height="40" width="40" alt="" />
       <?php } ?>
                  <!-- <img src="images/user/1.png" height="40" width="40" alt="" /> -->
                  
               <?php }   ?>
                </div>
                <div class="drop-down dropdown-profile dropdown-menu">
                  <div class="dropdown-content-body">
                    <ul>
                      <li>
                        <a href="profil.php"><i class="icon-user"></i> <span>Profile</span></a>
                      </li>

                      <hr class="my-2" />

                      <li>
                        <a href="../logout.php"><i class="icon-key"></i> <span>Logout</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <center>
      <div class="container pt-5 pb-3">
        <h1 class="ms-5">Detail Bengkel </h1>
        <hr width="25%" size="10" color="orange" />
      </div></center><br>
      <!--**********************************
            Content body start
        ***********************************-->
       <div class="container-fluid">
    
      <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php
     require '../koneksi.php';
    //  $sql=mysqli_query($conn,"select bengkel.id_owner, bengkel.id_bengkel, latitude, longitude, gambar, owner.nama as ownam, bengkel.nama as bengnam, deskripsi, alamat, telp from bengkel join owner on bengkel.id_owner = owner.id_owner where bengkel.id_bengkel='$_GET[id]'");
     $sql=mysqli_query($conn,"select bengkel.id_owner, id_bengkel, latitude, longitude, gambar, user.nama as ownam, bengkel.nama as bengnam, deskripsi, bengkel.alamat, telp from bengkel join user on bengkel.id_owner = user.id_user where id_bengkel='$_GET[id]'");
     while($data=mysqli_fetch_array($sql)){
      
      ?>
        <div class="col">
          <div class="card h-90">
            <img src="img/<?php echo $data['gambar']; ?>" class="card-img-top" alt="..." />
            <div class="card-body">
                  <center><h3><?php echo $data['alamat']; ?></h3><br><?php echo $data['latitude']; ?>, <?php echo $data['longitude']; ?></center>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card" style="height: 28rem">
            <div class="card-body">
              <h1><?php echo $data['bengnam']; ?></h1>
              <hr />
              <h5>Owner :<h6><?php echo $data['ownam']; ?></h6><br><br>
              <h5>Kontak :</h5><h6><?php echo $data['telp']; ?></h6><br><br>
              <h5>Deskripsi :</h5>

              <h6 class="card-text">
              <?php echo $data['deskripsi']; ?>
     </h6>
            </div>
          </div>
          <br />
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php echo $data['bengnam']; ?></h5>
              <p class="card-text text-warning">Online 5 menit yang lalu <a href="https://wa.me/<?php echo $data['telp']; ?>" class="btn btn-warning justify-content-md-end"><i class="fa fa-whatsapp fa-2x"></i> <b>Hubungi</b></a></p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    
          
          
        </div>
      </div>
      <div class="container">
            <div class="row">
                <div class="col-12"><br>
                    <h1 class="text-center">Informasi Harga Untuk <?php echo $data['bengnam']; ?></h1>
                    <?php } ?>
      <div class="row mt-5">
                    <?php
     $sql2=mysqli_query($conn,"select * from informasi where id_bengkel='$_GET[id]'");
     
     while($data=mysqli_fetch_array($sql2)){
      
      ?>
      
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <img class="img-fluid" src="images/big/img1.jpg" alt="">
                                <table class="table border-bottom mb-auto" style="font-size: 9px; color: black;">
                                    <tr>
                                      <td><i class="fa fa-solid fa-star"></i> Dijamin Harga Lebih Murah</td>
                                      <td><i class="fa fa-solid fa-check"></i> Garansi 14 Hari</td>
                                    </tr>
                                  </table>
                                <div class="card-body">
                                    <h1 class="card-title"><?php echo $data['nama']; ?></h1>
                                    <p class="card-text">Mulai Dari</p> 
                                    <h4 class="mb-4 text-warning">Rp<?php echo $data['harga']; ?></h4>
                                    <a href="detailharga.php?id=<?php echo $data['id_informasi']; ?>" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    </div>
            </div>
        </div>
      
    </section>
  
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-warning text-muted">
      <!-- Section: Social media -->
      
      <!-- Section: Links  -->
      <section  class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="container text-center text-md-start">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4"><i class="fas fa-gem me-3"></i>OTOCARE</h6>
              <p class="text-white">Merupakan sebuah solusi untuk memudahkan customer mencari bengkel dan melakukan perawatan kendaraan mereka yang bisa diakses dengan mudah, kapanpun dan dimanapun. Dirintis pada tahun 2023.</p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Products</h6>
              <p  class="text-reset text-white">
                Bengkel Terdekat
              </p>
              <p  class="text-reset text-white">
                Bengkel Populer
              </p>
              <p  class="text-reset text-white">
                Status Kendaraan
              </p>
              <p  class="text-reset text-white">
                Service Panggilan
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Daerah</h6>
              <p  class="text-reset text-white">
                Malang Kota
              </p>
              <p  class="text-reset text-white">
               Batu
              </p>
              <p  class="text-reset text-white">
               Kepanjen
              </p>
              <p  class="text-reset text-white">
               Dampit
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
              <p class="text-white"><i class="fa fa-home me-3 text-white" ></i>Malang, MLG 1102</p>
              <p class="text-white">
                <i class="fa fa-envelope me-3 text-white"></i>
               otocare@gmail.com
              </p>
              <p class="text-white"><i class="fa fa-phone me-3 text-white"></i> +62 838 4741 9334</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4 text-white">
      <span>Copyright &copy; Designed & Developed by <a href="" class="text-dark">OTOCARE</a> 2023</span>
     
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
    <!-- <div class="container text-center pt-5 pb-5">ALL Rights Reserved &copy; 2023</div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <script src="./plugins/highlightjs/highlight.pack.min.js"></script>
    <script>
      hljs.initHighlightingOnLoad();
    </script>

    <script>
      (function ($) {
        "use strict";

        new quixSettings({
          version: "light", //2 options "light" and "dark"
          layout: "horizontal", //2 options, "vertical" and "horizontal"
          navheaderBg: "color_1", //have 10 options, "color_1" to "color_10"
          headerBg: "color_1", //have 10 options, "color_1" to "color_10"
          sidebarStyle: "vertical", //defines how sidebar should look like, options are: "full", "compact", "mini" and "overlay". If layout is "horizontal", sidebarStyle won't take "overlay" argument anymore, this will turn into "full" automatically!
          sidebarBg: "color_1", //have 10 options, "color_1" to "color_10"
          sidebarPosition: "static", //have two options, "static" and "fixed"
          headerPosition: "static", //have two options, "static" and "fixed"
          containerLayout: "wide", //"boxed" and  "wide". If layout "vertical" and containerLayout "boxed", sidebarStyle will automatically turn into "overlay".
          direction: "ltr", //"ltr" = Left to Right; "rtl" = Right to Left
        });
      })(jQuery);
    </script>
  </body>
</html>
