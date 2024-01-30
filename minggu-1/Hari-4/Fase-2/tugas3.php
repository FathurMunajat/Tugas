<?php
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 5,
    ],
];
$total = 0;

echo "<ol>";
foreach ($barang as $buy){
    echo "<li>".$buy['nama_barang']." = "
    .($buy['harga_barang'] * $buy['jumlah_beli']).
    "</li>";

    $total += $buy['harga_barang'] * $buy['jumlah_beli'];
}
echo "</ol>";
echo "Total yang harus andi bayar = " .$total;
?>
