<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah PHP</title>
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
      <h4>Tambah Data</h4>
      <form method="post" action="buku-simpan.php">
        <div class="form-group">
          <label>Judul Buku</label>
          <input type="text" class="form-control" name="judul">
        </div>

        <div class="form-group">
          <label>Pengarang</label>
          <input type="text" class="form-control" name="pengarang">
        </div>

        <div class="form-group">
          <label>Tahun</label>
          <input type="text" class="form-control" name="tahun">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>
</html>
</body>
</html>