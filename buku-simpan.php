<?php
include "koneksi.php";

// ambil data dari form
$nama = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$tahun = $_POST['tahun'];

//perintah Query untuk simpan data

$sql = "INSERT INTO
                buku (judul, pengarang, tahun)
        VALUES ('$nama', '$pengarang', '$tahun')";

$query = mysqli_query($connect, $sql);
if ($query){
    echo 'Simpan data berhasil...';
} else {
    echo 'Simpan data Gagal...';
}
?>
<br><a href="buku-list.php">Lihat Data</a>