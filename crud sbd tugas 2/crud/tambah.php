<?php 
include 'config.php';
extract($_POST);
if(isset($_POST['submit'])){
    $sql = "INSERT INTO barang VALUES('','$nama_barang','$harga_brg','$jumlah_brg')";
    if (mysqli_query($conn, $sql)) {
        echo "<script> 
      alert('Data berhasil di input!');
       window.location='index.php';
      </script>";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <table align="center">
    <form action="" method="POST">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
            <td>Harga Barang</td>
            <td><input type="text" name="harga_brg"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><input type="number" value="1" name="jumlah_brg"></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">Submit Data</button></td>
           
        </tr>
    </form>
    </table>
</body>
</html>