<?php
$tahunkel= 2010;
$tahunsekarang= date("Y");
$ktp = $tahunsekarang - $tahunkel;

if($ktp >= 17 ){
    echo "maka kalau lahir tahun $tahunkel sudah mendapatkan ktp berarti dia berumur $ktp";
}else{
    echo "maka kalau lahir tahun $tahunkel belum memiliki ktp";
}

?>