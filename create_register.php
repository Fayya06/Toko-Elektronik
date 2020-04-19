<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<?php
include "koneksi_register.php";

$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if($password !== $password2){
    echo "<script> 
    alert('password anda tidak sesuai !');
    </script>";
    return false;
}

$query = "INSERT INTO login (id, username, password)
VALUES ('', '$username', '$password')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    echo "Berhasi Tambah Data";
}else{
    echo "Gagal Tambah Data";
}

?>

    
</body>
</html>