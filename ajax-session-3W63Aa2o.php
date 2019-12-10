<?php

require_once './config/setting.php';
require_once './php/init.php';

if(isset($name) and isset($value)) {

    if($value == '') {

        unset($_SESSION[$name]);
        
    }else{
        
        $_SESSION[$name] = $value;

    }

}