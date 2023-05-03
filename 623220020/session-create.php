<?php
//panggil fungsi session
session_start();



//set session
$_SESSION['nama'] = "Ricky Ahmad";
$_SESSION['alamat'] = "Majalengka";
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
    <h1>Menu Utama</h1>
    Sessiom telah dibuat....<br>
    <a href="menu.php">Kembali ke menu utama</a>
        
    
</body>
</html>
