<?php
function pembandingNama($nama1, $nama2){
$n1 = strlen($nama1);
$n2  = strlen($nama2);

$selisih = abs ($n1 - $n2);

if($n1 > $n2){
    echo "Nama $nama1 memiliki lebih banyak kata daripada nama $nama2 selisih: $selisih";
} elseif($n1 < $n2){
    echo "Nama $nama2 memiliki lebih banyak kata daripada nama $nama1 selisih: $selisih";
} else {
    echo "Nama $nama1 dan $nama2 memiliki jumlah kata yang sama selisih: $selisih";
}
}

pembandingNama("Fathur","Farhanudin")
?>