<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Anggota</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<?php
        if (isset($_POST['tombolSubmit'])){
            include_once "koneksi.php";
            $kodemk = $_POST['kodemk'];
            $namamk = $_POST['namamk'];
            $kategori = $_POST['kategori'];
            $sks = $_POST['sks'];

            //buat koneksi
            $strsql = "INSERT INTO matakuliah (kodemk, namamk, kategori, sks )
            VALUES ('$kodemk','$namamk','$kategori','$sks'";

            $runSQL = mysqli_query($conn, $strsql);
            if ($runSQL){
                $status = 1;//sukses
            }
            else {
                $status = 0;//tidak suskses
            }
        }

    ?>

<div class="container">
    <h2>Pendaftaran Mata kuliah</h2>
    <?php
    if ($runSQL == true){
    ?>
    <div class="alert alert-success fade show">
        <button type="button" class="close" data-dismiss="">
        Data Berhasil Di Input Ke dalam database
    <?php
    }
    else{
    ?>
    <div class="alert alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="">
        Data Tidak Berhasil Di Input Ke dalam database
    <?php
    }

    ?>
    <form method="post" action="registrasi_mk.php">
        <div class="form-group">
            <label>Kode</label>
            <input class="form-control" type="text" name="kodemk">
        </div>
        <div class="form-group">
            <label>Nama Mata Kuliah</label>
            <input class="form-control" type="text" name="namamk">
        </div>
        <div class="form-group">
            <label>Kategori Mata kuliah</label>
            <select name="kategori" class="form-control">
                <option value="pilih">Pilih</option>
                <option value="MKMA">Mata Kuliah Major</option>
                <option value="MKMI">Mata kuliah Minor</option>
                <option value="MKPIL">Mata kuliah Pilihan</option>
            </select>
        </div>
        <div class="form-group">
            <label>SKS/label>
            <input class="form-control" type="text" name="sks">
        </div>
        <input type="submit" name="tombolSubmit" value="Simpan">
        </div>
    </form>
    

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>