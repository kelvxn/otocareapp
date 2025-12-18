
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Tabel Status Kendaraan</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logos.png" />
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>

      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">
        <div class="row page-titles mx-0">
          <div class="col p-md-0">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Tabel</a></li>
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel Informasi Harga</a></li>
            </ol>
          </div>
        </div>
        <!-- row -->

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tabel Informasi Harga</h4>
              <a href="?url=tambah_informasi"><button type="button"  class="btn btn-outline-warning mb-3 mt-2"><i class="fa fa-plus-circle me-2"></i>Tambah Data</button></a> 
              <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle">
                  <thead>
                    <tr>
                    <th scope="col">No</th>
                      <th scope="col">Id</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Harga</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <?php
                  require '../koneksi.php';
                  $idb=$_SESSION['id_bengkel'];
                  $sql=mysqli_query($conn,"select * from informasi where id_bengkel='$idb'");
                  // while($data=mysqli_fetch_array($sql)){
                    $no=1;
                    foreach($sql as $data){
                   ?>
                  <tbody>
                    <tr>
                    
                    <td><?php echo $no?></td>
                      <td><?php echo $data['id_informasi']; ?></td>
                      <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['harga']; ?></td>
                      <td><?php echo $data['deskripsi']; ?></td>
                      <td>
                        <span
                          ><a href="admin.php?url=edit_informasi&id=<?php echo $data['id_informasi']; ?>" class="btn btn-warning" role="button"><i class="fa fa-edit me-2"></i> Update</a> 
                          <a href="delete_informasi.php?id=<?php echo $data['id_informasi']; ?>" class="btn btn-danger" role="button" onclick="return confirm('are you sure?')"><i class="fa fa-trash me-2" ></i> Delete</a>
                          </span
                        >
                      </td>
                    </tr>
                   
                      
                  </tbody>
                  <?php $no++; } ?>
                  <?php  //} ?>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- #/ container -->
      </div>
      <!--**********************************
            Content body end
        ***********************************-->

  </body>
</html>
