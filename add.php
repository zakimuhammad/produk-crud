<?php
include("config.php");

if(isset($_POST['simpan'])){
    $nama = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];

    $query =  "INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES('$nama', '$keterangan', $harga, $jumlah)";
    $result = mysqli_query($db, $query);

    if($result) {
        header('Location:index.php');
    } else {
        die('Gagal menambahkan data...');
    }
} else {
    die("Akses dilarang...");
}

?>