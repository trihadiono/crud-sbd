<?php

include 'config.php';

extract($_GET);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "delete from barang where id_barang='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Barang berhasil dihapus";
  echo "<script> 
 window.location='index.php';
</script>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>