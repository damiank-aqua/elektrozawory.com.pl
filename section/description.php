<?php
        
$displayDescription = '';

switch ($sunrise_uri) {
  case '/produkty,funkcja-dzialania_normalnie-otwarty':
    $sunrise_desc = 'Oferujemy zawory elektromagnetyczne  otwarte o szerokim zastosowaniu, zarówno w dziedzinach automatyki przemysłowej, jak i techniki ciepłowniczej. Produkty cechują się długotrwałością  i niezawodnością.';
  break;    
  case '/koszyk':
  case '/regulamin':
  case '/o-sklepie':
  case '/kontakt':
  case '/dostawa':
  case '/spis-zaworow-elektromagnetycznych':
  case '/produkty':
    $sunrise_desc = ' ';
  break;

}

if($sunrise_desc != '') {
    $displayDescription = $sunrise_desc;
  
} else if(isset($detail)) {

    if(isset($api_seo[$detail]) and $api_seo[$detail]['description'] != '') {
        
        $displayDescription = $api_seo[$detail]['description'];
        
    }else{
        
        $displayDescription = $l_modelElektrozaworu.': '.$detail.' '.$s_dataProduct[$detail]['medium'];
    
    }

}else{
    
    $displayDescription = $s_description;
    
}
echo '<meta name="description" content="'.$displayDescription.'">';