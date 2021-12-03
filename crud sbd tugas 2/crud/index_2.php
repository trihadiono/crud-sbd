<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "ippp";

$koneksi = mysqli_connect($host,$user,$pass,$db);

if ($koneksi->connect_error){
    die("Koneksi ke database gagal");
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>transaksi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="max-auto">
    <!--untuk memasukkan data-->
    <div class="card">
  <div class="card-header">
    Create / Edit Data
  </div>
  <div class="card-body">
    <form action="" method="POST">

    </form>
  </div>
</div>

<!--untuk mengeluarkan data-->
<div class="card">
  <div class="card-header">
    Data Transaksi
  </div>
  <div class="card-body">
    
  </div>
</div>
    </div>
</body>
</html>

