<?php
include "koneksi.php";

// get ID from url
$id_cat = $_GET['id'];


$sql = " DELETE FROM kategori WHERE id_kategori = ".$id_cat;

$result = mysqli_query($connect, $sql);
if ($result){
    echo 'Hapus data Berhasil...';

}else{
    echo 'Hapus data gagal...';
}

?>
<br><a href="kategori-list.php">Lihat Data</a>