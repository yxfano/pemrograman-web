<?php
    $namaServer = "localhost";
    $username = "root";
    $password = "";
    $namaDB = "weblanjut";

    //membuat koneksi
    $conn = mysqli_connect($namaServer, $username, $password, $namaDB);
    //check connection
    if(!$conn){
        die("Koneksi Gagal");
    }
?>