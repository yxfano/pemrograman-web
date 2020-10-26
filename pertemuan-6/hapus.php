<?php
    include 'koneksi.php';
    if (isset($_GET["kodemk"])) {
        $kodemk   = $_GET['kodemk'];
        // query SQL untuk insert data
        $strsql="DELETE from matakuliah where kodemk='".$kodemk."'";
        $runSQL = mysqli_query($conn, $strsql);       
        if ($runSQL) {
            $status = 1; //sukses
        }  
        else {
            $status = 0; //tidak sukses;
        }  
    }else {
        echo "Gagal";
    }
    header("location:listmatakuliah.php");
?>