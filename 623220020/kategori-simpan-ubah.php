<?php 
include "koneksi.php";

$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$id_kategori = $_POST['id_kategori'];

$sql= " UPDATE kategori SET
            nama_kategori = '$nama',
            keterangan = '$ket'
        WHERE id_kategori =' $id_kategori'
         ";


$query = mysqli_query($connect, $sql);
if ($query){
    echo ' Simpan data berhasil...';
} else {
    echo ' Simpan data Gagal...';
}
?>
<br><a href="kategori-list.php">Lihat Data</a>
