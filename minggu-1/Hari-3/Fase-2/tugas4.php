<?php

$stuasi= "izin";

$presentase = ($stuasi == 'sakit' || $stuasi == 'izin') ? 100 - 3 :
              (($stuasi == 'alfa') ? 100 - 5 : 100);
              echo $presentase;
?>