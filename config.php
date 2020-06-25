<?php
    $databaseHost = "localhost";
    $databaseName = "arkademy";
    $databaseUsername = "root";
    $databasePassword = "12345678";

    $db = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }
?>