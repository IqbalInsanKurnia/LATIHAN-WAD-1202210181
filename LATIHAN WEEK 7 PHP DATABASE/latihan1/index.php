<?php
require 'function.php';

$macan = query('SELECT * FROM tabel_macan');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>HALAMAN ADMIN</title>
</head>

<body>
    <h1>Daftar Barang TOKO MACAN CISEWU</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Stok Barang</th>
            <th>Aksi</th>
        </tr>
        <tr>
            <?php $i = 1; ?>
            <?php foreach ($macan as $row) : ?>
        </tr>
        <tr>
            <td class=""><?= $i; ?></td>
            <td><?= $row ['nama_macan'];?></td>
            <td><?= $row ['kode_barang'];?></td>
            <td><?= $row ['harga_barang'];?></td>
            <th><?= $row ['stok_barang'];?></th>
            <td>
                <Ubah href="../latihan6/ubah.php" role="button">Ubah</a>
                <a href="../latihan4/hapus.php" role="button">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
    <div>
        <a href="../latihan2/tambah.php" role="button">Tambah Data</a>
    </div>
</body>
</html>