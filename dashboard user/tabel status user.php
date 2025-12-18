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
      <div class="nav-header ">
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
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-warning bg-warning fixed-top" data-bs-theme="dark">
            <div class="container-fluid">
            <a class="navbar-brand" href="halaman setelah login.php"><img src="img/logo.png" alt="" width="200" height="60" /></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="icon-menu fa-2x"></i></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link text-white" href="lokasi.php"><b>Lokasi</b></a>
                  <a class="nav-link text-white" href="harga.php"><b>Informasi</b></a>
                  <a class="nav-link text-white" href="tabel status user.php"><b>Status</b></a>
                </div>
                <div class="icons dropdown">
                <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                  <span class="activity active"></span>
                  <?php
               require '../koneksi.php';
               $user=$_SESSION['id_user'];
               $sql0=mysqli_query($conn,"select img from user where id_user='$user'");
               while($data0=mysqli_fetch_array($sql0)){

        if($data0['img']==null){
   ?>
                 <img src="img/2.jpg" class="rounded-circle" height="40" width="40" alt="" />
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
              </div>
          </div>
        </div>
      </div>
              </div>
            </div>
       </nav>
       <div class="container-fluid pt-5 pb-5"></div>
      <!--**********************************
            Content body start
        ***********************************-->
        <div class="col-lg-12 pt-5 pb-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Status Pemesanan</h4>
                    <div class="table-responsive">
                        <table class="table header-border">
                            <thead>
                                <tr>
                                    <th>Invoice</th>
                                    <th>Deskripsi</th>
                                    <th>Tipe Motor</th>
                                    <th>Cost</th>
                                    <th>Status Pengerjaan</th>
                                    <th>Payment</th>
                                </tr>
                            </thead>
                            <?php
                  require '../koneksi.php';
                  $user=$_SESSION['id_user'];
                  $sql=mysqli_query($conn,"select servis.id_servis, merk, servis.deskripsi as serdes, biaya, kendaraan.status as s1, servis.status as s2 from servis left join kendaraan on servis.id_kendaraan = kendaraan.id_kendaraan where id_customer='$user'");
                  while($data=mysqli_fetch_array($sql)){

                   ?>
                            <tbody>
                              <tr>
                                <td><?php echo $data['id_servis']; ?></td>
                                <td><?php echo $data['serdes']; ?></td>
                                <td><?php echo $data['merk']; ?></td>
                                <td>Rp<?php echo $data['biaya']; ?></td>
                                <td><?php
if($data['s1']=='menunggu'){
  echo '
<div class="progress" style="height: 10px">
<div class="progress-bar gradient-3" style="width: 25%;" role="progressbar"><span class="sr-only"></span>
</div>
</div>';
} else if($data['s1']=='diservis'){
  echo '
<div class="progress" style="height: 10px">
<div class="progress-bar gradient-3" style="width: 50%;" role="progressbar"><span class="sr-only"></span>
</div>
</div>';
} else {
  echo '
<div class="progress" style="height: 10px">
<div class="progress-bar gradient-3" style="width: 100%;" role="progressbar"><span class="sr-only"></span>
</div>
</div>';
}
  ?>
                                </td>
                                <td>
                                <?php
if($data['s2']=='belum dibayar'){
  echo '
  <span class="label gradient-3 rounded">Unpaid</span>';
} else {
    echo '
    <span class="label gradient-3 rounded">Paid</span>';
}
  ?>
                                </td>
                              </tr>
                                <!-- <tr>
                                    <td><a href="javascript:void(0)">Dhea #26589</a>
                                    </td>
                                    <td>Ganti Oli</td>
                                    <td><span class="text-muted">Honda Beat</span>
                                    </td>
                                    <td>Rp 450.000</td>
                                    <td>
                                        <div class="progress" style="height: 10px">
                                        <div class="progress-bar gradient-3" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                        </div>
                                    </div> </td>
                                    <td><span class="label gradient-3 rounded">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="javascript:void(0)">Dhea #26589</a>
                                    </td>
                                    <td>Ganti Oli</td>
                                    <td><span class="text-muted">Honda Beat</span>
                                    </td>
                                    <td>Rp 450.000</td>
                                    <td>
                                        <div class="progress" style="height: 10px">
                                        <div class="progress-bar gradient-3" style="width: 100%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                        </div>
                                    </div> </td>
                                    <td><span class="label gradient-3 rounded">Shipped</span>
                                    </td>
                                </tr> -->
                                
                            </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-warning text-muted">
      <!-- Section: Social media -->
      
      <!-- Section: Links  -->
      <section  class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="container text-center text-md-start mt-5">
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
