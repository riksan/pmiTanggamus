<?php 
include 'config.php';

$id_daftar = $_GET["id_daftar"];

$query = "DELETE FROM tb_daftar WHERE id_daftar = $id_daftar";
$result = mysqli_query($koneksi,$query);

if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil dihapus.');window.location='../admin/adminkelolapendonor.php';</script>";
}

?>