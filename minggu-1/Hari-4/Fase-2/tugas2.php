<?php
$data = [
    [
        'nama' => 'Andi',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dani',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];
foreach ($data as $siswa){
    $nama = $siswa['nama'];
    $tahun = $siswa['tahun'];

    if(($tahun % 4 == 0)){
        echo $nama . ": kamu lahir pada tahun kabisat (" . $tahun . ")
        <br>";
    }else{
        echo $nama . ": kamu lahir tidak pada tahun kabisat (". $tahun . ")
        <br>"; 
    }
}

?>