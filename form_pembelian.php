<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESANAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
.container{
        width: 45%;
        margin-top: 9%;
		margin-bottom: 9%;
        box-shadow: 0 3px 20px rgba(0,0,0,0.3);
        padding: 40px;
    }
    button{
        width: 49%;
    }
</style>

<body>     
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<div class="container"> 
<form method="$_GET" action="create_stok.php">
    <center><h2>PEMBELIAN ELEKTRONIK </h2></center>
    <hr>

    <div class="form-group"> 
    <label> Nama </label>
    <td><input type="text" name="nama" class="form-control" placeholder="Masukka Nama "></td>
    </div>

    <div class="form-group"> 
    <label> Nama Elektronik </label>
    <td><input type="text" name="nama_elektronik" class="form-control" placeholder="Masukkan Nama elektronik "></td>
    </div>

    <div class="form-group">
    <label> Jumlah Barang </label>
    <td><input type="text" name="jumlah" class="form-control" placeholder="Masukkan Jumlah Barang"></td>    
    </div>

    <button type="SUBMIT" value="LOGIN" class="btn btn-primary"> PEMBELIAN </button>
    <button type="RESET" value="RESET" class="btn btn-danger"> RESET </button>
    <br>
    <br>
    <a href="tampil.php"> LIHAT DATA </a>


</form>

</div>
</body>
</html>