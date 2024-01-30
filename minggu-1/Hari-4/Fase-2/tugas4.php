<?php
$bil1 = array(80, 77, 65, 89, 55, 12, 90, 86);
$bil2 = array(77, 99, 55, 81, 45, 90, 91, 98);

$sama = array_intersect($bil1, $bil2);

$nggak_sama= array_diff($bil1, $bil2);


echo "Kelompok bilangan yang sama: ";
foreach($sama as $value) {
    echo $value . ",";
}
echo"<br>";
echo "\nKelompok bilangan tidak sama: ";
foreach($nggak_sama as $value) {
    echo $value . ",";
}
?>

