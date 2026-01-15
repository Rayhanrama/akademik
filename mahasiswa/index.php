<?php 
    session_start();
    if (!isset($_SESSION['login'])) {
        header("Location: ../auth/login.php");
        exit;
    }
    require ('../koneksi.php');
    $query = "SELECT mahasiswa.*, prodi.nama_prodi 
              FROM mahasiswa 
              JOIN prodi ON mahasiswa.prodi_id = prodi.id";
    $sql = $koneksi->query($query);
    $no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Mahasiswa</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/navbar.php'; ?>
    <div class="container mt-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h1 class="m-0">List Data Mahasiswa</h1>
            <a href="create.php" class="fs-3 text-primary">
                <i class="bi bi-plus-square"></i>
            </a>
        </div>
     
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Prodi</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($sql as $row): ?>
                <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['nama_mhs']; ?></td>
                <td><?= $row['tgl_lahir']; ?></td>
                <td><?= $row['alamat']; ?></td>
                <td><?= $row['nama_prodi']; ?></td>
                <td>
                    <a href="gbproses.php?nim=<?= $row['nim']; ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin ingin menghapus data?');">
                    Hapus
                    </a>

                    <a href="edit.php?nim=<?= $row['nim']; ?>"
                    class="btn btn-warning btn-sm">
                    Edit
                    </a>

                    <a href="view.php?nim=<?= $row['nim']; ?>"
                    class="btn btn-success btn-sm">
                    View
                    </a>
                </td>

                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>