<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/logo.png') ?>">
    <title>Distrik Navigasi</title>
    <link href="<?php echo base_url()?>/assets/plugins/morrisjs/morris.css" rel="stylesheet">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
  <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css') ?>" rel="stylesheet">
    <!-- You can change the theme colors from here -->

    <link href="<?php echo base_url('assets/css/colors/blue.css') ?>" id="theme" rel="stylesheet">
    <link href="<?php echo base_url('assets/DataTables/css/dataTables.bootstrap4.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
    <link href="<?php echo base_url('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') ?>" rel="stylesheet" type="text/css" >
    <!-- Page plugins css -->
    <link href="<?php echo base_url('assets/plugins/clockpicker/dist/jquery-clockpicker.min.css') ?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo base_url()?>/assets/plugins/Magnific-Popup-master/dist/magnific-popup.css" rel="stylesheet">

    <script src="<?php echo base_url('assets/jquery/jquery-3.3.1.js') ?>">    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">
    <script type="text/javascript">
        function zoom(){
            document.body.style.zoom="90%"
        }
        zoom();
    </script>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                     <a class="navbar-brand" href="index.html">
                         <!-- Logo icon -->
                         <b>
                             <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                             <!-- Dark Logo icon -->
                             <img src="<?php echo site_url() ?>/assets/images/logo-headers.png" alt="homepage" class="dark-logo" />
                             <!-- Light Logo icon -->
                             <img src="<?php echo site_url() ?>/assets/images/logo-headers.png" alt="homepage" class="light-logo" />
                         </b>
                         <!--End Logo icon -->
                         <!-- Logo text -->
                         <span>
                          <!-- dark Logo text -->
                          <img src="<?php echo site_url() ?>/assets/images/logo-headers.png" alt="homepage" class="dark-logo" />
                          <!-- Light Logo text -->
                          <img src="<?php echo site_url() ?>/assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                 </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li> -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <?php if ($this->session->has_userdata('username')) {
                            // foreach ($udata as $u){
                          ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url('assets/images/users/1.jpg') ?>" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <!-- <div class="u-img"><img src="<?php// echo base_url('assets/images/users/1.jpg') ?>" alt="user"></div> -->
                                            <div class="text-center">
                                                <h4><?php echo $this->session->userdata('username'); ?> </h4>
                                                <p class="text-muted"><?php echo $this->session->userdata('email'); ?> </p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm text-dark">View Profile</a></div>
                                        </div>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="<?php echo site_url('logout') ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                      <?php } ?>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->

                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">PERSONAL</li>
                        <li>
                            <a class="" href="<?php echo base_url('Home') ?>" aria-expanded="false"><i class="mdi mdi-home"></i><span class="hide-menu">Home </span></a>
                        </li>
                        <li>
                        <li class="nav-small-cap">PERSONAL</li>
                            <li>
                                <a class="" href="<?php echo base_url('daftarberita/index') ?>" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">News</span></a>
                            </li>
                        <li>
                            <a class="has-arrow " href="#" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Profile</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('profil/index') ?>">Visi & misi</a></li>
                                <li><a href="<?php echo base_url('profil/wilker') ?>">Wilayah Kerja</a></li>
                                <li><a href="<?php echo base_url('profil/tupoksi') ?>">Tupoksi</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Sarana & Prasarana</span></a>
                            <ul aria-expanded="false" class="collapse">
                              <li>
                                <a class="" href="<?php echo base_url('sarpras/index'); ?>" aria-expanded="false">Peta Kenavigasian</a>
                                </li>
                                <li><a href="<?php echo base_url('Sarpras/SBNP') ?>">SBNP</a></li>
                                <li><a href="<?php echo base_url('Sarpras/Telkompel') ?>">Telkompel</a></li>
                                <li><a href="<?php echo base_url('sarpras/bengkel'); ?>">Bengkel</a></li>
                                <li>
                                    <a class="" href="<?php echo base_url('Sarpras/ProfileKN') ?>" aria-expanded="false"><span class="hide-menu">Kapal Negara</span></a>
                                </li>
                                <li><a href="<?php echo base_url('sarpras/pengamatan'); ?>">Pengamatan Laut</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="" href="http://jdih.dephub.go.id/" target="blank" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Dasar Hukum</span></a>
                        </li>
                        <li>
                            <a class="" href="<?php echo base_url('helpdesk/index') ?>" aria-expanded="false"><i class="mdi mdi-file"></i><span class="hide-menu">Helpdesk</span></a>
                        </li>


                      <?php if ($this->session->userdata('role')=='developer') {  ?>
                        <li class="pull-right">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Menu Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Berita</a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="<?php echo site_url('adminmenu')?>">Tambah Berita</a></li>
                                            <li><a href="<?php echo site_url('adminmenu/kelolaberita')?>">Kelola Berita</a></li>
                                        </ul>
                                </li>
                                <li><a href="<?php echo base_url('adminmenu/keldatasarpras') ?>">Kelola Data Sarpras</a></li>
                                <li><a href="<?php echo site_url('adminmenu/kelolahelpdesk')?>">Kelola Laporan Helpdesk</a></li>

                                <li><a href="#">item 1.4</a></li>
                            </ul>
                        </li>
                      <?php } ?>

                      <?php if ($this->session->userdata('role')=='news') {  ?>
                        <li class="pull-right">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Menu Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li>
                                    <a class="has-arrow" href="#" aria-expanded="false">Berita</a>
                                        <ul aria-expanded="false" class="collapse">
                                            <li><a href="<?php echo site_url('adminmenu')?>">Tambah Berita</a></li>
                                            <li><a href="<?php echo site_url('adminmenu/kelolaberita')?>">Kelola Berita</a></li>
                                        </ul>
                                </li>
                            </ul>
                        </li>
                      <?php } ?>

                      <?php if ($this->session->userdata('role')=='sarpras') {  ?>
                        <li class="pull-right">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-arrange-send-backward"></i><span class="hide-menu">Menu Admin</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="<?php echo base_url('adminmenu/keldatasarpras') ?>">Kelola Data Sarpras</a></li>
                                <li><a href="<?php echo site_url('adminmenu/kelolahelpdesk')?>">Kelola Laporan Helpdesk</a></li>
                            </ul>
                        </li>
                      <?php } ?>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
