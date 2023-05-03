
<?php
// cara penulisan array cara 1
$buah = array ('jeruk', 'apel', 'Mangga');
var_dump($buah);
echo "<pre>";
print_r ($buah);
echo "</pre>";

//cara ke 2
$mobil = ['Ertiga', 'Toyota', 'Honda'];
echo "<pre>";
print_r($mobil);
echo "</pre>";

//cara ke 3
$motor[]= "Yamaha";
$motor[]= "Suzuki";
$motor[]= "Honda";
echo "<pre>";
print_r ($motor);
echo "</pre>";

//array bertipe asosiatif
$nilai = [
    'deni' => 100,
    'Albani' => 90,
    'Kyla' => 92,
    'ISmi'=> 80, 
];

echo "<pre>";
print_r ($nilai);
echo "</pre>";
echo $nilai ['Kyla']; //akses array nilai kyla


//array multidimensi
$kurir =[
    'pos' =>[
        'kilat' => 'paket kilat',
        'nextday' => 'paket sehari sampai',
        'reg' => ['5000', '10.000', '15.000'],
    ],
    'jne' => 'JNE',
    'sicepat' => 'SICEPAT',
    'jnt' => 'JNT',
];

echo "<pre>";
print_r($kurir);
echo "</pre>";
echo $kurir['pos']['reg'][1];






?>

