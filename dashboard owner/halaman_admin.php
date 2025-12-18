<?php
if(isset($_GET['url'])){
    $url=$_GET['url'];
    switch($url){

        case 'tabel_service';
        include 'tabel service.php';
        break;

        case 'tabel_status_kendaraan';
        include 'tabel status kendaraan.php';
        break;

        case 'tabel_informasi';
        include 'tabel informasi.php';
        break;

        case 'tambah_informasi';
        include 'tambah_informasi.php';
        break;

        case 'tambah_kendaraan';
        include 'tambah_kendaraan.php';
        break;

        case 'tambah_servis';
        include 'tambah_servis.php';
        break;

        case 'edit_servis';
        include 'edit_servis.php';
        break;

        case 'edit_informasi';
        include 'edit_informasi.php';
        break;
        
        case 'edit_status_kendaraan';
        include 'edit_status_kendaraan.php';
        break;

        case 'profil';
        include 'profil.php';
        break;
    }
} else {
    ?>
<div class="content-body">

           
            <!-- row -->

            <div class="container-fluid">

            </div>
            <div class="container-fluid mt-3">
                <div class="row">
                <?php 
                   require '../koneksi.php';
                   $idb=$_SESSION['id_bengkel'];
                    $sql=mysqli_query($conn,"select * from servis where id_bengkel='$idb'");
                    $sql2=mysqli_query($conn,"select * from servis where status='sudah dibayar' and id_bengkel='$idb'");
                    $sql3=mysqli_query($conn,"select * from servis where status='belum dibayar' and id_bengkel='$idb'");
                    if($cek=mysqli_num_rows($sql)){
                    ?>
                    <div class="col-md-4 col-sm-6">                   
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Services Count</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $cek; ?></h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    if($cek2=mysqli_num_rows($sql2)){
                    ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Paid Services</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $cek2 ?></h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    if($cek3=mysqli_num_rows($sql3)){
                    ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Unpaid Services</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white"><?php echo $cek3 ?></h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <?php
                    } 
                    ?> 
                    <div class="col-md-4 col-sm-6">
                        <div class="card gradient-7">
                            <div class="card-body">
                                <h1 class="card-title text-white">Customer Satisfaction</h1>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                    <p class="text-white mb-0">Jan - March 2019</p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="ms-5 col-lg-12">
                        <div class="card ">
                            <div class="card-body " >
                                <div class="active-member">
                                    <div class="table-responsive">

                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Service Id</th>
                                                    <th>Merk</th>
                                                    <th>Service Status</th>
                                                    <th>Payment Status</th>
                                                    <th >Activity</th>
                                                </tr>
                                            </thead>
                                            <?php
                  require '../koneksi.php';
                  $sql4=mysqli_query($conn,"select servis.id_servis as sid, user.nama as nama, merk, kendaraan.status as s1, servis.status as s2 from servis join kendaraan on servis.id_kendaraan = kendaraan.id_kendaraan join user on servis.id_customer = user.id_user where servis.id_bengkel='$idb'");
                  while($data=mysqli_fetch_array($sql4)){

                   ?>
                                            <tbody>
                                                <tr>
                                                    <!-- <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">Sarah Smith</td> -->
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['sid']; ?></td>
                                                    <td><?php echo $data['merk']; ?></td>
                                                    <td><?php
if($data['s1']=='menunggu'){
  echo '<div>
  <div class="progress" style="height: 6px">
      <div class="progress-bar bg-danger" style="width: 25%"></div>
  </div>
</div>';
} else if($data['s1']=='diservis'){
  echo '<div>
  <div class="progress" style="height: 6px">
      <div class="progress-bar bg-warning" style="width: 50%"></div>
  </div>
</div>';
} else {
  echo '<div>
  <div class="progress" style="height: 6px">
      <div class="progress-bar bg-success" style="width: 100%"></div>
  </div>
</div>';
}
  ?>
  </td>
                                                    <!-- <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> Paid</td> -->
<td>
                                                    <?php
if($data['s2']=='belum dibayar'){
  echo '<i class="fa fa-circle-o text-danger  mr-2"></i> Unpaid';
} else {
    echo '<i class="fa fa-circle-o text-success  mr-2"></i> Paid';
}
  ?>
  </td>
                                                    <td>
                                                        <span>Last Login</span>
                                                        <span class="m-0 pl-3">10 sec ago</span>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
</div>
        </div>
<?php
} 
?> 