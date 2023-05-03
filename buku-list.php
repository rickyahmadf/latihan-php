<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<?php
//panggil file koneksi
include "koneksi.php";

// menampilkan data di tabel buku
$sql = "SELECT * FROM buku";

//kirim perintah SQL ke server DB
$query = mysqli_query($connect, $sql);
if ($query == true ){
    ?>
    <a href="buku-tambah.php">Tambah Data</a>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Pengarang</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    $i = 1;
    while ($data = mysqli_fetch_array($query)){
        ?>
    
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td><?php echo $data['judul']?></td>
      <td><?php echo $data ['pengarang']?></td>
      <td>
        
        <a href="buku-edit.php?id=<?php echo $data['no']?>">Edit |</a>
        <a href="buku-hapus.php?id=<?php echo $data['no']?>">Hapus |</a>
        <a href="buku-detail.php?id=<?php echo $data['no']?>">Detail</a>
       
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






