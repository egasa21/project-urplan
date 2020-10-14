<?php
// revised by apep
session_start();
include_once("config.php");

if(isset($_POST["Submit"])){
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kota'];
    $domisili = $_POST['domisili'];
    $wa = $_POST['wa'];
    $mobile = $_POST['mobile'];
    $kesibukan = $_POST['kesibukan'];
    $datemin = $_POST['datemin'];
    $nama_panggilan = $_POST['nama_panggilan'];

    $sql = "INSERT INTO pendaftar3 (nama,nama_panggilan,tanggal_lahir ,email, mobile, wa, kota, kota_domisili, provinsi, kesibukan, gender) VALUES ('$name','$nama_panggilan' ,'$datemin' ,'$email', '$mobile','$wa' ,'$kota', '$domisili', '$provinsi', '$kesibukan', '$gender')";
    $query = mysqli_query($db,$sql);
    
    // revised by apep
    $_SESSION['user_id'] = mysqli_insert_id($db);

    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: Paket3.php?status=daftar-sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo $db -> error;
    }

    
}else{
    die("Akses dilarang");
}

?>