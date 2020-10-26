<!DOCTYPE html>
<html>
<body>
<?php     
    if (isset($_POST['tombolSubmit'])) {
        include_once "koneksi.php"; 
        $namaDepan = $_POST['namadepan'];
        $namaBelakang = $_POST['namabelakang'];
        $email = $_POST['email'];       
    }            
    ?>
<h2>HTML Forms</h2>

<form action="koneksi.php">
  <label for="fname">Nama Depan:</label><br>
  <input type="text" id="namadepan"><br>
  <label for="lname">Nama Belakang:</label><br>
  <input type="text" id="namabelakang"><br><br>
  <label for="lname">Email:</label><br>
  <input type="text" id="email"><br><br>
  <input type="button" id="tombol" value="Submit">
</form> 

</body>
</html>