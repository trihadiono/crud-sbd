<?php 
include 'config.php';
$id_dv = $_GET['id_inv'];
extract($_POST);
$sql = "SELECT * FROM detail_invoice WHERE id_detailinvoice='$id_dv'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>

        <?php 
        //kalo submit di pencet
        if(isset($_POST['submit'])){
            $sql2 = "UPDATE detail_invoice SET qty='$quantity' WHERE id_detailinvoice ='$id_dv'";
            if (mysqli_query($conn, $sql2)) {
                echo "<script> 
              alert('qty berhasil di ubah!');
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
            <title>Document</title>
        </head>
        <body>
            <table align="center" border="1">
                <form action="" method="POST">
                <th>Id Invoice</th>
                <th>Id Barang</th>
                <th>Jumlah Barang</th>
                <th>Aksi</th>
                <tr>
        <td>
            <?php echo $row['id_invoice'] ?>
           </td>
               
               <td>
              <?php echo $row['id_barang'] ?>
              </td>

               <td>
               <input type="text" name="quantity" value="<?php echo $row['qty'] ?>">    
               </td>
               <td><button type="submit" name="submit">Edit</button></td>
               </tr>
               </form>
               </table>
        </body>
        </html>
       
        <?php
    }
}
//"UPDATE barang SET nama_barang='$nama',harga_barang='$harga',jumlah_barang=$jumlah WHERE id_barang = $id"; 
?>

