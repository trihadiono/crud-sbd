<?php 
session_start();
include 'config.php';
$sql = "SELECT * FROM barang";
$result = mysqli_query($conn,$sql);
$i =0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas IP</title>
</head>
<body>
    <h3 align="center">DATA BARANG </h3>
    <h4 align="center"><a href="tambah.php">Tambah Data Barang</a> </h4>
    <?php 
    if(isset($_SESSION['nama_pgw'])){
        ?>
        <h3>Hai, <?= $_SESSION['nama_pgw'] ?></h3>
        <h4><?= $_SESSION['id_pgw']; ?></h4>
    <?php } else{
    ?>
    <h3><a href="login.php">login</a></h3>
  <?php } ?>

  <h3><a href="cart.php">Cart</a></h3>
    <table align="center" border="1">
        <form action="" method="POST">
          

           <th>No</th>
           <th>Nama</th>
           <th>Harga</th>
           <th>Jumlah(stock)</th>
           <th>Aksi</th>
           <th>Jumlah yang ingin dibeli</th>
           <th>beli</th>
       
            <tr>
            <?php 
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                $i++;
               
                ?>
                <td><?= $i; ?></td>
                <td><?php echo $row['nama_barang'] ?></td>
                <input type="hidden" name="nama" value="<?= $row['nama_barang'] ?>">
                <input type="hidden" name="harga" value="<?= $row['harga_barang'] ?>">
                <input type="hidden" name="jumlah" value="<?= $row['jumlah_barang'] ?>">
           
                <td>Rp.<?php echo number_format($row['harga_barang'],2)  ?></td>
         
         
               
                <td><?php echo $row['jumlah_barang'] ?>
               
            </td>

                <input type="hidden" name="id" value="<?= $row['id_barang'] ?>">

                <td><a href="edit.php?id=<?php echo $row['id_barang'] ?>">Edit</a>
               <a href="delete.php?id=<?php echo $row['id_barang'] ?>">Hapus</a></td>
               <td> <input type="number" value="1" name="qty_brg"></td>
               <td><a href="beli.php?id=<?= $row['id_barang'] ?>">beli</a></td>
            </tr>
         
            <?php 
           
            }
        }

            ?>
        </form>
    </table>
    <!-- 
    // $waktu = date("Y-m-d");
    // echo $waktu;
   -->
</body>
</html>