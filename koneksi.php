<?php
//configurasi 
$hostname = 'localhost'; // server
$username = 'root' ;    //usernaem DB mySql
$password = '';         //password DB
$database = 'library';  //nama DB


//hubungkan ke server
$connect = mysqli_connect ($hostname, $username, $password);
if ($connect == true){
    echo 'Koneksi ke Server MySql Sukses';
} else {
    echo 'Koneksi ke Server MySql Gagal';
}


//Memilih database di server
$select_db = mysqli_select_db ($connect, $database);
if ($select_db == true){
    echo " Database $database telah terpilih";
} else {
    echo "Tidak ditemukan nama database $database";
}
?>