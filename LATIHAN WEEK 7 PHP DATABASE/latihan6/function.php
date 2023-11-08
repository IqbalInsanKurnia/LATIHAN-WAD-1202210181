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

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nama = $data["nama_macan"];
    $kode = $data["kode_barang"];
    $harga = $data["harga_barang"];
    $stok = $data["stok_barang"];


    $query = "UPDATE data_mobil SET
                
                tipe_mobil = '$nama',
                merek_mobil = '$kode',
                warna = '$harga',
                pemilik = '$stok'
            WHERE id = '$id'
    ";

    mysqli_query($conn,$query) or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
    //return var_dump($data);
    
}

?>