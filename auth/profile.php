<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../index.php");
    exit;
}

include '../koneksi.php';
$id = $_SESSION['user']['id'];

// Ambil data user
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'"));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <!-- Bootstrap 5 CSS -->
    <!-- Bootstrap 5 CSS via CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/navbar.php'; ?>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-sm" style="width: 100%; max-width: 500px;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4">Edit Profile</h3>

            <form action="profile_proses.php" method="POST">
                <input type="hidden" name="id" value="<?= $data['id']; ?>">

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama_lengkap" class="form-control" value="<?= $data['nama_lengkap']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>" readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password Baru (opsional)</label>
                    <input type="password" name="password" class="form-control" placeholder="Kosongkan jika tidak ingin diubah">
                </div>

                <button type="submit" class="btn btn-primary w-100">Update Profile</button>
                <a href="../index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
                <a href="logout.php" class="btn btn-danger w-100 mt-2">Logout</a>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
