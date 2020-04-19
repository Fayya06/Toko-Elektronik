<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pembeli</title>
</head>
<body>

<?php 
include 'koneksi_register.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password !== $password2){
    echo "<script>
    alert ('password anda tidak sesuai !');
    </script>";
    return false;
}

$query = "INSERT INTO pembeli (id_pembeli, username, email, password)
VALUES ('', '$username', '$email', '$password')";

$result = mysqli_query($connect, $query);
$num (mysqli_affected_rows($connect));

if($num > 0){
    echo "Berhasil Tambah Data";
}else{
    echo "Gagal Tambah Data";
}

?> 

    
</body>
</html>