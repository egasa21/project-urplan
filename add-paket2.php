<?php 
// revised by apep
session_start();
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
// $id = $_POST['id'];
$paket = $_POST['paket'];

// revised by apep
$user_id = $_SESSION['user_id'];
if (!$user_id) {
    header("Location: /FormulirIdentitas2");
    return;
}

 
// update data ke database
// revised by apep
mysqli_query($db,"UPDATE pendaftar2 set paket='$paket' where id='$user_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:Pembayaran2");
 
?>