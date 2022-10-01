<?php 
 
include '../config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['user_name'])) {
    header("Location: ../admin/index.php");
}
 
$user_name = $_POST['user_name'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM login WHERE user_name='$user_name' AND password='$password'";
$result = mysqli_query($koneksi, $sql);
if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_name'] = $row['user_name'];
    header("Location: ../admin/adminberanda.php");
} else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!');window.location='../admin/index.php';</script>";
}

?>