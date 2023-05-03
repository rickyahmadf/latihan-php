<?php
for($i = 21; $i<=62; $i++){
    echo "<br> Ini adalah pengulangan ke - " .$i;
    if($i % 2 == 0){
        echo " Ini Bilangan Genap";
    }
    elseif($i % 2 == 1){
        echo " Ini Bilangan Ganjil";
    }
}
?>