<?php 
include 'config.php';

//Variable untuk menampung data 
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

//
$query = "INSERT INTO tb_rumah_sakit(id_rumah_sakit, nama_rumah_sakit, alamat) VALUES ('','$nama','$alamat')";
$result = mysqli_query($koneksi,$query);
if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil ditambah.');window.location='../admin/adminberanda.php';</script>";
}
?>