<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Nama Aplikasi | <?php echo $data['page_title']; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                    <!--                    <li class="nav-item d-none d-sm-inline-block">
                                            <a href="index3.html" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item d-none d-sm-inline-block">
                                            <a href="#" class="nav-link">Contact</a>
                                        </li>-->
                </ul>

                <!-- SEARCH FORM -->
                <!--                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-navbar" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>-->

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Messages Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-comments"></i>
                            <span class="badge badge-danger navbar-badge">3</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Brad Diesel
                                            <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">Call me whenever you can...</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            John Pierce
                                            <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">I got your message bro</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <!-- Message Start -->
                                <div class="media">
                                    <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                            Nora Silvester
                                            <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">The subject goes here</p>
                                        <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                    </div>
                                </div>
                                <!-- Message End -->
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                        </div>
                    </li>
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-envelope mr-2"></i> 4 new messages
                                <span class="float-right text-muted text-sm">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-users mr-2"></i> 8 friend requests
                                <span class="float-right text-muted text-sm">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="fas fa-file mr-2"></i> 3 new reports
                                <span class="float-right text-muted text-sm">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>

            </nav>
            <!-- /.navbar -->


            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                         style="opacity: .8">
                    <span class="brand-text font-weight-light">Nama Aplikasi</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="<?= base_url('assets'); ?>/vendor/AdminLTE-3.0.5/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Nama Admin</a>
                        </div>
                    </div>



                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                            <li class="nav-item has-treeview menu-open"><a href="#" class="nav-link <?php echo ($data['grup_menu_active'] == 'dashboard') ? 'active' : ''; ?>>
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard 
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('dashboard'); ?>/index" class="nav-link <?php if ($data['menu_active'] == 'dashboard') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Dashboard</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link <a href="#" class="nav-link <?php echo ($data['grup_menu_active'] == 'data') ? 'active' : ''; ?>>
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Data 
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/daftar_rombel" class="nav-link <?php if ($data['menu_active'] == 'daftar_rombel') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Nilai Siswa</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/wali" class="nav-link <?php if ($data['menu_active'] == 'wali') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Wali</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/siswa" class="nav-link <?php if ($data['menu_active'] == 'siswa') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Siswa</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/rombel" class="nav-link <?php if ($data['menu_active'] == 'rombel') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rombongan Belajar</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/personel" class="nav-link <?php if ($data['menu_active'] == 'personel') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Personel</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview menu-open">
                                <a href="#" class="nav-link <a href="#" class="nav-link <?php echo ($data['grup_menu_active'] == 'masterdata') ? 'active' : ''; ?>>
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Data 
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/daftar_rombel" class="nav-link <?php if ($data['menu_active'] == 'daftar_rombel') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Nilai Siswa</p>
                                        </a>
                                    </li>
                                    <!--                                    <li class="nav-item">
                                                                            <a href="<?= base_url('home'); ?>/nilai" class="nav-link <?php if ($data['menu_active'] == 'nilai') echo "active"; ?>">
                                                                                <i class="far fa-circle nav-icon"></i>
                                                                                <p>Nilai</p>
                                                                            </a>
                                                                        </li>-->
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/wali" class="nav-link <?php if ($data['menu_active'] == 'wali') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Wali</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/siswa" class="nav-link <?php if ($data['menu_active'] == 'siswa') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Siswa</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/rombel" class="nav-link <?php if ($data['menu_active'] == 'rombel') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Rombongan Belajar</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/personel" class="nav-link <?php if ($data['menu_active'] == 'personel') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Personel</p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/jabatan" class="nav-link <?php if ($data['menu_active'] == 'jabatan') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Master Jabatan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/identitas" class="nav-link <?php if ($data['menu_active'] == 'identitas') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Master Identitas</p>
                                        </a>
                                    </li>
                                    <!--                                    <li class="nav-item">
                                                                            <a href="<?= base_url('home'); ?>/mapel" class="nav-link <?php if ($data['menu_active'] == 'mapel') echo "active"; ?>">
                                                                                <i class="far fa-circle nav-icon"></i>
                                                                                <p>Master Mata Pelajaran</p>
                                                                            </a>
                                                                        </li>-->
                                    <li class="nav-item">
                                        <a href="<?= base_url('home'); ?>/kelas" class="nav-link <?php if ($data['menu_active'] == 'kelas') echo "active"; ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Master Kelas</p>
                                        </a>
                                    </li>
                                    <!--                                    <li class="nav-item">
                                                                            <a href="<?= base_url('home'); ?>/customer" class="nav-link <?php if ($data['menu_active'] == 'customer') echo "active"; ?>">
                                                                                <i class="far fa-circle nav-icon"></i>
                                                                                <p>Customer</p>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a href="<?= base_url('examples'); ?>" class="nav-link <?php if ($data['menu_active'] == 'example') echo "active"; ?>">
                                                                                <i class="far fa-circle nav-icon"></i>
                                                                                <p>examples</p>
                                                                            </a>
                                                                        </li>-->
                                    <!--                                    <li class="nav-item">
                                                                                                                <a href="./front_end" class="nav-link <?php if ($data['menu_active'] == 'front_end') echo "active"; ?>">
                                                                                                                    <i class="far fa-circle nav-icon"></i>
                                                                                                                    <p>front_end</p>
                                                                                                                </a>
                                                                                                            </li>-->
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark"><?php echo $data['page_title']; ?></h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active"><?php echo $data['page_title']; ?></li>
                                </ol>
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->
