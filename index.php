<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="add.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="namaProduk">Nama Produk</label>
                <input type="text" class="form-control" id="namaProduk" name="nama_produk">
            </div>
            <div class="form-group col-md-6">
                <label for="ketetanganProduk">Keterangan</label>
                <input type="text" class="form-control" id="keteranganProduk" name="keterangan">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="hargaProduk">Harga</label>
                <input type="text" class="form-control" id="hargaProduk" name="harga">
            </div>
            <div class="form-group col-md-6">
                <label for="jumlahProduk">Jumlah</label>
                <input type="text" class="form-control" id="jumlahProduk" name="jumlah">
            </div>
        </div>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
              <th scope="col">Nama Produk</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Harga</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <?php
          $sql = "SELECT * FROM produk";
          $query = mysqli_query($db, $sql);

          while($user_data = mysqli_fetch_array($query)){
            echo "<tbody>";
            echo "<tr>";
            echo "<td>".$user_data['nama_produk']."</td>";
            echo "<td>".$user_data['keterangan']."</td>";
            echo "<td>Rp".$user_data['harga']."</td>";
            echo "<td>".$user_data['jumlah']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td>";
            echo "</tr>";
            echo "</tbody>";
          }
          ?>
    </table>
</body>

</html>