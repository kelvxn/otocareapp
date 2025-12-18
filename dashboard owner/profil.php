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
    <link href="css/style.css" rel="stylesheet">

</head>

<body>


        <!--**********************************
            Content body start
        ***********************************-->

        <div class="content-body">

<div class="container mt-5 pt-5 pb-5">
    <h1 class="ms-5">My Profile</h1>
    <hr width="25%" size="10" color="orange" />
  </div> 
  <?php
   require '../koneksi.php';
   $owner=$_SESSION['id_user'];
   $sql=mysqli_query($conn,"select * from user where id_user='$owner'");
   while($data=mysqli_fetch_array($sql)){

    ?>
  <div class="col-md-12 text-center tim">
  <?php
        if($data['img']==null){
   ?>
    <img src="img/1.png" class="rounded-circle mb-4" height="200" width="200" alt="" />
    <?php } else { ?>
        <img src="img/<?php echo $data['img']; ?>" class="rounded-circle mb-4" height="200" width="200" alt="" />
       <?php } ?>

    <h4><?php echo $data['nama']; ?></h4>
    
    <p><i class="fa fa-regular fa-map-pin"></i> <?php echo $_SESSION['nama_bengkel']; ?>
    
    </p>
  </div>


<!-- row -->

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="update_admin.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="id_user" value="<?php echo $data['id_user']; ?>" name="id_owner">
                        <div class="form-group row">
            <label class="col-lg-4 col-form-label" for="img">Update Foto</label>
            <div class="col-lg-6">
            <input type="file" id="img" name="img" class="form-control" value="<?php echo $data['img']; ?>" accept=".jpg, .jpeg, .png"><font color="red">*type that can be uploaded : .jpg, .jpeg, .png</font>
       </div>
          </div>
                        <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Nama <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-username" value="<?php echo $data['nama']; ?>" name="val-nama" placeholder="Enter a name..">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-username" value="<?php echo $data['username']; ?>" name="val-username" placeholder="Enter a username..">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="val-email" name="val-email" placeholder="Your valid email..">
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="val-password" name="val-password" placeholder="Choose a safe one.." required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="val-confirm-password" name="val-confirm-password" placeholder="..and confirm it!">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-suggestions">Alamat <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <textarea class="form-control" id="val-suggestions" name="val-alamat" rows="5" placeholder="Masukkan alamat.."><?php echo $data['alamat']; ?></textarea>
                                            </div>
                                        </div>
                                        
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="val-currency">Phone <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="number" class="form-control" id="val-currency" value="<?php echo $data['telp']; ?>" name="val-phone" placeholder="082x-xxxx-xxxx">
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label"><a href="#">Terms &amp; Conditions</a>  <span class="text-danger">*</span>
                                </label>
                                <div class="col-lg-8">
                                    <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                        <input type="checkbox" class="css-control-input" id="val-terms" name="val-terms" value="1"> <span class="css-control-indicator"></span> I agree to the terms</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-8 ml-auto">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- #/ container -->
</div>
            <!-- row -->

        <!--**********************************
            Content body end
        ***********************************-->
        
</body>

</html>