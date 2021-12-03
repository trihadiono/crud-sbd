<?php 
session_start();
include 'config.php';

if(isset($_POST['submit'])){
$nama = $_POST['nama'];
$hp = $_POST['hp'];
    $sql = "SELECT * FROM pegawai WHERE nama_pegawai = '$nama' AND no_hp='$hp'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['id_pgw'] = $row['id_pegawai'];
            $_SESSION['nama_pgw'] = $nama;
        echo "<script>
        alert('anda berhasil login')
        window.location = 'index.php'
        </script>";
        }
    } 
    else{
        echo "<script>
        alert('anda gagal login')
        window.location = 'index.php'
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form action="" method="POST">
    <ul>
        <li><label for="Nama">nama</label>
        <input type="text" name="nama">
    </li>
        <li><label for="Nama">No Hp</label>
        <input type="text" name="hp">
    </li>
    <li>
        <button type="submit" name="submit">login</button>
    </li>
    </form>
    </ul>
</body>
</html>