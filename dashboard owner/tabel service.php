
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Tabel Service</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/logos.png">
    <!-- Custom Stylesheet -->
    <link href="./plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel Service</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-warning">Tabel Service</h4>
                               <a href="?url=tambah_servis"><button type="button"  class="btn btn-outline-warning mb-3 mt-2"><i class="fa fa-plus-circle me-2"></i>Tambah Data</button></a> 
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id_Service</th>
                                                <th>Id_Bengkel</th>
                                                <th>Id_Kendaraan</th>
                                                <th>Id_Customer</th>
                                                <th>Deskripsi</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Biaya</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                  require '../koneksi.php';
                  $idb=$_SESSION['id_bengkel'];
                  $sql=mysqli_query($conn,"select * from servis where id_bengkel='$idb'");
                  while($data=mysqli_fetch_array($sql)){

                   ?>
                                        <tbody>
                                            <tr>
                                            <td><?php echo $data['id_servis']; ?></td>
                      <td><?php echo $data['id_bengkel']; ?></td>
                      <td><?php echo $data['id_kendaraan']; ?></td>
                      <td><?php echo $data['id_customer']; ?></td>
                      <td><?php echo $data['deskripsi']; ?></td>
                      <td><?php echo $data['tanggal']; ?></td>
                      <td><?php 

                      if($data['status']=='belum dibayar'){
                        echo ' <span class="badge badge-danger px-2">Unpaid</span>';
                      } else {
                        echo ' <span class="badge badge-success px-2">Paid</span>';
                      } ?></td>
                      <td><?php echo $data['biaya']; ?></td>
                      <td>
                    <a href="?url=edit_servis&id=<?php echo $data['id_servis']; ?>" class="btn btn-warning btn-circle">
                    <i class="fa fa-pencil"></i>
                
                    <a href="delete_servis.php?id=<?php echo $data['id_servis']; ?>" class="btn btn-danger btn-circle" onclick="return confirm('are you sure?')">
                    <i class="fa fa-trash"></i>
                                           
                                            </tr>
                                           
                                        </tfoot>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
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