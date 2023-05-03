<?php
// panggil fungsi session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Utama</title>
</head>
<body>
   <?php
    // cek session
    if (isset ($_SESSION['nama']) != NULL){
        echo "Hai ".$_SESSION['nama']." ". $_SESSION['alamat'].", Login Successful";
    } else {
        echo "Acces denied, please login first";
    }
?>
  <hr>
<a href="menu.php">Kembali ke menu utama</a>


</body>
</html>


