<?php

require_once './config/setting.php';
require_once './php/init.php';

if(isset($name) and isset($value)) {

    if($name != 'all') {
        
        if($value == 'all') {

            unset($_SESSION['filter'][$name]);

        }else{

            if($_SESSION['filter'][$name])
                unset($_SESSION['filter'][$name]);

            $_SESSION['filter'][$name] = $value;

        }
    
    }
    
    $jsonArray = array();
    if(isset($_SESSION['filter']) and count($_SESSION['filter']) > 0) {
        
        foreach($_SESSION['filter'] as $i => $s) {
            
            array_push($jsonArray, array($i, $s_filter[$i]['name'], $s_filter[$i]['value'][$s]));
            
        }

    }
    
    if(count($jsonArray) > 0) {
        
        $jsonOut = json_encode($jsonArray);

        exit($jsonOut);

    }else{

        exit('false');

    }

}