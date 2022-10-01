<!DOCTYPE html>
<?php
session_start();
 
if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
    }

include('../config.php');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          PMI Tanggamus.
          <small class="float-right"><?php echo date("Y/m/d");?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <center><h3>Data Darah Masuk</h3></center><br>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Golongan Darah</th>
            <th>Jenis</th>            
            <th>Tanggal</th>
            <th>Jumlah</th>
            
          </tr>
          </thead>
          <tbody>
          
            <?php
              $query = "SELECT * FROM v_darah_masuk";
              $result = mysqli_query($koneksi, $query);
              if(!$result){
                die ("Query Error: ".mysqli_errno($koneksi).
                 " - ".mysqli_error($koneksi));
                }
                $no = 1;
                while($row=mysqli_fetch_assoc($result)){
            ?>
            <tr>
              <td><?php echo $no;?></td>
              <td><?php echo $row['gol_darah'];?></td>
              <td><?php echo $row['jenis_darah'];?></td>
              <td><?php echo $row['tanggal'];?></td>
              <td><?php echo $row['jumlah'];?></td>
            </tr> 
            <?php 
            $no++;
            } ?>
                   
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
