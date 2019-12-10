<?php
        
$displayTitle = '';

switch ($sunrise_uri) {

  case '/produkty,funkcja-dzialania_normalnie-otwarty':
    $sunrise_title = 'Zawór elektromagnetyczny - otwarty';
  break;    
  case '/koszyk':
    $sunrise_title = 'Koszyk';
  break;  
  case '/regulamin':
    $sunrise_title = 'Regulamin';
  break; 
  case '/o-sklepie':
    $sunrise_title = 'O sklepie';
  break;
  case '/kontakt':
    $sunrise_title = 'Kontakt';
  break;
  case '/dostawa':
    $sunrise_title = 'Dostawa';
  break;
  case '/spis-zaworow-elektromagnetycznych':
    $sunrise_title = 'Spis zaworów elektromagnetycznych';
  break;
  case '/produkty':
    $sunrise_title = 'Produkty';
  break;

}


if($sunrise_title != '') {
    $displayTitle = $sunrise_title;
  
} else if(isset($detail)) {

    if(isset($api_seo[$detail]) and $api_seo[$detail]['title'] != '') {
        
        $displayTitle = $api_seo[$detail]['title'];
        
    }else{
        
        $displayTitle = $l_modelElektrozaworu.': '.$detail.' '.$s_dataProduct[$detail]['medium'];
    
    }

} else {
    
    $displayTitle = $s_title;
    
}


echo $displayTitle.' - '.$sunrise_brand;