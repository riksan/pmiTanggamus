<?php 
include 'config.php';

//Variable untuk menampung data 

$nik = $_GET['nik'];
$id_kegiatan = $_POST['id_kegiatan'];
$donor_ke = $_POST['donor_ke'];
$donor_terakhir = $_POST['donor_terakhir'];


//
$query = "INSERT INTO tb_daftar(id_daftar, nik, id_kegiatan, donor_ke, donor_terakhir, tensi, hb, konfirmasi) VALUES ('', '$nik', '$id_kegiatan', '$donor_ke', '$donor_terakhir','','','')";
$result = mysqli_query($koneksi,$query);
if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil ditambah.');window.location='../index.php';</script>";
}
?>