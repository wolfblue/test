<?php

    
    $lista = array(1,2,3);
    $totalLista = count($lista);
    $count = 1;
    $finalizo = false;
    
    sort($lista);
    
    while($finalizo == false){
        
        $siguiente = false;
        
        //  Validar uno a uno
        
        for($i=0;$i<$totalLista;$i++){
         
            if($lista[$i] == $count){
             
                $count += 1;
                $siguiente = true;
                
            }
            
        }
        
        //  Validar suma
        
        if($siguiente == false){
            
            for($i=0;$i<$totalLista;$i++){
                
                $acumulador = $lista[$i];
                
                for($i2=$i+1;$i2<$totalLista;$i2++){
                        
                    if(($i2+1) < $totalLista){
                
                        $acumulador += $lista[$i2+1];
                        
                        if($acumulador == $count){
             
                            $count += 1;
                            $siguiente = true;
                            
                        }
                        
                    }   
                    
                }
                
            }
            
        }
            
        
        //  Validar finalizo
        
        if($siguiente == false)
            $finalizo = true;
        
    }
    
    echo $count;
    

?>
