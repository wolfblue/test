<?php

    $s=4;
    
    $lista = array(1,2,3,4,5,6);
    $listaNueva = [];
    $count=0;
    
    for($i=0;$i<count($lista);$i++){
        
        $cuadrado = pow($lista[$i],2);
        
        if($cuadrado < $s."".$s){
         
            $listaNueva[$count] = $cuadrado;
        
            $count += 1;
            
        }
           
    }
    
    sort($listaNueva);
    
    for($i=0;$i<count($listaNueva);$i++){
        
        if($i == 0)
            echo $listaNueva[$i];
        else
            echo ",".$listaNueva[$i];
        
    }

?>
