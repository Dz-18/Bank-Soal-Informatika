<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beranda</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url()?>assets/lugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition layout-fixed">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center text-center">
    <!-- <img class="animation__shake" src="<?=base_url()?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60"> -->
    <h1><b>BANK SOAL<br>INFORMATIKA</b></h1>
  </div>

  <!-- Navbar -->
  <div class="fixed-top">
    <div class="row bg-navy" style="width: 100%;padding-bottom:  10px;padding-top: 10px;">
      <div class="col">
        <div class="container">
          <h1><b>BANK SOAL INFORMATIKA</b></h1>
          <hr style="background:white;margin-bottom: 0px;margin-top: -10px;">
          Sistem Informasi Pengelolaan Materi Pembelajaran Informatika
        </div>
      </div>
    </div>
    <div class="row" style="width: 100%;margin-bottom:  15px;padding-top: 0px;">
      <div class="col navbar navbar-expand navbar-dark">
        <div class="container">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block active">
              <a href="<?=site_url('User/beranda')?>" class="nav-link"><b>Beranda</b></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="<?=site_url('User/upload_soal')?>" class="nav-link"><b>Upload Soal</b></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="<?=site_url('User/download_soal')?>" class="nav-link"><b>Download Soal</b></a>
            </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
              <a class="nav-link" data-widget="navbar-search" data-target="#navbar-search5" href="#" role="button">
                <i class="fas fa-search"></i>
              </a>
              <div class="navbar-search-block" id="navbar-search5">
                <form class="form-inline">
                  <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                      <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <!-- Fullscreen -->
            <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>
            <!-- Login -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-user-circle"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <a href="<?=site_url('Admin/login')?>" class="dropdown-item">
                  <i class="fas fa-user mr-2"></i>
                  <span class="float-right text-muted text-sm">LOGIN</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Body -->
  <div class="container" style="margin-top: 180px;margin-bottom: 80px;">
    <div class="card">
      <img src="<?=base_url()?>assets/dist/img/no-image.png" style="width: 1100px;margin: auto;margin-top: 40px;margin-bottom: 40px;">
      <div class="card-body text-center" style="margin: auto;margin-bottom: 20px;">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo repellendus nobis ab blanditiis, in tenetur porro alias assumenda et cumque nesciunt expedita ea aut, suscipit, ut inventore quas quasi!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta non fugit sequi suscipit iure quaerat aliquam accusamus dicta ab nemo, doloremque necessitatibus autem facere rem vitae ipsum pariatur eos. Cum.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo harum, eveniet, error exercitationem nesciunt officia molestias reiciendis neque doloremque placeat culpa, adipisci sapiente quod corporis consequuntur cupiditate nam in dicta.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere architecto quidem vitae perspiciatis sapiente ab, minima magnam eum totam doloribus eveniet? Natus et voluptatum nostrum error maxime suscipit doloribus aspernatur?
      </div>
    </div>
  </div>

  <!-- Footer -->

  <div class="row" style="width: 100%;">
    <div class="col bg-dark">
      <div class="container" style="color: white;">
        <b>Copyright &copy; <a href="http://adminlte.io">AdminLTE.io</a>.</b>All rights reserved.
        <div class="float-right d-none d-sm-inline-block"><b>Version</b> 3.0.0-alpha</div>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url()?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?=base_url()?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url()?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?=base_url()?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url()?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url()?>assets/plugins/moment/moment.min.js"></script>
<script src="<?=base_url()?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?=base_url()?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?=base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/dist/js/adminlte.js"></script>
</body>
</html>
