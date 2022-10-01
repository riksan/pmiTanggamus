<?php 
include 'config.php';

$id_daftar = $_GET['id_daftar'];
$tensi = $_POST['tensi'];
$hb = $_POST['hb'];


$query = "UPDATE `tb_daftar` SET `tensi`='$tensi',`hb`='$hb' WHERE id_daftar=$id_daftar";
$result = mysqli_query($koneksi,$query);

if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil diedit.');window.location='../admin/adminkelolapendonor.php';</script>";
}

?>