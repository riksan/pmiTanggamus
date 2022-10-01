<?php 
include 'config.php';

//Variable untuk menampung data 

$id_gol_darah = $_POST['id_gol_darah'];
$jenis_darah = $_POST['jenis_darah'];
$tanggal = $_POST['tanggal'];
$jumlah = $_POST['jumlah'];

//
$query = "INSERT INTO tb_tambah_darah(no, id_gol_darah,jenis_darah, tanggal, jumlah) VALUES ('','$id_gol_darah','$jenis_darah','$tanggal','$jumlah')";
$result = mysqli_query($koneksi,$query);
if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil ditambah.');window.location='../admin/adminberanda.php';</script>";
}
?>