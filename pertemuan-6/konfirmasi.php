<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Konfirmasi Pendaftaran</title>
</head>
<body>
<?php
    include_once "koneksi.php";
    if (isset($_POST['tombolSubmit'])) {
        $namaDepan = $_POST['namadepan'];
        $namaBelakang = $_POST['namabelakang'];
        $email = $_POST['email'];

        $sql = "INSERT INTO input (namaDepan, namaBelakang, email)
        VALUES ('$namaDepan','$namaBelakang','$email')";

        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil diinput";
        }
        else {
            echo "Data tidak berhasil diinput pada string sql: <br>
            $sql <br> dg error: ".mysqli_error($conn);
        }
   }
   else{
    echo "Mohon maaf konfirmasi tidak bs diakses langsung";
   }
?>
</body>
</html>