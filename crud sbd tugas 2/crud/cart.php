<?php 
session_start();
include 'config.php';

$sql = "SELECT * FROM detail_invoice";
$result = mysqli_query($conn,$sql);
$i=0;


?>
<h3>Tabel invoice</h3>
<table border="2" align="center">
    <form action="" method="POST">
    <tr>
        <th>No</th>
        <th>id_invoice</th>
        <th>id_barang</th>
        <th>qty</th>
        <th>action</th>
    </tr>
    <tr>
    <?php 
    if(mysqli_num_rows($result) > 0):
        while($row = mysqli_fetch_assoc($result)):
            $i++;
    ?>
   
        <td><?= $i; ?></td>
        <td><?= $row['id_invoice']; ?></td>
        <td><?= $row['id_barang']; ?></td>
        <td><?= $row['qty']; ?></td>
        <td><a href="edit_cart.php?id_inv=<?= $row['id_detailinvoice']; ?>">Edit Cart</a></td>
        <input type="hidden" name="quantity" value="<?= $row['qty'] ?>">
    </tr>
    </form>
    <?php 
    endwhile;
endif;
?>
</table>
<table align="center">
    <tr>
        <td><a href="Nota.php" name="Beli"></a></td>
    </tr>
</table>

