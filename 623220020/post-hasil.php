<h1>HASIL KIRIMAN DARI FORM</h1>

<?php
    echo "Nama anda adalah ".$_POST['nama'];
    echo "<br>Umur anda adalah ".$_POST['umur'];

    //mengolah data
    $umur = $_POST['umur'];
    if($umur > 40){
        echo "<br> anda sudah tuir";
    } else {
        echo "<br>Anda muda dan perjaka";
    }
?>
