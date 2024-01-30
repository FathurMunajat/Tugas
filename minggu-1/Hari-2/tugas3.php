<?php

$totalbelanjaAndi = 90000;
$potonganHarga = 0;

if ($totalbelanjaAndi >= 100000) {
    $potonganHarga = 10000;
}

$totalBayar = $totalbelanjaAndi - $potonganHarga;

echo "Andi berbelanja sebesar: " . $totalbelanjaAndi . "<br>";
echo "Potongan harga yang didapatkan: " . $potonganHarga . "<br>";
echo "Total yang harus dibayar Andi: " . $totalBayar . "<br>";

?>
