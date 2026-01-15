<?php
include '../koneksi.php';

$nama_lengkap  = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);

// HASH PASSWORD
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// cek email
$cek = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
if (mysqli_num_rows($cek) > 0) {
    echo "<script>alert('Email sudah terdaftar!');history.back();</script>";
    exit;
}

// simpan ke DB
$query = "INSERT INTO users (nama_lengkap, email, password)
          VALUES ('$nama_lengkap','$email','$password')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Registrasi berhasil! Silahkan login.');window.location='login.php';</script>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
