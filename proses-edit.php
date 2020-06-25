<?php
include("config.php");

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
    
    $sql = "UPDATE produk SET nama_produk='$nama', keterangan='$keterangan', harga=$harga, jumlah=$jumlah WHERE id = $id";
    $result = mysqli_query($db, $sql);

    if($result) {
        header('Location:index.php');
    } else {
        die('Gagal menyimpan perubahan...');
    }
} else {
    die("Akses dilarang...");
}
?>