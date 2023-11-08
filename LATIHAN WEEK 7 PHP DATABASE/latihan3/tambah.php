<?php 
require 'function.php';


if (isset( $_POST ["submit"])) {

    if ( tambah ($_POST) > 0 ) {
        echo "
        <script>
            alert('DATA BERHASIL DITAMBAHKAN');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('DATA GAGAL DITAMBAHKAN');
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
            <input type="text" class="form-control" id="nama_macan" name ="nama_macan" required>

            <label for="kode_barang" class="form-label">KODE BARANG :</label>
            <input type="text" class="form-control" id="kode_barang" name ="kode_barang" required>

            <label for="harga_barang" class="form-label">HARGA BARANG :</label>
            <input type="text" class="form-control" id="harga_barang" name ="harga_barang" required>

            <label for="stok_barang" class="form-label">STOK BARANG :</label>
            <input type="text" class="form-control" id="stok_barang" name ="stok_barang" required>

            <button type="submit" name="submit">SUBMIT !</button>
        </form>
    </body>
</html>