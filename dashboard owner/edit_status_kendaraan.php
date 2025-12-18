
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel Status Kendaraan</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title text-warning">Edit Status Kendaraan</h4>

                            <?php
        require '../koneksi.php';
        $sql=mysqli_query($conn,"select * from kendaraan where id_kendaraan='$_GET[id]'");
        if($data=mysqli_fetch_array($sql))
        {
            ?>
        <form action="update_status kendaraan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <div class="form-group cols-sm-6">
            <label>Id Kendaraan</label>
            <input type="text" name="id_kendaraan" value="<?php echo $data['id_kendaraan']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>Tipe</label>
            <input type="text" name="tipe" value="<?php echo $data['tipe']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>Merk</label>
            <input type="text" name="merk" value="<?php echo $data['merk']; ?>" class="form-control" readonly>
        </div>
        <div class="form-group cols-sm-6">
            <label>status</label>
            <select class="form-control" name="status" id="">
                <option value="<?php echo $data['status']; ?>"><?php echo $data['status']; ?></option>
                <option value="menunggu">menunggu</option>
                <option value="diservis">diservis</option>
                <option value="selesai">selesai</option>
            </select>
        </div>

        <div class="form-group col-sm-6">
            <input type="submit" value="Update" class="btn btn-success">
            <a href="javascript:history.go(-1)"><input type="button" value="Batal" class="btn btn-danger"></a> 
        </div>
        </form>
        <?php } ?>

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