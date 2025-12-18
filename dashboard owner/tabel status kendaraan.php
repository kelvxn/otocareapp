
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
              <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel Status Kendaraan</a></li>
            </ol>
          </div>
        </div>
        <!-- row -->

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Tabel Status Kendaraan</h4>
              <a href="?url=tambah_kendaraan"><button type="button"  class="btn btn-outline-warning mb-3 mt-2"><i class="fa fa-plus-circle me-2"></i>Tambah Data</button></a> 
              <div class="table-responsive">
                <table class="table table-bordered table-striped verticle-middle">
                  <thead>
                    <tr>
                    <th scope="col">No</th>
                      <th scope="col">Id_Kendaraan</th>
                      <th scope="col">Tipe</th>
                      <th scope="col">Merk</th>
                      <th scope="col">Status</th>
                      <th scope="col">Id_Service</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <?php
                  require '../koneksi.php';
                  $idb=$_SESSION['id_bengkel'];
                  //$sql=mysqli_query($conn,"select kendaraan.id_kendaraan, tipe, merk, kendaraan.status from servis join kendaraan on servis.id_kendaraan = kendaraan.id_kendaraan where id_bengkel='$idb'");
                  $sql=mysqli_query($conn,"select id_kendaraan, tipe, merk, status, id_servis from kendaraan where id_bengkel='$idb'");
                  // while($data=mysqli_fetch_array($sql)){
                    $no=1;
                    foreach($sql as $data){
                   ?>
                  <tbody>
                    <tr>
                    <td><?php echo $no ?></td>
                      <td><?php echo $data['id_kendaraan']; ?></td>
                      <td><?php echo $data['tipe']; ?></td>
                      <td><?php echo $data['merk']; ?></td>
                      <td>
                      <?php

if($data['status']=='menunggu'){
  echo '<div class="progress mt-2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 25%">Menunggu</div>
</div>';
} else if($data['status']=='diservis'){
  echo '<div class="progress mt-2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 50%">Diservis</div>
</div>';
} else {
  echo '<div class="progress mt-2" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 100%">Selesai</div>
</div>';
}

  

  ?>
                       
                      </td>
                      <td><?php echo $data['id_servis']; ?></td>

                      <td>
                        <span
                          ><a href="?url=edit_status_kendaraan&id=<?php echo $data['id_kendaraan']; ?>" class="btn btn-warning" role="button"><i class="fa fa-edit me-2"></i> Update</a> 
                          <!-- <a href="" class="btn btn-danger" role="button"><i class="fa fa-trash me-2"></i> Delete</a> -->
                          <a href="delete_kendaraan.php?id=<?php echo $data['id_kendaraan']; ?>" class="btn btn-danger" role="button" onclick="return confirm('are you sure?')"><i class="fa fa-trash me-2" ></i> Delete</a>
                          </span
                        >
                      </td>
                    </tr>

                      
                  </tbody>
                  <?php $no++; } ?>
                  <?php //} ?>
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
