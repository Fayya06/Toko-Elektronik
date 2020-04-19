<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Elektronik </title>
</head>
<body>

<?php
include 'koneksi_register.php';

$nama_elektronik = $_GET ['nama_elektronik'];
$stok = $_GET ['stok'];
$harga = ['harga'];

$query = "INSERT INTO stok (nama_elektronik, stok, harga) 
VALUES ('$nama_elektronik' , '$stok' , '$harga')";

$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasil tambah data ";
    echo "<a href='tampil.php'> Lihat Data </a>";
}else{
    echo "Gagal tambah data ";
    echo "<a href='tampil.php'> Lihat Data </a>";
}

?> 

    
</body>
</html>