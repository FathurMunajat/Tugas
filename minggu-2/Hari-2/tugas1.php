<?php
function createArray(...$jurusan){
    $txt = "";
        $jurusan = array_map ('strtoupper',$jurusan);
        $unik = array_unique($jurusan);
        foreach($unik as $Pkapital){
        $txt .= "$Pkapital \n";
        }
  echo $txt;
}

createArray("PPLG","HTL","KLN","PMN","pplg","htl");
?>

