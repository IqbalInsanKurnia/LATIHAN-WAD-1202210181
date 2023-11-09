<!DOCTYPE html>
<html>
<head>
    <title>Form Input Barang</title>
</head>
<body>
    <form method="post" action="tambah.php">
        Nama Macan: <input type="text" name="nama_barang"><br>
        Harga: <input type="text" name="harga"><br>
        Stok: <input type="text" name="stok"><br>
        <input type="submit" value="Simpan" onclick="showPopup()">
    </form>
    
    <h1>Lihat Barang</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
        <?php
        $host = 'localhost:3308';
        $username = 'root';
        $password = '';
        $database = 'wad';
        
        $koneksi = new mysqli($host, $username, $password, $database);

        if ($koneksi->connect_error) {
            die("Koneksi ke database gagal: " . $koneksi->connect_error);
        }

        $query = "SELECT * FROM tabel_macan";
        $result = $koneksi->query($query);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["no"] . "</td>";
            echo "<td>" . $row["nama_macan"] . "</td>";
            echo "<td>" . $row["harga_barang"] . "</td>";
            echo "<td>" . $row["stok_barang"] . "</td>";
            echo "<td><a href='ubah.php?no=" . $row["no"] . "'>Ubah</a> | <a href='hapus.php?no=" . $row["no"] . "'>Hapus</a></td>";
            echo "</tr>";
        }
        $koneksi->close();
        ?>
    </table>
    <script>
        function showPopup() {
            alert("Data berhasil disimpan!");
        }
    </script>
    
</body>
</html>
