<?php
$hari = date('l');

$pesan = ($hari == 'Monday') ? 'Hari ini upacara' : 'Hari ini tidak upacara';

echo $pesan;
?>
