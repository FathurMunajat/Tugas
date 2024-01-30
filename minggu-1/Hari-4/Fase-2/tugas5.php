<?php
$bil1 = array(80, 77, 65, 89, 55, 12, 90, 86);
$bil2 = array(77, 99, 55, 81, 45, 90, 91, 98);

$bilangan = array_merge($bil1, $bil2);

rsort($bilangan);

echo "Hasil bilangan yang sudah di urutkan dari bilangan terbesar hingga bilangan terkecil: ";
echo "<br >";
 foreach ($bilangan as $value){
    echo $value .  ",";
 }
?>