<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
  }
  ?>
  <?php
include "koneksi.php";
$query = mysqli_query($koneksi, "select * from tb_23");
$user = mysqli_query($koneksi, "select * from user");

?>

<!DOCTYPE html>
<html>
<head>
</head>

                            <!-- BAGIAN SIDEBAR -->
        <?php
          include('template/sidebarpegawai.php');
        ?>
                            <!-- BAGIAN SIDEBAR -->

                            <h3 class="text-dark mb-0 container">Dashboard</h3>
       <br>

                            <!--  Row -->
<div class="row container">

<!-- ORDER -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total order</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800"> 
            <?= 
            $count = mysqli_num_rows($query);
            $count; 
            ?> 
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- USER -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pegawai</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">
          <?= 
            $count = mysqli_num_rows($user);
            $count; 
            ?> 

          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-users fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROSES -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-info shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Progress web</div>
          <div class="row no-gutters align-items-center">
            <div class="col-auto">
              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">90%</div>
            </div>
            <div class="col">
              <div class="progress progress-sm mr-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ALPHA -->
<div class="col-xl-3 col-md-6 mb-4">
  <div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
      <div class="row no-gutters align-items-center">
        <div class="col mr-2">
          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Alpha tester</div>
          <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
        </div>
        <div class="col-auto">
          <i class="fas fa-comments fa-2x text-gray-300"></i>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


         


 <!-- IKI WIDGET E -->

            <!--  Row -->
            <div class="row container">

<!--  Column -->
<div class="col-lg-6 mb-4">

  <!-- MULAI CARD -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Pembagian tugas</h6>
    </div>
    <div class="card-body">
      <h4 class="small font-weight-bold">Analisis website<span class="float-right">20%</span></h4>
      <div class="progress mb-4">
        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <h4 class="small font-weight-bold">Front-end <span class="float-right">40%</span></h4>
      <div class="progress mb-4">
        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <h4 class="small font-weight-bold">Back-end <span class="float-right">40%</span></h4>
      <div class="progress mb-4">
        <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      
    </div>
  </div>
</div>

<div class="col-lg-6 mb-4">

  <!-- Illustrations -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Profile User</h6>
    </div>
    <div class="card-body">
      <div class="text-center">
      <img class="rounded-circle" align="left" src="img/profile.svg" width="120" height="120">
      </div>
      <h3>hey i'm here as <b class="text-primary"><?php  echo $_SESSION['level']; ?></b></h3>
      
      <h4>and of course my username is <b class="text-primary"><?php echo $_SESSION['username'];?></h4></b></p>
      
    </div>
  </div>

  <!-- IKI WIDGET E -->
  

</div>
</div>


                            <!-- BAGIAN FOOTER -->                               
            <?php
              include('template/kakineh.php');
            ?>
                            <!-- BAGIAN FOOTER -->


</body>
</html>