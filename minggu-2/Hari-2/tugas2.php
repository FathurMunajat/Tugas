
<?php

function rupiah($number) {
    $matauang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500];
    $hasil = [];

    foreach ($matauang as $Rp) {
        $count = floor($number / $Rp);
        if ($count > 0) {
            $hasil[] = [
                'Rupi' => $Rp,
                'count' => $count
            ];
            $number %= $count * $Rp;
        }
    }

    return $hasil;
}

$hasil = rupiah(150500);

foreach ($hasil as $item) {
    echo "Rp. " . number_format($item['Rupi'], 0, '.', '.') . " = " . $item['count'] ." " . "<br>" . "\n";
}
?>
