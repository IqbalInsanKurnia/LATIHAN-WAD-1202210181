<?php

require 'function.php';

$plt = $_GET ["id"];


if ( hapus($plt) > 0) {
    echo "
    <script>
        alert('DATA BERHASIL DIHAPUS');
        document.location.href = '../Latihan 1/index.php';
    </script>
    ";
} else {
    echo "
        <script>
            alert('DATA GAGAL DIHAPUS');
            document.location.href = '../Latihan 1/index.php';
        </script>
        ";
    
}




?>