<?php 
include 'config.php';

//Variable untuk menampung data 
/*$id_permintaan = $_POST['id_permintaan'];*/
$id_rumah_sakit = $_POST['id_rumah_sakit'];
$id_darah = $_POST['id_darah'];
$no_registrasi = $_POST['no_registrasi'];
$nama_dokter = $_POST['nama_dokter'];
$nama_passien = $_POST['nama_passien'];
$jk_passien = $_POST['jk_passien'];
$telephone = $_POST['telephone'];
$alamat_passien = $_POST['alamat_passien'];
$usia = $_POST['usia'];
$tanggal_permintaan = $_POST['tanggal_permintaan'];
$tanggal_diperlukan = $_POST['tanggal_diperlukan'];
$jumlah_kantong = $_POST['jumlah_kantong'];

//
$query = "INSERT INTO `tb_permintaan`(`id_permintaan`, `id_rumah_sakit`, `id_darah`, `no_registrasi`, `nama_dokter`, `nama_passien`, `jk_passien`, `telephone`, `alamat_passien`, `usia`, `tanggal_permintaan`, `tanggal_diperlukan`, `jumlah_kantong`) VALUES ('','$id_rumah_sakit','$id_darah','$no_registrasi','$nama_dokter','$nama_passien','$jk_passien','$telephone','$alamat_passien','$usia','$tanggal_permintaan','$tanggal_diperlukan','$jumlah_kantong')";
$result = mysqli_query($koneksi,$query);
if (!$result){
	die ("Query gagal dijalankan: ".mysqli_errno($koneksi).
                           " - ".mysqli_error($koneksi));
}else{
	echo "<script>alert('Data berhasil ditambah.');window.location='../admin/adminberanda.php';</script>";
}
?>