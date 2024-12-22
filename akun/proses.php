<?php
// Koneksi ke database
include("../koneksi.php");

// Ambil data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// Validasi input
if (empty($username) || empty($password) || empty($email)) {
    die("Error: Semua field harus diisi!");
}

// Cek apakah username sudah ada di database
$cek_user = mysqli_query($koneksi, "SELECT * FROM users WHERE username = '$username'");
if (mysqli_num_rows($cek_user) > 0) {
    die("Error: Username sudah terdaftar! Gunakan username yang berbeda.");
}

// Enkripsi password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Query untuk menyimpan data ke tabel users
$query = "INSERT INTO users (username, password, email) VALUES ('$username', '$hashed_password', '$email')";

// Jalankan query
$proses = mysqli_query($koneksi, $query);
if ($proses) {
    echo "<script>alert('Akun berhasil ditambahkan!');</script>";
    echo "<script>document.location='index.php';</script>";
} else {
    die("Error saat menyimpan data: " . mysqli_error($koneksi));
}
?>
