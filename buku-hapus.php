<?php
include "koneksi.php";

// get ID from url
$id_cat = $_GET['id'];


$sql = " DELETE FROM buku WHERE no = ".$id_cat;

$result = mysqli_query($connect, $sql);
if ($result){
    echo ' Hapus data Berhasil...';

}else{
    echo ' Hapus data gagal...';
}

?>
<br><a href="buku-list.php">Lihat Data</a>