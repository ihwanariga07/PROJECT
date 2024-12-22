<?php
include_once ("ceklogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<?php 
    include_once('navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
            <div class="card-header text-center">
                <h3>Sistem Informasi Mahasiswa</h3>
            </div>
            <div class="card-body">
                <h4>Selamat Datang, Administrator</h4>
                
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Kata-Kata Hari Ini</label>
                    <input type="text"  class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<script>
  function confirmLogout(event) {
    // Cegah aksi default dari link
    event.preventDefault();
    
    // Tampilkan dialog konfirmasi
    const userConfirmed = confirm("Anda yakin ingin keluar?");
    
    // Jika pengguna mengonfirmasi, arahkan ke halaman logout
    if (userConfirmed) {
      window.location.href = event.target.href;
    }
  }
</script>


    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>