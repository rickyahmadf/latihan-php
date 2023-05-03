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
    <title>Detail PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1>Detail Data</h1>

<table class="table" border="1">
    <tr>
        <td>Nama Kategori</td>
        <td>:</td>
        <td><?php echo $data['nama_kategori'] ?></td>
    </tr>

    <tr>
        <td>Keterangan</td>
        <td>:</td>
        <td><?php echo $data['keterangan'] ?></td>
    </tr>

    <tr>
        <td>ID Kategori</td>
        <td>:</td>
        <td><?php echo $data['id_kategori'] ?></td>
    </tr>
</table>

  
</body>
</html>