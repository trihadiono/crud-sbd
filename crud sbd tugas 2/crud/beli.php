<?php 
session_start();
include 'config.php';
$id_brg = $_GET['id'];
$id_pegawai = $_SESSION['id_pgw'];
$waktu = date("Y-m-d");
$sql = "INSERT INTO invoice VALUES('','$waktu','$id_brg','$id_pegawai')";
    if(mysqli_query($conn,$sql) > 0){
        
        echo "<script> 
        alert('Barang berhasil di beli!');
         window.location='index.php';
        </script>";
     
      //  print_r($_SESSION['id_inv']);
    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    $sql3 = "SELECT * FROM invoice";
    $result = mysqli_query($conn,$sql3);
    if($result > 0){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['id_inv'] = $row['id_invoice'];
        }
    }

$id_inv1 = $_SESSION['id_inv'];
    $sql2 = "INSERT INTO detail_invoice VALUES('','$id_inv1','$id_brg','$qty')";
    if(mysqli_query($conn,$sql2) > 0){
        
        echo "<script> 
        alert('Barang berhasil di beli!');
         window.location='index.php';
        </script>";

    }
    else{
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    }
?>