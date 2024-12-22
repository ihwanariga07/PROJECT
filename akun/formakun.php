<?php
include("../PROJECT/akun/login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Akun</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Form Tambah Akun</h3>
                </div>
                <div class="card-body">
                    <form action="proses_tambah_akun.php" method="post">
                       
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Tambah Akun</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../js/bootstrap.js"></script>
</body>
</html>
