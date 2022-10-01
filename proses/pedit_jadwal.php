<?php 
include 'config.php';

$id_kegiatan = $_GET['id_kegiatan'];
$hari = $_POST['hari'];
$tanggal_kegiatan = $_POST['tanggal_kegiatan'];
$jam = $_POST['jam'];
$lokasi_kegiatan = $_POST['lokasi_kegiatan'];
$target = $_POST['target'];

$query = "UPDATE tb_kegiatan SET hari='$hari', tanggal_kegiatan='$tanggal_kegiatan', jam='$jam', lokasi_kegiatan='$lokasi_kegiatan', target='$target' WHERE id_kegiatan = $id_kegiatan";
$result = mysqli_query($koneksi,$query);

if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil diedit.');window.location='../admin/adminjadwal.php';</script>";
}

?>