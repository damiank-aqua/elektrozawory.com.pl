<?php

require_once './config/setting.php';

$productDir = scandir($s_productDir);

if(count($productDir) > 0) {
    
    $googleCategory = 536;//dom i ogrod
    
    $extensionImage = 'jpg';
    
    $condition = 'new';
			
    $availability = 'in stock';

    $xml .= '<?xml version="1.0" encoding="utf-8"?>'."\n";
    $xml .= '<rss version="2.0" xmlns:g="http://base.google.com/ns/1.0">'."\n";
    $xml .= '<channel>'."\n";
    $xml .= '<title>'.$s_title.'</title>'."\n";
    $xml .= '<link>'.$s_protocol.$s_domain.'</link>'."\n";

    foreach ($productDir as $i => $p) {

        if(stristr($p, $s_dirChar))
            continue;

        $xml .= '<item>'."\n";
        $xml .= '<g:id>'.$i.'</g:id>'."\n";
        $xml .= '<g:title>Elektrozawór '.$p;
        
        if(isset($s_dataProduct[$p]['medium'])) {

            $xml .= ' - medium: '.$s_dataProduct[$p]['medium'].'</g:title>'."\n";
            
        }
        
        $descriptionClear = preg_replace('/[\n]/', '', $s_dataProduct[$p]['description']);
        
        $descriptionClear = 'Elektrozawór o średnicy: '.$s_dataProduct[$p]['parameter'][0].'. '.$descriptionClear;
        
        //$descriptionClear = trim(preg_replace('/[\t|\s{2,}]/', '', $s_dataProduct[$p]['description']));
                
        //$descriptionClear = str_replace('\r', '', $descriptionClear);
        
        $xml .= '<g:description>'.$descriptionClear.'</g:description>'."\n";
        $xml .= '<g:google_product_category>'.$googleCategory.'</g:google_product_category>'."\n";
        $xml .= '<g:product_type>Zawór elektromagnetyczny</g:product_type>'."\n";
        $xml .= '<g:link>'.$s_protocol.$s_domain.'/elektrozawor,'.$p.'</g:link>'."\n";
        $xml .= '<g:image_link>'.$s_protocol.$s_domain.'/product/'.$p.'/image.'.$extensionImage.'</g:image_link>'."\n";
        $xml .= '<g:condition>'.$condition.'</g:condition>'."\n";
        $xml .= '<g:availability>'.$availability.'</g:availability>'."\n";
        $xml .= '<g:price>'.number_format($s_dataProduct[$p]['price'], 2, '.', '').'</g:price>'."\n";
        $xml .= '</item>'."\n";

        }

    $xml .= '</channel>'."\n";
    $xml .= '</rss>';

    if(file_put_contents('merchant.xml', $xml)) {
        
        echo 'OK: Przetwarzanie zakończone[poprawnie]';
        
    }else{
        
        echo 'ERR: przetwarzanie zakończone[niepoprawne]';
        
    }

}