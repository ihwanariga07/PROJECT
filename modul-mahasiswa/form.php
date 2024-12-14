<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Data Mahasiswa</h3>
                
            </div>
            <div class="card-body">
            <form action="proses.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nim</label>
                    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tempat Lahir</label>
                    <input type="text" name="tmp_lahir" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Lahir</label>
                    <input type="text" name="tgl_lahir" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <br>
                <input type="radio" name="jns_kel" value="L" class="" id="exampleInputPassword">Laki-Laki
                <input type="radio" name="jns_kel" value="P" class="" id="exampleInputPassword">Perempuan
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jurusan</label>
                    <input type="text" name="jurusans_id" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Dosen Wali</label>
                    <input type="text" name="dosens_id" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                    <input type="file" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
                
                <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">
                <a href="/PROJECT/modul-mahasiswa/index.php">Batal</button>
                
            </form>
          
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>