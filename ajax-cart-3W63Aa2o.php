<?php

require_once 'config/setting.php';
require_once 'php/init.php';

if(isset($event)) {

    if($event == 'get') {
    
        if(isset($_SESSION['cart']) and count($_SESSION['cart']) > 0) {
            
            $json = array();

            $sumCart = $valueCart = 0;

            foreach ($_SESSION['cart'] as $i => $p) {

                $jsonRow = array();

                array_push($jsonRow, $p['name']);//0

                array_push($jsonRow, $p['quantity']);//1

                array_push($jsonRow, $p['parameter']);//2

                array_push($jsonRow, $section->number($s_dataProduct[$p['name']]['price']).' '.$s_currency);//3
                
                $addPrice = $s_connectorPrice * $p['quantity'];
                if(stristr($p['parameter'], 'nie')) {
                    
                    $addPrice = 0;
                    
                }
                
                array_push($jsonRow, $section->number($addPrice).' '.$s_currency);//4
                
                array_push($jsonRow, $section->number($s_dataProduct[$p['name']]['price'] * $p['quantity'] + $addPrice).' '.$s_currency);//5

                array_push($jsonRow, $i);//6
                
                array_push($jsonRow, '<img src="product/'.$p['name'].'/image.jpg" title="'.$p['name'].'" style="width:100px">');//7
                
                array_push($json, $jsonRow);
                
                $sumCart += $p['quantity'];
                
                $valueCart += ($s_dataProduct[$p['name']]['price'] * $p['quantity']) + $addPrice;

            }
            
            //odwrocenie kolejnosci, aby ostatnio dodany byl pierwszy (oprocz juz istniejacych - tu zwieksza sie ilosc na pozycji pierwotnej)
            
            $json = array_reverse($json);
            
            array_unshift($json, array('sum' => $sumCart, 'value' => $section->number($valueCart)));

        }else{
            
            $json = array(array('sum' => 0, 'value' => $section->number(0)));
            
        }
        
        $jsonOut = json_encode($json);

        exit($jsonOut);

    }
    
    if(isset($value)) {

        if($event == 'set') {
            
            $parameterString;
            
            $index = $value;

            foreach ($parameter as $pa) {
                
                if($pa[0] == 'connector') {
                    
                    $attributeParameter = $l_wtyczka;
                    
                    $valueParameter = $s_connector[$pa[1]];
                    
                }
                
                if($pa[0] == 'suspense') {
                    
                    $attributeParameter = $l_napiecie;
                    
                    $valueParameter = $s_suspense[$pa[1]];
                    
                }

                $parameterString .= $attributeParameter.': '.$valueParameter.'; ';
                
                $index .= $pa[1];

            }

            $parameterString = substr($parameterString, 0, -2);

            if(isset($_SESSION['cart'])) {
                
                $element = false;
                foreach ($_SESSION['cart'] as $i => $cart) {

                    if($i == $index) {

                        $element = $i;

                        break;

                    }

                }

                if($element) {

                    $_SESSION['cart'][$element]['quantity']++;

                }else{

                    $_SESSION['cart'][$index]['quantity'] = 1;

                    $_SESSION['cart'][$index]['name'] = $value;

                    $_SESSION['cart'][$index]['parameter'] = $parameterString;
                    
                }

            }else{

                $_SESSION['cart'] = array();

                $_SESSION['cart'][$index]['quantity'] = 1;

                $_SESSION['cart'][$index]['name'] = $value;

                $_SESSION['cart'][$index]['parameter'] = $parameterString;
                
            }
			
        }
        
        if($event == 'change') {
            
            $index = $value;
            
            if(stristr($parameter, 'plus')) {
                
                $_SESSION['cart'][$index]['quantity']++;
                
            }
            
            if(stristr($parameter, 'minus')) {
                
                $_SESSION['cart'][$index]['quantity']--;
                
            }
	
        }

        if($event == 'remove') {

            unset($_SESSION['cart'][$value]);
            
        }
    
    }

}