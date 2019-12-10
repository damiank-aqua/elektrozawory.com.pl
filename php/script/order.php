<?php

$order = array();

if(isset($_SESSION['order']) and count($_SESSION['order']) > 0) {
    
    if(stristr($_SESSION['order'], '|')) {
        
        $orderArray = explode('|', $_SESSION['order']);

        foreach ($orderArray as $oa) {
         
            $oa2 = explode(':', $oa);
            
            $order[$oa2[0]] = $oa2[1];
            
        }
        
    }else{
    
        $oa2 = explode(':', $_SESSION['order']);
        
        $order[$oa2[0]] = $oa2[1];
    
    }
    
}