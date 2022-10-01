<?php 
include 'config.php';

//Variable untuk menampung data 
$hari = $_POST['hari'];
$tanggal_kegiatan = $_POST['tanggal_kegiatan'];
$jam = $_POST['jam'];
$lokasi_kegiatan = $_POST['lokasi_kegiatan'];
$target = $_POST['target'];

//
$query = "insert into tb_kegiatan values('','$hari','$tanggal_kegiatan','$jam','$lokasi_kegiatan','$target')";
$result = mysqli_query($koneksi,$query);
if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil ditambah.');window.location='../admin/adminjadwal.php';</script>";
}
?>