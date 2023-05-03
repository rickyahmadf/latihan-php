<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
//panggil file koneksi
include "koneksi.php";

// menampilkan data di tabel kategori
$sql = "SELECT * FROM kategori";

//kirim perintah SQL ke server DB
$query = mysqli_query($connect, $sql);
if ($query == true ){
    ?>
    <a href="tambah.php">Tambah Data</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Aksi</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    $i = 1;
    while ($data = mysqli_fetch_array($query)){
        ?>
    
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $data['nama_kategori']?></td>
      <td><?php echo $data ['keterangan']?></td>
      <td>
        
        <a href="kategori-edit.php?id=<?php echo $data['id_kategori']?>">Edit |</a>
        <a href="kategori-hapus.php?id=<?php echo $data['id_kategori']?>">Hapus |</a>
        <a href="kategori-detail.php?id=<?php echo $data['id_kategori']?>">Detail</a>
       
      </td>
    </tr>
    
    <?php
    $i++;
    }
    ?>
    </tbody>
    </table>

    <?php
    } else {
        echo "Query Gagal";
    }
    

?>
</body>
</html>






