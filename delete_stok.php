<?php
include 'koneksi_register.php';

$id = $_GET['id'];

$query ="DELETE FROM stok WHERE id='$id'";

$result = mysqli_query($connect , $query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    header("location : tampil.php");
}else{
    echo "Gagal Hapus Data <br>" . mysqli_connect_error();
    echo "<a href='tampil.php'> Lihat Data </a>";

}

?>
