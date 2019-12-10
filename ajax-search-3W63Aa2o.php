<?php

require_once './config/setting.php';
require_once './php/init.php';

if(isset($name) and isset($value)) {

    if($value == '') {

        unset($_SESSION['search']);
        
    }else{
        
        $_SESSION['search'] = $value;

    }

}