<?php 
include 'config.php';
$id = $_GET['id'];
extract($_POST);
$sql = "SELECT * FROM barang WHERE id_barang='$id'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        ?>

        <?php 
        //kalo submit di pencet
        if(isset($_POST['submit'])){
            $sql2 = "UPDATE barang SET nama_barang='$nama_brg',harga_barang='$harga_brg',jumlah_barang='$jml_brg' WHERE id_barang ='$id'";
            if (mysqli_query($conn, $sql2)) {
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
            <title>Document</title>
        </head>
        <body>
            <table align="center" border="1">
                <form action="" method="POST">
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Aksi</th>
                <tr>
        <td>
            <input type="text" name="nama_brg" value=" <?php echo $row['nama_barang'] ?>">
           </td>
               
               <td>
               <input type="text" name="harga_brg" value=" <?php echo $row['harga_barang'] ?>">    
              </td>

               <td>
               <input type="text" name="jml_brg" value="<?php echo $row['jumlah_barang'] ?>">    
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

