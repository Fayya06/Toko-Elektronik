<?php

session_start();
include 'koneksi.php';

$username = $_POST($koneksi,"select*from pembeli where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:pemesanan.html");
}else{
    header("location:utama.php?submit=gagal");
}
?>
