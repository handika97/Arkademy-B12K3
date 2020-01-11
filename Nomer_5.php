<?php

function randomize($Kata)
{ $total=0;
    
    $jumlah=$Kata*2;
   for ($ganjil = 1; $ganjil <= $jumlah; $ganjil++) {
      if ($ganjil % 2 == 1) {
         $hasil[] =  $ganjil;
         }
        }    
    print_r($hasil);
    $total = array_sum($hasil);
    echo"<br>";
    echo 'SUM= '.$total;

}

randomize(2);

?>