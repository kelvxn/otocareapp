<?php
session_start();
if(!isset($_SESSION['nama'])){
    die("you're not logged in yet.");
}
if($_SESSION['role']!="admin"){
    die("you're not an admin.");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>

  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-start" href="index.html">
          <div class="sidebar-brand-icon">
            <img src="img/logos.png" alt="logo" width="50px" height="50px" style="margin-right: 10px; margin-left: 20px" />
          </div>
          <div class="sidebar-brand-text">OTOCARE</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />
        <li class="nav-item active">
          <a class="nav-link" href="tables.php"><i class="fa fa-solid fa-toolbox"></i> <span>Bengkel</span></a>
        </li>
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                      <div class="input-group-append">
                        <button class="btn btn-info" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dhea Fanny Putri</span> -->
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama'] ?></span>
                  <img class="img-profile rounded-circle" src="img/undraw_profile_1.svg" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

    
          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-info">Edit Data</h6>
              </div>
              <?php
        require '../koneksi.php';
        $sql=mysqli_query($conn,"select * from bengkel where id_bengkel='$_GET[id]'");
        if($data=mysqli_fetch_array($sql))
        {
            ?>
              <form action="update data.php" class="form-horizontal" style="margin: 20px;" method="post" enctype="multipart/form-data">
                <div class="form-group cols-sm-6">
                  <label>Id Bengkel</label>
                  <input type="text" name="id_bengkel" value="<?php echo $data['id_bengkel'] ?>" class="form-control" readonly/>
                </div>
                <div class="form-group cols-sm-6">
                    <label>Nama Bengkel</label>
                    <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control"/>
                  </div>
                  <div class="form-group cols-sm-6">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control"/>
                  </div>
                  <!-- <div class="form-group cols-sm-6">
                    <label>Id Owner</label>
                    <input type="text" name="id_owner" value="<?php //echo $data['id_owner'] ?>" class="form-control"/>
                  </div>
                    -->
                  <!-- <div class="form-group cols-sm-6">
            <label>Id Owner</label>
            <select class="form-control" name="id_owner" id="">
                <option value=""><?php //echo $data['id_owner'] ?></option>
                <?php
                 //require '../koneksi.php';
          //$sql1=mysqli_query($conn,"select distinct id_user from user where role='owner'");
          //while ($data1= mysqli_fetch_array($sql1)) {?>
            <option value="<?php //echo $data1['id_user']; ?>"><?php //echo $data1['id_user'];?> </option>
            
         <?php// }
        
        ?>
</select>
          </div> -->
          <div class="form-group cols-sm-6">
            <label>Id Owner</label>
            <input type="text" name="id_owner" value="<?php echo $data['id_owner'] ?>" class="form-control" readonly/>
            
          </div>
                  <div class="form-group cols-sm-6">
                    <label>Latitude</label>
                    <input type="text" name="latitude" value="<?php echo $data['latitude'] ?>" class="form-control"/>
                  </div>
                  <div class="form-group cols-sm-6">
                    <label>Longitude</label>
                    <input type="text" name="longitude" value="<?php echo $data['longitude'] ?>" class="form-control"/>
                  </div>
                  <div class="form-group cols-sm-6">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="5"><?php echo $data['deskripsi']; ?></textarea>
                  </div>
                  <div class="form-group cols-sm-6">
                    <label>Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="contohupload2" name="img" value="<?php echo $data['gambar'] ?>">
                        <label class="custom-file-label" for="contohupload2">Choose file</label>
                    </div>
                  </div>

                  <?php } ?>
                  
  
                <div class="form-group col-sm-6">
                  <input type="submit" value="Simpan" class="btn btn-info" />
                  <input type="reset" value="Kosongkan" class="btn btn-warning" />
                  <a href="javascript:history.go(-1)"><input type="button" value="Batal" class="btn btn-danger" /></a>
                </div>
              </form>
            </div>
           
          </div>

          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        
        <!-- Footer -->
        <footer class="sticky-footer bg-white mt-5">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; <a href="" class="text-info">OTOCARE</a> 2023</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  </body>
</html>
