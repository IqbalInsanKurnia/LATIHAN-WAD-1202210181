<?php
// Koneksi ke database

$koneksi = mysqli_connect("localhost:3308", "root", "", "wad");

// Cek koneksi
if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama_barang = $_POST['nama_macan'];
$harga = $_POST['harga_barang'];
$stok = $_POST['stok_barang'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO tabel_macan (nama_macan, harga_barang, stok_barang) VALUES ('$nama_barang', $harga, $stok)";

if (mysqli_query($koneksi, $query)) {
    echo "Data berhasil disimpan";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
