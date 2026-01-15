<?php
// navbar butuh session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Akademik</a>

    <button class="navbar-toggler" type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="/index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/mahasiswa/index.php">Mahasiswa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/prodi/index.php">Prodi</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarProfile"
             role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['user']['nama_lengkap']; ?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
            <li>
              <a class="dropdown-item" href="/auth/profile.php">Edit Profile</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item text-danger" href="/auth/logout.php">Logout</a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
