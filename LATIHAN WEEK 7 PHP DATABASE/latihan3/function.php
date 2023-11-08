<?php
$conn = mysqli_connect("localhost:3308","root","","wad");

function read($query){
    global $conn;

    $hasil = mysqli_query($conn,$query);
    $rows = [];

    while($row = mysqli_fetch_assoc($hasil)){
        $rows [] = $row;

    }
    return $rows;


}
function tambah($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["nama_macan"];
    $kode = $data["kode_barang"];
    $harga = $data["harga_barang"];
    $stok = $data["stok_barang"];

    $query = "INSERT INTO data_mobil VALUES ('$id', '$nama','$kode','$harga','$stok')";

    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

?>