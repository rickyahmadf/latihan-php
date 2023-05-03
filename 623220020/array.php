<?php
//membuat array
$array_buah = array('Mangga',5=> 'Jeruk', 'Apel', 'Kiwi');

//menampilkan array
echo $array_buah[1];
echo "<pre>";
print_r($array_buah);
echo "</pre>";
foreach ($array_buah as $urutan => $nilai) {
    echo "<br>Urutan index ke-" .$urutan . " nilainya adalah ".$nilai;
}
?>

<pre>
    Saya belajar php
    jam segini ngantuk 
    iya betul pack
</pre>

<?php
$array_nama = array(
    "Ayu"=>45",
    "Budi"=>60",
    "Arau"=>70",
    
);

echo $array_nama(Ayu);
?>