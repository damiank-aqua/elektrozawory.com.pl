<?php

$sumCart = $valueCart = 0;

if(isset($_SESSION['cart']) and count($_SESSION['cart']) > 0) {

    foreach ($_SESSION['cart'] as $i => $p) {
        
        $addPrice = $s_connectorPrice * $p['quantity'];
        if(stristr($p['parameter'], 'nie')) {

            $addPrice = 0;

        }

        $sumCart += $p['quantity'];

        $valueCart += ($s_dataProduct[$p['name']]['price'] * $p['quantity'] + $addPrice);

    }

}