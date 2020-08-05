<?php 

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>
<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
                    <div class="container-fluid d-flex flex-column p-0">
                        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                            <div class="sidebar-brand-icon"><i class="fas fa-folder-open"></i></div>
                            <div class="sidebar-brand-text mx-3"><span>T u g a s K i e</span></div>
                        </a>
                        <hr class="sidebar-divider my-0">
                        <ul class="nav navbar-nav text-light" id="accordionSidebar">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="dashboardadmin.php"><i class="fas fa-tachometer-alt"></i><span>&nbsp;Dashboard</span></a>
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="tadmin.php"><i class="fas fa-user-plus"></i><span>&nbsp;Admin</span></a></li>
                       </li>
                            
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                <p class="mb-0">Pendataan</p>
                            </div>

                
                           
                            <li class="nav-item" role="presentation">
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-1" href="#collapse-1" role="button"><i class="fas fa-feather-alt"></i>&nbsp;<span>Tambah data</span></a>
                                    <div class="collapse"
                                        id="collapse-1">    
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">Tambah data</h6><a class="collapse-item" href="tdaftaradmin.php">Laundry</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <div><a class="btn btn-link nav-link" data-toggle="collapse" aria-expanded="false" aria-controls="collapse-2" href="#collapse-2" role="button"><i class="fas fa-eye"></i>&nbsp;<span>Lihat Data</span></a>
                                    <div class="collapse"
                                        id="collapse-2">
                                        <div class="bg-white border rounded py-2 collapse-inner">
                                            <h6 class="collapse-header">Lihat Data:</h6><a class="collapse-item" href="timelinelihatadmin.php">Lihat Data</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <hr class="sidebar-divider">
                            <div class="sidebar-heading">
                                
                            </li>
                        
                        </ul>
                        <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
                    </div>
                </nav>
                <div class="text-center d-none d-md-inline"></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="timelinelihat.php" method="get">
                            <div><H3>T u g a s | Belajar dari rumah </H3>
                                <div class="input-group-append"><button class="btn btn-primary py-0" value="cari" type="submit"></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                           
                            
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-dark"><?php echo  $_SESSION["username"] ?></span><img class="border rounded-circle img-profile" src="img/profile.svg" ></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="timelineprofile.php"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                       
                                            <div class="dropdown-item"></div><a class="dropdown-item" role="presentation" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
  
</body>
</html>
