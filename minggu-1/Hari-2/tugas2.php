<?php

$matematika = 57;
$inggris = 55;
$indonesia = 57;
$nilaiMinimum = 85;

$total = $matematika + $inggris + $indonesia;
$rataRata = $total / 3;

if ($rataRata >= 85){
    echo "Anda kompeten: " . $rataRata . "<br>";
}else{
    echo "Anda belum kompeten: " . $rataRata . "<br>";
}

if ($rataRata > $nilaiMinimum){
    echo "Anda lulus: " . $rataRata . "<br>";
}else{
    echo "Anda tidak lulus: " . $rataRata . "<br>";
}

echo "Rata-rata nilai Matematika, Bahasa Inggris, dan Bahasa Indonesia adalah: " . $rataRata;

?>


