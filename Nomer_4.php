<?php
    $a = array('cat','listen','tac','act','silent','code');
    
    function kataku($a)
    {
      $hobi=array();
    //$i = 0;
    //$j = count($a)-1;
    for( $i=0; $i<count($a); $i++ )
    {
       for( $j=0; $j<count($a); $j++)
       {
         if($j!=$i){
        $kata1 = str_split($a[$i]);
        $kata2 = str_split($a[$j]);  
        $TampungArray1 = array_diff($kata1,$kata2);
        if (count($TampungArray1)==0){ $hasil[] =  $a[$i];}
       }
       }
       }
    $clear_array = array_unique($hasil);
    if(count($clear_array)>0){
    print_r($clear_array);} else{echo 'Tidak di Temukan';}
    }
  
    kataku(array('cat','listen','tac','silent','code'));
    
    
    ?>