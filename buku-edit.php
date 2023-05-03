<?php
include "koneksi.php";

// Get parameter ID
$no = $_GET['id'];
$sql = "SELECT * FROM buku WHERE no = $no";
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

    <div class="container">
      <h4>Ubah Data</h4>
      <form method="post" action="buku-simpan-ubah.php">
        <div class="form-group">
          <label>Judul</label>
          <input type="text" class="form-control" name="judul" value=" <?php echo $data['judul']?> " >
        </div>

        <div class="form-group">
          <label>Pengarang</label>
          <input type="text" class="form-control" name="pengarang" value=" <?php echo $data['pengarang']?> ">
        </div>

        <div class="form-group">
          <label>Tahun</label>
          <input type="text" class="form-control" name="tahun" value=" <?php echo $data['tahun']?> ">
        </div>

        <input type="hidden" name="no" value=" <?php echo $data['no']?> ">
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>
    </div>
  </body>
</html>
</body>
</html>