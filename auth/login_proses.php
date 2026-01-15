<?php
session_start();
include '../koneksi.php';

$email    = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = $_POST['password']; // jangan di-escape

// Ambil user berdasarkan email
$q = mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email'");
$user = mysqli_fetch_assoc($q);

if ($user) {
    // Cocokkan password
    if (password_verify($password, $user['password'])) {

        $_SESSION['login'] = true;
        $_SESSION['user']  = [
            'id'    => $user['id'],
            'nama_lengkap'  => $user['nama_lengkap'],
            'email' => $user['email'],
        ];

        header("Location: ../index.php");
        exit;
    } else {
        echo "<script>alert('Password salah');history.back();</script>";
    }
} else {
    echo "<script>alert('Email tidak ditemukan');history.back();</script>";
}
