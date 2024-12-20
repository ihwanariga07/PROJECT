<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jns_kel']; // Perbaiki dari 'jns_kel' ke 'jk'
$jur = $_POST['jur'];
$dos = $_POST['dos'];

$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

# Mapping data jenis kelamin
if ($jk == "L") {
    $jk = "Laki-Laki";
} elseif ($jk == "P") {
    $jk = "Perempuan";
}

# Validasi input (opsional, tambahkan sesuai kebutuhan)
if (empty($nim) || empty($nama) || empty($tempat) || empty($tanggal) || empty($alamat) || empty($email) || empty($jk) || empty($jur) || empty($dos)) {
    echo "Semua field harus diisi!";
    exit;
}

if (empty($nama_foto)) {
    echo "Foto harus diunggah!";
    exit;
}

#3. Proses Upload File
if (!file_exists('foto')) {
    mkdir('foto', 0777, true); // Pastikan folder 'foto/' ada
}

if (move_uploaded_file($tmp_foto, "foto/$nama_foto")) {
    #4. menulis query
    $simpan = "INSERT INTO mahasiswas (nim, nama, tmp_lahir, tgl_lahir, alamat, email, jns_kel, jurusans_id, dosens_id, foto) 
               VALUES ('$nim', '$nama', '$tempat', '$tanggal', '$alamat', '$email', '$jk', '$jur', '$dos', '$nama_foto')";

    #4.1. jalankan query
    $proses = mysqli_query($koneksi, $simpan);

    #5. mengalihkan halaman jika berhasil
    if ($proses) {
        echo "<script>alert('Data berhasil disimpan!');</script>";
        echo "<script>document.location='index.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
} else {
    echo "Gagal mengunggah foto.";
}
?>
