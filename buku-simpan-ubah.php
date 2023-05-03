<?php 
include "koneksi.php";

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];
$no = $_POST['no'];

$sql= " UPDATE buku SET
            judul = '$judul',
            pengarang = '$pengarang',
            tahun = '$tahun'
        WHERE no =' $no'
         ";


$query = mysqli_query($connect, $sql);
if ($query){
    echo ' Simpan data berhasil...';
} else {
    echo ' Simpan data Gagal...';
}
?>
<br><a href="buku-list.php">Lihat Data</a>
