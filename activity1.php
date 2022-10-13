<?php

    $s=4;
    
    $lista = array(1,2,3,4,5,6);
    
    $listaContrario = array_reverse($lista);
    $count=0;
    
    for($i=0;$i<count($listaContrario);$i++){
        
        $valorOriginal = strval($listaContrario[$i]);
        $valorResultado = "";
        
        for($i2 = 0;$i2 < strlen($valorOriginal);$i2++){
            
            if(substr($valorOriginal,$i2,($i2+1)) != $s && substr($valorOriginal,$i2,($i2+1)) < $s)
                $valorResultado .= substr($valorOriginal,$i2,($i2+1));
            
        }
        
        if($valorResultado != ""){
            
            if($count == 0)
                echo $valorResultado;
            else
                echo ",".$valorResultado;
            
            $count += 1;   
            
        }
           
    }

?>
