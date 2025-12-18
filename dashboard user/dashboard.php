<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BENGKEL</title>
    <link rel="icon" type="image/png" sizes="16x16" href="images/logos.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/your-path-to-fontawesome/css/all.css" />

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/lib/font-awesome/css/font-awesome.css" type="text/css" />
  </head>

  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-warning bg-warning fixed-top" data-bs-theme="dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="dashboard.php"><img src="img/logo.png" alt="" width="200" height="60" /></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="icon-menu fa-2x"></i></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                  <a class="nav-link active text-white" aria-current="page" href="#layanan"><b>Layanan</b></a>
                  <a class="nav-link text-white" href="#populer"><b>Populer</b></a>
                  <a class="nav-link text-white" href="#tentang"><b>Tentang</b></a>
                  <a class="nav-link text-white" href="#staff"><b>Staff</b></a>
                  <a class="nav-link text-white" href="#maps"><b>Bengkel terdekat</b></a>
                  <a class="nav-link text-white" href="../login.html"><b>Login</b> </a>
                </div>
              </div>
          </div>
        </nav>
</div>
    <!-- Navigasi -->
    
    <!-- <nav class="navbar navbar-expand-lg nav-warning bg-warning shadow-lg fixed-top">
      <div class="container">
        <a class="navbar-brand" href="dashboard.php"><img src="img/logo.png" alt="" width="200" height="60" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="#layanan">Layanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#portofolio">Populer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#tentang">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#staff">Staff</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#maps">Bengkel terdekat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#kontak">Kontak Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav> -->
    <!-- Banner -->
    <div class="container-fluid banner" style="background: url(images/banner.jpg) no-repeat center center; background-size: cover; padding-top: 20%; padding-bottom: 20%; color: #fff">
      <div class="container text-center mt-5">
        <h3 class="display-5 text-white"><b>Montir Profesional Siap Datang untuk Melayani</b></h3>
        <h4 class="display-6 text-white">Cepat, Hemat, Layanan Bergaransi</h4>
        <a href="#layanan">
          <button type="button" class="btn btn-danger btn-lg">Cek Layanan</button>
        </a>
      </div>
    </div>
    <!-- Layanan -->
    <section id="layanan">
      <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
          <h2 class="display-3" id="layanan">Layanan</h2>
          <h3>Mengapa harus booking bengkel di OTOCARE?</h3>
          <div class="row pt-4">
            <div class="col-md-4">
              <span class="lingkaran">
                <i class="fa far fa-wrench fa-5x"></i>
              </span>
              <h3 class="mt-3">Servis Jadi Mudah</h3>
              <p>Pesan sekarang dan montir akan datang dimanapun dan kapapun saja</p>
            </div>
            <div class="col-md-4">
              <span class="lingkaran">
                <i class="fa fab fa-bitcoin fa-5x"></i>
              </span>
              <h3 class="mt-3">Harga lebih murah</h3>
              <p>Kami akan memberikan harga yang terjangkau dari bengkel lainnya</p>
            </div>
            <div class="col-md-4">
              <span class="lingkaran">
                <i class="fa fa-solid fa-location-arrow fa-5x"></i>
              </span>
              <h3 class="mt-3">Cepat</h3>
              <p>Selain harga terjangkau kami juga akan melayani anda dengan cepat</p>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fbe6d4"
          fill-opacity="1"
          d="M0,32L34.3,37.3C68.6,43,137,53,206,85.3C274.3,117,343,171,411,176C480,181,549,139,617,149.3C685.7,160,754,224,823,229.3C891.4,235,960,181,1029,181.3C1097.1,181,1166,235,1234,234.7C1302.9,235,1371,181,1406,154.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Portofolio -->
      <section id="populer">
      <div class="container-fluid pt-5 pb-5" style="background-color:#FBE6D4">
        <div class="container text-center">
          <h2 class="display-3" id="portofolio">Bengkel Terpopuler</h2>
          <p>Temukan bengkel yang populer dan cocok untukmu. OTOCARE telah bermitra dengan beberapa bengkel populer.</p>
          <div class="row pt-4 gx-4 gy-4">
          <?php
     require '../koneksi.php';
     $sql2=mysqli_query($conn,"select * from bengkel");
     
     while($data2=mysqli_fetch_array($sql2)){
      
      ?>
          <?php 
        echo "<div class='col-md-4'>";
  
      ?>
      
              <div class="card" style="width: 18rem">
                <img src="img/<?php echo $data2['gambar']; ?>" class="card-img-top" width="200" height="200" alt="..." />
                <div class="card-body">
                  <h5 class="card-title"><?php echo $data2['nama']; ?></h5>
                  <p class="card-text"><?php echo $data2['deskripsi']; ?></p>
                  <a href="../login.html" class="btn btn-warning">Lihat Detail</a>
                </div>
              </div>
              
            </div>  
            <?php } ?>
<?php
  echo "</div>";

?>
          <!-- <div class="row pt-4 gx-4 gy-4">
            <div class="col-md-4">
              <div class="card" style="width: 18rem">
                <img src="img/14.jpeg" class="card-img-top" width="200" height="200" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Bengkel Borobudur</h5>
                  <p class="card-text">Direkomendasikan untuk melakukan servis terhadap kendaraan Anda. Cepat,Tepat. </p>
                  <a href="#" class="btn btn-warning">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card" style="width: 18rem">
                <img src="img/15.jpg" class="card-img-top" width="200" height="200" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Soe-Hatt Repair service by Ahmad</h5>
                  <p class="card-text">Pada bengkel ini Anda bisa mendapatkan banyak jasa seperti ganti oli, tune up dan banyak lagi.</p>
                  <a href="#" class="btn btn-warning">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card" style="width: 18rem">
                <img src="img/16.jpg" class="card-img-top" width="200" height="200" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Bengkel Kalpataru</h5>
                  <p class="card-text">Bengkel ini menjadi pilihan yang tepat untuk Anda kunjungi. Memiliki layanan yang bagus.</p>
                  <a href="#" class="btn btn-warning">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card" style="width: 18rem">
                <img src="img/17.jpg" class="card-img-top" width="200" height="200" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">AS Motor bengkel</h5>
                  <p class="card-text">Pengerjaan service kendaraan dilakukan dengan cepat dan memiliki hasil yang sangat baik.</p>
                  <a href="#" class="btn btn-warning">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card" style="width: 18rem">
                <img src="img/18.jpg" class="card-img-top" width="200" height="200" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Bengkel Arifin Batu</h5>
                  <p class="card-text">Memiliki ketanggapan yang sangat baik meskipun datang di malam hari dengan harga terjangkau.</p>
                  <a href="#" class="btn btn-warning">Lihat Detail</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card crop" style="width: 18rem">
                <img src="img/19.jpg" class="card-img-top" width="200" height="200" alt="..." />
                <div class="card-body">
                  <h5 class="card-title">Enjoynering garage 2</h5>
                  <p class="card-text">Dapat dipercaya untuk memperbaiki kendaraan Anda jika kendaraan Anda memiliki masalah.</p>
                  <a href="#" class="btn btn-warning">Lihat Detail</a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
        
      </div>
      
    
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FBE6D4" fill-opacity="1" d="M0,192L26.7,192C53.3,192,107,192,160,186.7C213.3,181,267,171,320,186.7C373.3,203,427,245,480,245.3C533.3,245,587,203,640,176C693.3,149,747,139,800,149.3C853.3,160,907,192,960,186.7C1013.3,181,1067,139,1120,138.7C1173.3,139,1227,181,1280,208C1333.3,235,1387,245,1413,250.7L1440,256L1440,0L1413.3,0C1386.7,0,1333,0,1280,0C1226.7,0,1173,0,1120,0C1066.7,0,1013,0,960,0C906.7,0,853,0,800,0C746.7,0,693,0,640,0C586.7,0,533,0,480,0C426.7,0,373,0,320,0C266.7,0,213,0,160,0C106.7,0,53,0,27,0L0,0Z"></path></svg>
    <!-- Tentang -->
    <section id="tentang">
      <div class="container-fluid pt-5 pb-5">
        <div class="container">
          <h2 class="display-3 text-center" id="Tentang">Tentang</h2>
          <p class="text-center">OTOCARE Telah Hadir Nih! Apapun permasalahan kendaraanmu OTOCARE siap melayani.</p>
          <div class="clearfix pt-5">
            <img src="images/logos.png" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" alt="" />
            <p>Otocare dirintis pada tahun 2023, Otocare menjembatani antara pemilik usaha bengkel dengan para customernya yang bisa diakses dengan mudah, kapanpun dan dimanapun.</p>
            <p>Otocare merupakan sebuah solusi untuk memudahkan customer mencari bengkel dan melakukan perawatan kendaraan mereka dengan layanan servis antar jemput.</p>
            <p>Otocare memiliki fitur peta pada website yang akan membantu pengguna menandai lokasi mereka dan akan direkomendasikan bengkel terdekat. Dengan fitur ini, kamu bisa melihat beberapa bengkel, di sekitar lokasi kamu maupun lokasi lainnya.</p>
            <p>Kamu masih ragu menggunakan Otocare? Jangan ragu untuk menggunakan Otocare karena dengan Otocare kamu bisa mendapatkan harga lebih murah, cepat dan tentunya servis jadi mudah.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fbe6d4"
          fill-opacity="1"
          d="M0,128L26.7,117.3C53.3,107,107,85,160,90.7C213.3,96,267,128,320,160C373.3,192,427,224,480,224C533.3,224,587,192,640,149.3C693.3,107,747,53,800,53.3C853.3,53,907,107,960,122.7C1013.3,139,1067,117,1120,128C1173.3,139,1227,181,1280,186.7C1333.3,192,1387,160,1413,144L1440,128L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>
    
 <!-- Tim -->
 <section id="tim">
      <div class="container-fluid pt-5 pb-5">
      <div class="container text-center">
          <h2 class="display-3" id="staff">TIM KAMI</h2>
          <p>Otocare dikembangkan oleh 4 orang dengan keahliannya masing-masing</p>
          <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background-color : #F3F3F9;">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./img/24.jpg" class="rounded-circle" widht="100" height="100" alt="">
                                    <h5 class="mt-3 mb-1">Aldino Kelvin Nanda</h5>
                                    <p class="m-0">Programmer BackEnd</p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background-color : #F3F3F9;">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./img/22.jpeg" class="rounded-circle" widht="100" height="100" alt="">
                                    <h5 class="mt-3 mb-1">Dhea Fanny Putri Syarifa</h5>
                                    <p class="m-0">Programmer FrontEnd</p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background-color : #F3F3F9;">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./img/13.jpeg" class="rounded-circle" widht="100" height="100" alt="">
                                    <h5 class="mt-3 mb-1">Erliana Fajarwati</h5>
                                    <p class="m-0">Designer</p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card" style="background-color : #F3F3F9;">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./img/23.jpeg" class="rounded-circle" widht="100" height="100" alt="">
                                    <h5 class="mt-3 mb-1">Deailsa Vania Aurellia</h5>
                                    <p class="m-0">Scripting</p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F3F3F9" fill-opacity="1" d="M0,64L40,80C80,96,160,128,240,138.7C320,149,400,139,480,138.7C560,139,640,149,720,176C800,203,880,245,960,229.3C1040,213,1120,139,1200,96C1280,53,1360,43,1400,37.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>

    <!-- Maps -->
    <section id="maps">
   
      <div class="container-fluid pt-5">
        <div class="container">
          <h2 class="display-3 text-center" id="maps">Temukan Bengkel Terdekat</h2>
          <p class="text-center">Temukan bengkel terdekat dari lokasimu</p>
          <form class="d-flex mb-5 mt-2" role="search">
            <input class="form-control me-2" type="search" placeholder="Lokasi kamu sekarang" aria-label="Search" />
            <button class="btn btn-outline-warning" type="submit">Search</button>
          </form>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3642847055935!2d112.61520331380542!3d-7.9612536815415025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281bdd08839%3A0xc915f268bffa831f!2sState%20University%20of%20Malang!5e0!3m2!1sen!2sid!4v1678714067142!5m2!1sen!2sid"
            width="1000"
            height="600"
            style="border: 0; width: 100%; height: 380px"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F29D56" fill-opacity="1" d="M0,192L30,170.7C60,149,120,107,180,96C240,85,300,107,360,133.3C420,160,480,192,540,186.7C600,181,660,139,720,122.7C780,107,840,117,900,149.3C960,181,1020,235,1080,234.7C1140,235,1200,181,1260,154.7C1320,128,1380,128,1410,128L1440,128L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </section>
    <!-- Footer -->
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
