
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Tabel Informasi Harga</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                            <h4 class="card-title text-warning">Tambah Kendaraan</h4>

        <form action="simpan_kendaraan.php" method="post" class="form-horizontal" enctype="multipart/form-data">
        <input type="hidden" name="idb" value="<?php echo $_SESSION['id_bengkel']; ?>">
        <div class="form-group cols-sm-6">
            <label>tipe</label>
            <input type="text" name="tipe" value="" class="form-control">
        </div>
        <div class="form-group cols-sm-6">
            <label>merk</label>
            <input type="text" name="merk" value="" class="form-control">
        </div>
        <div class="form-group cols-sm-6">
            <label>status</label>
            <select class="form-control" name="status" id="">
                <option>choose</option>
                <option value="menunggu">menunggu</option>
                <option value="diservis">diservis</option>
                <option value="selesai">selesai</option>
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