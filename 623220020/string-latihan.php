<?php
$kalimat = " Saya makan bubur setiap pagi hari jam 6.30 di Sarijadi";
$sub_kalimat = substr ($kalimat,-20,20);
$sub_kalimat1 = substr ($kalimat,0,17);

echo $sub_kalimat;
echo $sub_kalimat1;
?>

<?php
//menampilkan current date time
date_default_timezone_set("Asia/Jakarta");

$hari = date ('N');
$bulan = date ('m');

$array_hari = array('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
$array_bulan = array(
    '01'=>'Januari',
    '02'=>'Februari',
    '03'=>'Maret',
    '04'=>'April',
    '05'=>'Mei',
    '06'=>'Juni',
    '07'=>'Juli',
    '08'=>'Agustus',
    '09'=>'September',
    '10'=>'Oktober',
    '11'=>'November',
    '12'=>'Desember');

echo "<br>";
echo $array_hari[$hari];
echo "<br>";
echo $array_bulan[$bulan];
echo "<br>";

//senin, 25 Januari 2010, jam 12.00
echo "Hari ini: ".$array_hari[$hari].", ".date('d')." ".$array_bulan[$bulan]." ".date('Y').", Jam ". date('H:i');


?>






