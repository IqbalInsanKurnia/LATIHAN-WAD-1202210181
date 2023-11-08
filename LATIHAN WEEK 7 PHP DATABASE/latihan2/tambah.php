<?php
require 'function.php';



if (isset($_POST["submit"])) {
    $nama = $_POST["nama_macan"];
    $kode = $_POST["kode_barang"];
    $harga = $_POST["harga_barang"];
    $stok = $_POST["stok_barang"];

    $query = "INSERT INTO tabel_macan VALUES ('$nama','$kode','$harga','$stok')";

    mysqli_query($conn, $query);

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