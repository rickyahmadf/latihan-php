<?php
include "koneksi.php";

// ambil data dari form
$nama = $_POST['nama'];
$ket = $_POST['keterangan'];

//perintah Query untuk simpan data

$sql = "INSERT INTO
                kategori (nama_kategori, keterangan)
        VALUES ('$nama', '$ket')";

$query = mysqli_query($connect, $sql);
if ($query){
    echo 'Simpan data berhasil...';
} else {
    echo 'Simpan data Gagal...';
}
?>
<br><a href="kategori-list.php">Lihat Data</a>