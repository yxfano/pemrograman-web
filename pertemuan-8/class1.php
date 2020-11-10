<?php
class Orang {
    //properti
    private $nama;
    private $umur;

    //Constructor
    function Orang() {
        $this->nama = "{Belum diisi}";
        $this->umur = "{Belum diisi}";
    }

    //Method
    function set_nama($n) {
        $this->nama = $n;
    }
    function get_nama() {
        return $this->nama;
    }
    function set_umur($u){
        $this->umur = $u;
    }
    function get_umur() {
        return $this->umur;
    }
}

//Object
$objOrg = new Orang();

//Memanggil object
//$objOrg ->nama = "Andi";
//echo "Nama = ".$objOrg->nama; 
$objOrg->set_nama("Andi");
echo "Nama Lengkap = ".$objOrg->get_nama();
$objOrg->set_umur(20);
echo "<br>Umur = ".$objOrg->get_umur()." tahun";

?>