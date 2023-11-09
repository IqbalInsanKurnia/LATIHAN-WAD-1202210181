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

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])) {
        // Tangani perubahan data barang yang dikirim melalui formulir
        // Lakukan validasi data dan hapus data barang dari database
        $query = "DELETE FROM tabel_macan WHERE no = $no";
        if (mysqli_query($koneksi, $query)) {
            echo "Data barang berhasil dihapus!";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Barang</title>
</head>
<body>
    <h1>Hapus Barang</h1>
    <p>Anda yakin ingin menghapus barang berikut?</p>
    <p>Nama Barang: <?php echo $barang['nama_macan']; ?></p>
    <p>Harga: <?php echo $barang['harga_barang']; ?></p>
    <p>Stok: <?php echo $barang['stok_barang']; ?></p>

    <form method="post">
        <input type="submit" name="confirm" value="Ya, Hapus" onclick="showPopup()">
        <a href="index.php">Batal</a>
    </form>

    <script>
        function showPopup() {
            if (confirm('Anda yakin ingin menghapus barang ini?')) {
                // Lanjutkan penghapusan jika pengguna memilih "OK" dalam dialog konfirmasi
                return true;
            } else {
                // Batalkan penghapusan jika pengguna memilih "Batal" dalam dialog konfirmasi
                return false;
            }
        }
    </script>
</body>
</html>