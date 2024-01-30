<?php
$bilangan = [75, 77, 87, 70, 90, 81, 69, 87, 66];
$kompeten = [];
$BK= [];

foreach ($bilangan as $nilai) {
    if ($nilai >= 75) {
        $kompeten[] = $nilai;
    } else {
        $BK[] = $nilai;
    }
}

echo "Kamu Kompeten: "."<br>";
print_r($kompeten);
echo "<br>";
echo "Kamu BK: "."<br>";
print_r($BK);
?>
