<?php
session_start();
include '../koneksi.php';

$id    = $_POST['id'];
$nama_lengkap  = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$pass  = mysqli_real_escape_string($koneksi, $_POST['password']); // opsional

if ($pass != "") {
    $query = "UPDATE users SET nama_lengkap='$nama_lengkap', email='$email', password='$pass' WHERE id='$id'";
} else {
    $query = "UPDATE users SET nama_lengkap='$nama_lengkap', email='$email' WHERE id='$id'";
}

mysqli_query($koneksi, $query);

// Update session agar langsung berubah
$_SESSION['user']['nama_lengkap']  = $nama_lengkap;
$_SESSION['user']['email'] = $email;

header("Location: ../index.php");
