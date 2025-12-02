<?php
    include ("koneksi.php");
?>


<?php
// create 
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];
    $sql = "INSERT INTO tamu(nama,email,komentar) VALUES ('$nama','$email','$komentar')";

    $query = $koneksi->query($sql);
    header("Location: index.php");
    exit();
}
?>

<?php 
// edit

if (isset($_POST['update'])) {
    // Ambil data dari POST, bukan GET
    $id = intval($_POST['id']);
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $sql = "UPDATE tamu 
            SET nama='$nama', 
                email='$email', 
                komentar='$komentar' 
            WHERE id=$id";

    $query = $koneksi->query($sql);

    if ($query) {
        header("Location: index.php");
        exit();
    } else {
        echo "Maaf, data gagal diubah: " . $koneksi->error;
    }
}
?>

<?php 
    $sql = "DELETE FROM tamu where id=$_GET[id]";
    $hapus = $koneksi->query($sql);
    if($hapus){
        header("Location: index.php");
        exit();
    }else{
        echo "Gagal menghapus data";
    }
?>


