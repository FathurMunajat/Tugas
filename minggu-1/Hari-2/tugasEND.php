<?php

$budgetharian = 100000;
$totalharga = 140000;
$diskon = 0;
$tanggal = date("l-m-Y");
$hari = date("l");

if ($hari == "Tuesday") {
    $diskon = 5;
    if ($totalharga > 100000) {
        $diskon = 7 + 5;
    }
} else {
    $diskon = 5;
}

$totalharga *= ((100 - $diskon) / 100);

echo "Tanggal : $tanggal";
echo "<br>";
echo "Total Harga sebelum diskon : $budgetharian";
echo "<br>";
echo "Diskon : $diskon %";
echo "<br>";
echo "Total Harga setelah diskon : $totalharga";

?>
