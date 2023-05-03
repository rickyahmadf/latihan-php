<?php
include "koneksi.php";

// Get parameter ID
$id_kategori = $_GET['id'];
$sql = "SELECT * FROM kategori WHERE id_kategori = $id_kategori";
$query = mysqli_query($connect, $sql);
$data = mysqli_fetch_array($query);



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<html>
  <head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h4>Ubah Data</h4>
      <form method="post" action="kategori-simpan-ubah.php">
        <div class="form-group">
          <label>Nama kategori</label>
          <input type="text" class="form-control" name="nama" value=" <?php echo $data['nama_kategori']?> " >
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <input type="text" class="form-control" name="keterangan" value=" <?php echo $data['keterangan']?> ">
        </div>

        <input type="hidden" name="id_kategori" value=" <?php echo $data['id_kategori']?> ">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </body>
</html>
</body>
</html>