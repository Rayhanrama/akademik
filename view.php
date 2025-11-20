<?php 
require ('koneksi.php');
$sql = "SELECT * FROM tamu where id=$_GET[id]";
$result = $koneksi->query($sql);
$edit = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Tamu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
      <h1>View Buku Tamu</h1>
    <form method="post" action="gbproses.php">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama" disabled value="<?= $edit['nama']; ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" disabled value="<?=  $edit['email']; ?>" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="komentar" class="form-label">Komentar</label>
    <textarea class="form-control" name="komentar"  id="komentar" disabled><?= $edit['komentar']; ?></textarea>
  </div>
   <div class="mb-3">
        <label for="nama" class="form-label">Waktu</label>
         <input type="text" name="nama" value="<?= $edit['date_created']; ?>" disabled class="form-control" id="nama" aria-describedby="emailHelp">
    </div>
    <a href="index.php" class="btn btn-primary">Kembali</a>
</form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>