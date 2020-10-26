<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Data Mahasiswa</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <?php   
        include_once "header.php";
        $status = 2;  
        if (isset($_POST['nim'])) {
            include_once "koneksi.php"; 
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];

            //buat koneksi
            $strsql = "INSERT INTO datamahasiswa (nim, nama) 
            VALUES ('$nim','$nama')";
            
            $runSQL = mysqli_query($conn,$strsql);        
            if ($runSQL) {
                $status = 1; //sukses
            }  
            else {
                $status = 0; //tidak sukses;
            }       
        }            
    ?>
    <div class="container">
        <h2>Registrasi Data Mahasiswa</h2>   
        <!-- Ini Modal -->
        <div class="modal" id="pesan">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- ini header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Konfirmasi Registrasi</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-6"><b>NIM</b></div>
                                <div class="col-6"><span id="nm"></span></div>
                            </div>
                            <div class="row">
                                <div class="col-6"><b>Nama Mahasiswa</b></div>
                                <div class="col-6"><span id="nma"></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Edit</button>
                        <button id="proses" type="button" class="btn btn-primary" data-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- ini end modal -->
        <?php 
            if ($status == 1) {
        ?>    
        <div class="alert alert-success alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data berhasil diinput ke dalam database.
        </div>
        <?php 
            }
            else if ($status == 0){
        ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Data tidak berhasil diinput ke dalam database.
        </div>
        <?php 
            }
        ?>
        <form id="myform" method="post" class="was-validated"action="registrasi.php">
            <div class="form-group">
                <label>NIM</label>
                <input id="nim" class="form-control" type="text" name="nim" required>
            </div>
            <div class="form-group">
                <label>Nama Mahasiswa</label>
                <input id="nama" class="form-control" type="text" name="nama" required>
            </div>          
            <input class="btn btn-primary" type="button" id="tombol" value="Simpan">   
        </form>
    </div>
    <?php 
        include_once "footer.php";
    ?>
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function() {
        $('#proses').click(function(){
            $('#myform').submit();
        });
        $('#tombol').click(function(){
            //ambil data dari form
            const nim = $('#nim').val();
            const nama = $('#nama').val();

            $('#nm').text(nim);
            $('#nma').text(nama);
         
            //buka modal
            $('#pesan').modal({
                show: true
            });
        });
    });
    </script>
</body>
</html>