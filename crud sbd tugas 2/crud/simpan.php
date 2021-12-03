<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ippp";

extract($_POST);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


// (id_detailinvoice,id_invoice,id_barang,qty)
$sql = "INSERT INTO barang VALUES('','$nama_barang','$harga_barang','$jumlah_barang') 
VALUES ('', '$id_invoice','$id_brg','$qty')";

if (mysqli_query($conn, $sql)) {
  echo "<script> 
alert('Data berhasil di input!');
 window.location='index.php';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>
