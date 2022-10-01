<?php 
include 'config.php';



$id_kegiatan = $_GET["id_kegiatan"];

$query = "DELETE FROM tb_kegiatan WHERE id_kegiatan = $id_kegiatan";
$result = mysqli_query($koneksi,$query);

if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil dihapus.');window.location='../admin/adminjadwal.php';</script>";
}

?>