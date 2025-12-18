

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard Admin</title>
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
                            <h4 class="card-title text-warning">Tambah Service</h4>

        <form action="simpan_servis.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <!-- <div class="form-group cols-sm-6">
            <label>Id Servis</label>
            <input type="text" name="id_servis" value="" class="form-control">
        </div> -->
        <div class="form-group cols-sm-6">
            <label>Id Bengkel</label>
            <input type="text" name="id_owner" value="<?php echo $_SESSION['id_bengkel'] ?>" class="form-control" readonly>
        </div>
        <!-- <div class="form-group cols-sm-6">
            <label>Id Kendaraan</label>
            <input type="text" name="id_kendaraan" value="" class="form-control">
        </div> -->
        <div class="form-group cols-sm-6">
            <label>Id Kendaraan</label>
            <select class="form-control" name="id_kendaraan" id="">
                <option>choose</option>
                <?php
                 require '../koneksi.php';
          //$sql2=mysqli_query($conn,"select distinct id_kendaraan from kendaraan");
          $idb=$_SESSION['id_bengkel'];
          //$sql2=mysqli_query($conn, "select distinct kendaraan.id_kendaraan as kid from servis left join kendaraan on servis.id_kendaraan = kendaraan.id_kendaraan where kendaraan.id_servis=null id_bengkel='$idb'");
          
          $sql2=mysqli_query($conn,"select distinct id_kendaraan as kid from kendaraan where id_servis IS NULL and id_bengkel='$idb'");
          while ($data2 = mysqli_fetch_array($sql2)) {?>
            <option value="<?php echo $data2['kid']; ?>"><?php echo $data2['kid'];?> </option>
         <?php }
        ?>
            </select>
        </div>
        <div class="form-group cols-sm-6">
            <label>Id Customer</label>
            <select class="form-control" name="id_user" id="">
                <option>choose</option>
                <?php
                 require '../koneksi.php';
          $sql3=mysqli_query($conn,"select distinct id_user from user where role='customer'");
          while ($data3 = mysqli_fetch_array($sql3)) {?>
            <option value="<?php echo $data3['id_user']; ?>"><?php echo $data3['id_user'];?> </option>
         <?php }
        ?>
            </select>
        </div>
        <div class="form-group cols-sm-6">
            <label>deskripsi</label>
            <!-- <input type="text" name="deskripsi" value="" class="form-control"> -->
            <textarea class="form-control" name="deskripsi" rows="5"></textarea>
        </div>
        
        <div class="form-group cols-sm-6">
            <label>tanggal</label>
            <input type="date" name="tanggal" value="" class="form-control">
        </div>
        <div class="form-group cols-sm-6">
            <label>biaya</label>
            <input type="number" name="biaya" value="" class="form-control">
        </div>
        <div class="form-group cols-sm-6">
            <label>status</label>
            <select class="form-control" name="status" id="">
                <option>choose</option>
                <option value="sudah dibayar">sudah dibayar</option>
                <option value="belum dibayar">belum dibayar</option>
            </select>
        </div>
        

        <div class="form-group col-sm-6">
            <input type="submit" value="Simpan" class="btn btn-success">
            <input type="reset" value="Kosongkan" class="btn btn-warning">
           <a href="javascript:history.go(-1)"><input type="button" value="Batal" class="btn btn-danger"></a> 
        </div>
        </form>

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