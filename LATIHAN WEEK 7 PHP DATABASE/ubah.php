<?php
// Pastikan Anda memasukkan koneksi ke database di sini
$koneksi = mysqli_connect("localhost:3308", "root", "", "wad");

if (isset($_GET['no'])) {
    $no = $_GET['no'];

    // Ambil data barang dari database berdasarkan ID
    $query = "SELECT * FROM tabel_macan WHERE no = $no";
    $result = mysqli_query($koneksi, $query);
    $barang = mysqli_fetch_assoc($result);

    if (!$barang) {
        echo "Barang tidak ditemukan!";
        exit;
    }
} else {
    echo "ID barang tidak valid!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Tangani perubahan data barang yang dikirim melalui formulir
    $nama_barang = $_POST['nama_macan'];
    $harga = $_POST['harga_barang'];
    $stok = $_POST['stok_barang'];

    // Lakukan validasi data dan perbarui data barang di database
    $query = "UPDATE tabel_macan SET nama_macan = '$nama_barang', harga_barang = $harga, stok_barang = $stok WHERE no = $no";
    if (mysqli_query($koneksi, $query)) {
        echo "Data barang berhasil diperbarui!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Barang</title>
</head>
<body>
    <h1>Ubah Barang</h1>
    <form method="post">
        Nama Macan: <input type="text" name="nama_macan" value="<?php echo $barang['nama_macan']; ?>"><br>
        Harga: <input type="text" name="harga_barang" value="<?php echo $barang['harga_barang']; ?>"><br>
        Stok: <input type="text" name="stok_barang" value="<?php echo $barang['stok_barang']; ?>"><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
