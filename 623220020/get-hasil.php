<h1>HASIL KIRIMAN DARI FORM</h1>

<?php
    echo "Nama anda adalah ".$_GET['nama'];
    echo "<br>Saldo anda sebelumnya ".$_GET['saldo'];
    echo "<br>Setoran anda adalah ".$_GET['setoran'];
   
    $saldo_akhir = ($_GET['saldo'] + $_GET['setoran']);
    echo "<br> Saldo Akhir anda adalah ".$saldo_akhir;
?>
