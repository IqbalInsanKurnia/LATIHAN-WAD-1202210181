<?php 
require 'function.php';

$plt = $_GET ["no_polisi"];

$mobil = read("SELECT * FROM data_mobil WHERE no_polisi = '$plt'")[0];


if (isset( $_POST ["submit"])) {

    if ( ubah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        echo mysqli_error($conn);
        echo "
         <script>
            alert('DATA GAGAL DIUBAH');
            document.location.href = '../Latihan 1/index.php';
         </script>
        ";  
    }
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HALAMAN ADMIN</title>
    </head>
    <body>
        <form action="" method="post">
            <label for="nama_macan" class="form-label">NAMA MACAN :</label>
            <input type="text" class="form-control" id="nama_macan" name ="nama_macan" required disabled value="<?= $nama ["nama_macan"];?>">

            <label for="kode_barang" class="form-label">KODE BARANG :</label>
            <input type="text" class="form-control" id="kode_barang" name ="kode_barang" required disabled value="<?= $kode ["kode_barang"];?>">

            <label for="harga_barang" class="form-label">HARGA BARANG :</label>
            <input type="text" class="form-control" id="harga_barang" name ="harga_barang" required disabled value="<?= $harga["harga_barang"];?>">

            <label for="stok_barang" class="form-label">STOK BARANG :</label>
            <input type="text" class="form-control" id="stok_barang" name ="stok_barang" required disabled value="<?= $stok ["stok_barang"];?>">

            <button type="submit" name="submit">UBAH !</button>
        </form>
    </body>
</html>