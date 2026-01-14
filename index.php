<?php
session_start();

// Jika belum login, arahkan ke halaman login
if (!isset($_SESSION['login'])) {
    header("Location: auth/login.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Home</title>
</head>
<body class="bg-light">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/navbar.php'; ?>

<!-- HERO SECTION -->
<div class="container py-5 text-center">
  <h1 class="fw-bold mb-3">Welcome to Akademik System</h1>
  <p class="text-muted mb-4">
    Sistem manajemen data akademik untuk mengelola mahasiswa, program studi, dan profil pengguna.
  </p>

  <div class="d-flex justify-content-center gap-3">
    <a href="mahasiswa/index.php" class="btn btn-primary btn-lg">
      Data Mahasiswa
    </a>
    <a href="prodi/index.php" class="btn btn-outline-secondary btn-lg">
      Data Prodi
    </a>
  </div>
</div>

<!-- FEATURE CARDS -->
<div class="container mb-5">
  <div class="row g-4 justify-content-center">

    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Mahasiswa</h5>
          <p class="card-text text-muted">
            Kelola data mahasiswa dengan mudah dan terstruktur.
          </p>
          <a href="mahasiswa/index.php" class="btn btn-primary">
            Kelola
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Program Studi</h5>
          <p class="card-text text-muted">
            Manajemen data program studi secara efisien.
          </p>
          <a href="prodi/index.php" class="btn btn-success">
            Kelola
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card h-100 shadow-sm">
        <div class="card-body text-center">
          <h5 class="card-title fw-bold">Profile</h5>
          <p class="card-text text-muted">
            Perbarui informasi akun dan keamanan Anda.
          </p>
          <a href="auth/profile.php" class="btn btn-warning text-white">
            Edit Profile
          </a>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
