<?php
                            include('config/koneksi.php');

                            // jalankan query
                            $appquery = mysqli_query($connect, "SELECT * FROM setup LIMIT 1"); 
                            // tampilkan query
                            $app=mysqli_fetch_array($appquery);
							              $level = $_SESSION['level'];
                            ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator | <?php echo $app['app_title'];?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="plugins/select2/select2.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition <?php echo $app['app_theme'];?> layout-boxed">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="admin.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ps</b>A</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><?php echo $app['app_title'];?></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">              
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
                  <span class="hidden-xs"><?php echo $_SESSION['nm_petugas']; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['nm_petugas']; ?> - <?php echo $_SESSION['nickname']; ?>
                    </p>
                  </li>                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="admin.php?page=user" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="logout.php"><i class="fa fa-sign-out"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nm_petugas']; ?></p>
            </div>
          </div>
          <!-- search form -->
          <form action="search.php" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search Something...">
              <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <?php if ($level == 'admin'){?>
		  <ul class="sidebar-menu">
		        <li class="header">MASTER</li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-book"></i>
                <span>Buku</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=add_buku"><i class="fa fa-circle-o"></i> Tambah Baru <small class="label pull-right bg-red">Add</small></a></li>                
				<li><a href="?page=data_buku"><i class="fa fa-circle-o"></i> Semua Data <small class="label pull-right bg-green">View</small></a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Anggota</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=add_anggota"><i class="fa fa-circle-o"></i> Tambah Baru <small class="label pull-right bg-red">Add</small></a></li>                
				<li><a href="?page=data_anggota"><i class="fa fa-circle-o"></i> Semua Data <small class="label pull-right bg-green">View</small></a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-send"></i>
                <span>Pengarang</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=add_pengarang"><i class="fa fa-circle-o"></i> Tambah Baru <small class="label pull-right bg-red">Add</small></a></li>                
				        <li><a href="?page=data_pengarang"><i class="fa fa-circle-o"></i> Semua Data <small class="label pull-right bg-green">View</small></a></li>
              </ul>
            </li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-send-o"></i>
                <span>Penerbit</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=add_penerbit"><i class="fa fa-circle-o"></i> Tambah Baru <small class="label pull-right bg-red">Add</small></a></li>                
				        <li><a href="?page=data_penerbit"><i class="fa fa-circle-o"></i> Semua Data <small class="label pull-right bg-green">View</small></a></li>
              </ul>
            </li>
          </ul>
		  <?php } ?>
		  <ul class="sidebar-menu">
            <li class="header">TRANSAKSI</li>
			<li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Data Transaksi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?page=data_peminjaman"><i class="fa fa-mail-reply"></i> Data Peminjaman <small class="label pull-right bg-red">All</small></a></li>
                <li><a href="?page=data_pengembalian"><i class="fa fa-mail-forward"></i> Data Pengembalian <small class="label pull-right bg-red">All</small></a></li>
              </ul>
            </li>                             
          </ul>
		  <?php if ($level == 'admin'){?>
		  <ul class="sidebar-menu">
            <li class="header">LAPORAN</li>
                <li><a href="?page=report"><i class="fa fa-folder-open"></i> All Report <small class="label pull-right bg-red">All</small></a></li>
                <li><a href="?page=setup"><i class="fa fa-gears"></i> Setup Aplikasi </a></li>             
          </ul>
		  <?php } ?>
        </section>
        <!-- /.sidebar -->
      </aside>