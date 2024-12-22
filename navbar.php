<nav class="navbar navbar-expand-lg bg-info-subtle">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/PROJECT/logo/internet.png" alt="Brand Logo" type="image" width="50" height="50">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PROJECT/index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PROJECT/modul-mahasiswa">Data Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PROJECT/modul-jurusan/index.php">Data Jurusan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/PROJECT/modul-dosen/index.php">Data Dosen</a>
        </li>
      </ul>
      <form class="d-flex mx-auto me-50" role="search" style="width: 50%;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <a 
        class="btn btn-danger nav-link text-black" 
        href="/PROJECT/logout.php" 
        onclick="return confirmLogout(event);"
      >Logout</a>
    </div>
  </div>
</nav>

<!-- CSS -->
<style>
  /* Hover effect untuk tombol navbar (Hanya warna teks) */
  .navbar-nav .nav-item .nav-link:hover {
    color: #007bff;  /* Mengubah warna teks menjadi biru saat hover */
    text-decoration: underline;  /* Optional: menambahkan garis bawah untuk menonjolkan hover */
    transition: color 0.3s ease; /* Transisi halus pada warna teks */
  }

  /* Hover effect untuk tombol Logout (Hanya warna teks) */
  .btn-danger:hover {
    color: #d9534f;  /* Mengubah warna teks menjadi merah saat hover */
    text-decoration: underline;  /* Optional: menambahkan garis bawah untuk menonjolkan hover */
    transition: color 0.3s ease; /* Transisi halus pada warna teks */
  }
</style>
