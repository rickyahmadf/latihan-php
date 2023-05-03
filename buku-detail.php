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
    <title>Detail PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h4>Detail Data</h4>

<table class="table" border="1">
    <tr>
        <td>Judul</td>
        <td>:</td>
        <td><?php echo $data['judul'] ?></td>
    </tr>

    <tr>
        <td>Pengarang</td>
        <td>:</td>
        <td><?php echo $data['pengarang'] ?></td>
    </tr>

    <tr>
        <td>Tahun</td>
        <td>:</td>
        <td><?php echo $data['tahun'] ?></td>
    </tr>
</table>

  
</body>
</html>