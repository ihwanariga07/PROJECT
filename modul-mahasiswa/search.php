<?php
include('../koneksi.php');
include_once('../navbar.php');
$query = isset($_GET['query']) ? $_GET['query'] : '';
$sql = "SELECT *, mahasiswas.nama as nm_mhs, dosens.nama as nm_dos 
        FROM mahasiswas 
        INNER JOIN jurusans ON mahasiswas.jurusans_id = jurusans.id
        INNER JOIN dosens ON mahasiswas.dosens_id = dosens.id
        WHERE mahasiswas.nim LIKE '%$query%'
        OR mahasiswas.nama LIKE '%$query%'
        OR jurusans.jurusan LIKE '%$query%'
        OR dosens.nama LIKE '%$query%'";

$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
</head>
<body>
<div class="container mt-5">
    <h3>Hasil Pencarian untuk: "<?= htmlspecialchars($query) ?>"</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Jurusan</th>
                <th>Dosen Wali</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
                $nomor = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?= $nomor++ ?></td>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['nm_mhs'] ?></td>
                        <td><?= $data['jns_kel'] == 'L' ? 'Laki-Laki' : 'Perempuan' ?></td>
                        <td><?= $data['jurusan'] ?></td>
                        <td><?= $data['nm_dos'] ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data ditemukan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
<script src="../js/bootstrap.js"></script>
</body>
</html>