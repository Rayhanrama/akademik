<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-success bg-gradient">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg border-0" style="max-width: 420px; width: 100%;">
        <div class="card-body p-4 p-md-5">

            <h2 class="text-center fw-bold mb-1">Buat Akun</h2>
            <p class="text-center text-muted mb-4">
                Isi data dengan benar untuk mendaftar
            </p>

            <form action="register_proses.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" name="nama_lengkap" class="form-control" id="nama_lengkap" placeholder="Nama" required>
                    <label for="nama_lengkap">Nama Lengkap</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                    <label for="email">Email</label>
                </div>

                <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <button type="submit" class="btn btn-success w-100 py-2 fw-semibold">
                    Daftar
                </button>
            </form>

            <div class="text-center mt-3">
                <small class="text-muted">
                    Sudah punya akun? <a href="login.php" class="fw-semibold">Login</a>
                </small>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
