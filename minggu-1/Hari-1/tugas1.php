<?php

$angka = 6;

if ($angka > 0){
    echo ''.$angka.' ini adalah bilangan bulat positif';

}elseif($angka < 0){
    echo"$angka ini adalah bilangan bulat negative";

}else{
    echo $angka." ini adalah bilangan pecehan";
}

echo "<br>";

if ($angka % 3 == 0) {
    echo "$angka adalah kelipatan 3.";
} else {
    echo "$angka bukan kelipatan 3.";
}

?>