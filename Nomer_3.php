<?php

function kataku($Kata,$a)
{

    $array = array( '1', '2', '3', '4', '5' , '6', '7' , '8', '9' , '0');
    $arrkata = explode (", ",$Kata);
    $hasil=array_intersect($arrkata, $array);
    $kataganti=$arrkata[0];
    for ($i= 1; $i <= count($hasil); $i++)
   { 
    $kataganti=$kataganti.$a[$hasil[$i]];
   }
   
    echo $kataganti;
    }

echo kataku('hello, 0, 1, 2',array(' Arkademian',' Fighters',' !'));


?>
