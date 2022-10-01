<?php 
include '../config.php';

session_start();
 
if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Informasi Donor Darah PMI Tanggamus</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
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
      
      <li class="nav-item bg-danger">
        <a class="btn" href="../proses/p_logout.php">
          <!-- <i class="fas fa-expand-arrows-alt"> -->logout</i>
        </a>
      </li>
    </ul>
  </nav> 
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-danger elevation-4">
    <!-- Brand Logo -->
    <a href="../index.php" class="brand-link bg-danger">
      <img src="../dist/img/pmi.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIDDATANG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="adminberanda.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Halaman Utama
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="adminpermintaandarah.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Permintaan Darah
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="adminjadwal.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Kelola Jadwal
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admininputdarah.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Input Darah             
              </p>
            </a>            
          </li>
          <li class="nav-item">
            <a href="adminkelolapendonor.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Kelola Pendonor
              </p>
            </a>
          </li>      
          <li class="nav-item">
            <a href="adminstordarahrs.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Stor Darah RS
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="admininputrs.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Input Rumah Sakit
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
            <h1 class="m-0">Permintaan Darah</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="index.php">Halaman Utama</a></li>
              <li class="breadcrumb-item active">Permintaan Darah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form method="POST" action="../proses/ptambah_permintaan.php" enctype="multipart/form-data">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Rumah Sakit</label>
                    <select class="form-control select2bs4" name="id_rumah_sakit" style="width: 100%;">
                    <option disabled selected>Pilih Rumah Sakit</option>
                    <?php 
                      $q_rs = "SELECT * FROM tb_rumah_sakit";
                      $r_rs = mysqli_query($koneksi, $q_rs);
                      if(!$r_rs){
                        die ("Query Error: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                      }
                      while($data_rs=mysqli_fetch_assoc($r_rs)){
                      ?>
                    <option value="<?php echo $data_rs['id_rumah_sakit']; ?>"><?php echo $data_rs['nama_rumah_sakit']; ?></option>
                  <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">No Telp</label>
                    <input type="text" class="form-control" name="telephone" placeholder="Masukan No Telp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Dokter</label>
                    <input type="text" class="form-control" name="nama_dokter" placeholder="Nama Dokter">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pasien</label>
                    <input type="text" class="form-control" name="nama_passien" placeholder="Nama Pasien">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                    <div class="row">
                    <div class="col">
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_passien" >
                      <label class="form-check-label" for="flexRadioDefault1">
                        Laki - Laki
                      </label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check">
                      <input class="form-check-input" type="radio" name="jk_passien" >
                      <label class="form-check-label" for="flexRadioDefault1">
                        Perempuan
                      </label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="Date" class="form-control" id="exampleInputEmail1" placeholder="Alamat">
                </div> -->
                <div class="form-group">
                    <label for="exampleInputEmail1">Usia Pasien</label>
                    <input type="number" class="form-control" name="usia" placeholder="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Passien</label>
                  <input type="text" class="form-control" name="alamat_passien" placeholder="">
                </div>                
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Permintaan</label>
                      <input type="date" class="form-control" name="tanggal_permintaan" placeholder="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Tanggal Diperlukan</label>
                      <input type="date" class="form-control" name="tanggal_diperlukan" placeholder="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Golongan dan Jenis Darah</label>
                  <select class="form-control select2bs4" name="id_darah"style="width: 100%;" >
                    <option disabled selected>Pilih Darah</option>
                    <?php 
                      $q_darah = "SELECT * FROM v_darah";
                      $r_darah = mysqli_query($koneksi, $q_darah);
                      if(!$r_darah){
                        die ("Query Error: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
                      }
                      while($data_darah=mysqli_fetch_assoc($r_darah)){
                      ?>
                    <option value="<?php echo $data_darah['id_darah']; ?>"> <?php echo $data_darah['gol_darah']; ?> - <?php echo $data_darah['jenis_darah']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jumlah Kantong</label>
                  <input type="number" class="form-control" name="jumlah_kantong" placeholder="Jumlah Kantong">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Registasi</label>
                  <input type="number" class="form-control" name="no_registrasi" placeholder="No Registrasi">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </div>
          </div>
        </div>        
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>MARKAS PALANG MERAH INDONESIA KABUPATEN TANGGAMUS <br>
      Jln. Raya Gisting Atas, Blok 13, Kecamatan. Gisting, Kabupaten. Tanggamus, Kode Pos: 35378, Email: pmitanggamus.com, Hp: 082280297260 
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
