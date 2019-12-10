<?php

$check = false;

//Czy zmienne ustawione
if(
    !isset($order['person']) or
    !isset($order['email']) or
    !isset($order['street']) or 
    !isset($order['number']) or
    !isset($order['post']) or 
    !isset($order['city']) or
    !isset($order['streetd']) or 
    !isset($order['numberd']) or
    !isset($order['postd']) or 
    !isset($order['cityd'])
) {
    $check = true;
}

if(!$check) {
    
    //Czy zmienne rowne lub rozne od
    if(
        $order['person'] == '' or
        $order['email'] == '' or
        $order['street'] == '' or 
        $order['number'] == '' or
        $order['post'] == '' or 
        $order['city'] == '' or
        $order['streetd'] == '' or 
        $order['numberd'] == '' or
        $order['postd'] == '' or 
        $order['cityd'] == ''
    ) {
        $check = true;
    }

}