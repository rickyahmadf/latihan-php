<?php
//membuat array
$array_buah = array('Mangga','Jeruk', 'Apel', 'Kiwi');

foreach ($array_buah as $urutan => $nilai) {
    echo "<br>Urutan index ke-" .$urutan . " nilainya adalah ".$nilai;
}
?>