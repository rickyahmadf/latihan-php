<?php
$musim = "semi";
    if ($musim == "hujan"){
        echo "Ini Musim Hujan";
    }
    else{
        echo "Ini bukan musim Hujan";
    }

//if bercabang
echo "<br>";
if ($musim == "hujan"){
    echo "Ini Musim Hujan";
}
elseif($musim == "gugur"){
    echo "Ini musim gugur";
}
elseif($musim == "semi"){
    echo "Ini musim semi";
}
else{
    echo "Ini bukan Musim Hujan";
}








?>