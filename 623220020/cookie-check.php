<?php
// set cookie
if (isset ($_COOKIE['nama']) != NULL) {
    echo " Hai ".$_COOKIE['nama'].$_COOKIE['alamat'];
    echo "<br> Anda sedang login sekarang...";
} else {
    echo "Waktu login Anda habis, silahkan login lagi";
    header('Location:cookie-create.php');
}




?>