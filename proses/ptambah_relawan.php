<?php 
include 'config.php';

//Variable untuk menampung data 
$id_gol_darah = $_POST['id_gol_darah'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk = $_POST['jk'];
$telephone = $_POST['telephone'];

//
$query = "INSERT INTO tb_relawan (nik, id_gol_darah, nama, alamat, tempat_lahir, tanggal_lahir, jk, telephone) VALUES ('$nik', '$id_gol_darah', '$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jk', '$telephone')";
$result = mysqli_query($koneksi,$query);
if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil ditambah.');window.location='../daftardonor.php?nik=$nik';</script>";
}
?>