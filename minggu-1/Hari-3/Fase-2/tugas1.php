<?php

$waktu = "24.00";

$jam = substr($waktu, 0, 2);
$menit = substr($waktu, 3, 2);

$jamp = ($jam < 12) ? 'AM' : 'PM';

$jam = ($jam > 12) ? $jam - 12 : $jam;

$hasil = "$jam:$menit $jamp";

echo "$hasil";

?>
  