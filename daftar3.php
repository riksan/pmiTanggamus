<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Donor Darah PMI Tanggamus</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light bg-danger">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link bg-danger" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav> 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-danger elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link bg-danger">
      <img src="dist/img/pmi.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIDDATANG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman Utama
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Daftar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="riwayat.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Riwayat Donor
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="stokdarah.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Stok Darah                
              </p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="kegiatan.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kegiatan
              </p>
            </a>
          </li>      
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Halaman Utama</a></li>
              <li class="breadcrumb-item active">Daftar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <!-- <div class="card-header">
                <h5 class="m-0">Daftar</h5>
              </div> -->
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Donor</label>
                    <select class="form-control select2bs4" style="width: 100%;">
                    <option selected="selected">PT PRISMA INVESTAMA Kota Agung Barat</option>
                    <option>SMKN 1 Talang Padang</option>
                    <option>POLRES Tanggamus</option>
                    <option>Islamic Center Kota Agung</option>
                    <option>MA Kebumen Sumberjo</option>
                    <option>Kolam Renang LENTANA</option>
                    <option>Taman Bukit Idaman Gisting</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan NIK">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No Telp</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan No Telp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                  <div class="row">
                    <div class="col">
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Laki - Laki
                      </label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                      <label class="form-check-label" for="flexRadioDefault1">
                        Perempuan
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <textarea type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Alamat"></textarea>
                </div>

              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <!-- <div class="card-header">
                <h5 class="m-0">Daftar</h5>
              </div> -->
              <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Golongan Darah</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Golongan Darah">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Donor Ke</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Donor Ke">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Donor Terakhir</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Donor Terakhir">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Berat Badan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Berat Badan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">HB</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan HB">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tensi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukan Tensi">
                </div>
                <button href="#" class="btn btn-primary">Kirim</button>
                <a href="daftar.php" class="btn btn-danger">Cancel</a>
              </div>
            </form>

            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>MARKAS PALANG MERAH INDONESIA KABUPATEN TANGGAMUS <br>
      Jln. Raya Gisting Atas, blok 13, Kecamatan. Gisting, Kabupaten. Tanggamus, kode pos 35378, Email: pmitanggamus.com, Hp: 082280297260 
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
