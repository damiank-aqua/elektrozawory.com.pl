<?php

require_once './config/setting.php';

$productDir = scandir($s_productDir);

$count = 0;

$jsonOut = false;

if(count($productDir) > 0) {

    require_once './php/init.php';

    $json = array();

    foreach ($productDir as $p) {

        if(stristr($p, $s_dirChar))
            continue;

        if(isset($_SESSION['filter']) and is_array($_SESSION['filter']) and count($_SESSION['filter']) > 0) {

            $filterCount = 0;
            foreach ($_SESSION['filter'] as $i => $f) {
                
                if(isset($s_filterProduct[$p]) and count($s_filterProduct[$p]) > 0) {
                    
                    foreach($s_filterProduct[$p] as $j => $fp) {
                        
                        if($i == $j) {
                            
                            if(in_array($f, $fp))
                                $filterCount++;
                        }
                        
                    }
                    
                }
                    
            }

            if($filterCount < count($_SESSION['filter']))
                continue;

        }
        
        if(isset($_SESSION['search'])) {
            
            if(!stristr($p, $_SESSION['search']))
                continue;
            
        }
        
        $display = '<div class="col-xs-12 col-md-6 col-lg-4">';

            $display .= '<div class="product">';
            
            $display .= '<div class="cover"><i class="far fa-times-circle fa-2x close"></i>';
            
                $display .= '<h4>'.$p.'</h4>';
                
                $par = $s_dataProduct[$p]['parameter'];
            
                $display .= '<table class="table table-bordered">';
                
                    //Naglowek tabeli
                
                    $display .= '<tr><th>Przyłącze ISO 228/1</th><th>Kod</th></tr>';        
                    
                    //Wiersze z wartosciami
                    
                    $display .= '<tr>';
                        
                        $display .= '<td>'.$par[0].'</td>';
                        $display .= '<td>'.$par[1].'</td>';
                
                    $display .= '</tr>';
                    
                    //Naglowek tabeli
                
                    $display .= '<tr><th colspan="2">Maksymalna lepkość</th><th rowspan="2">&#8709 (mm)</th><th rowspan="2">K<sub>v</sub> (l/min)</th></tr>';

                    $display .= '<tr><th>cSt</th><th><sup>o</sup>E</th></tr>';                    
                    
                    
                    $display .= '<tr>';
                        
                        $display .= '<td>'.$par[2].'</td>';
                        $display .= '<td>'.$par[3].'</td>';
                        $display .= '<td>'.$par[4].'</td>';
                        $display .= '<td>'.$par[5].'</td>';
                
                    $display .= '</tr>';
                    
                    $display .= '<tr><th rowspan="2">Moc (W)</th><th rowspan="2">Ciśnienie minimalne (bar)</th><th colspan="2">Ciśnienie M.O.P.D.</th></tr>';

                    $display .= '<tr><th>AC (bar)</th><th>DC (bar)</th></tr>';               

                    $display .= '<tr>';
                        
                        $display .= '<td>'.$par[6].'</td>';
                        $display .= '<td>'.$par[7].'</td>';
                        $display .= '<td>'.$par[8].'</td>';
                        $display .= '<td>'.$par[9].'</td>';
                
                    $display .= '</tr>';

                $display .= '</table>';
            
            $display .= '</div>';

            $display .= $section->product($p, $s_dataProduct[$p]['medium']);

            $display .= $section->price($section->number($s_dataProduct[$p]['price']).' '.$s_currency);

            //$display .= '<div class="pull-right">';
            
            $display .= $section->view($l_dokumentacja, $s_productDir.'/'.$p.'/'.$s_dirDocumentation.'/katalog.pdf', true);

            $display .= $section->modal($p, $l_zamow, 'cart');

            //$display .= $section->modal($p, $l_zapytaj, 'question');

            $display .= $section->cart($p, $l_dodajDoKoszyka);

            //parametr wejsciowy - tablica (plik setting.php)
            $display .= $section->parameter($s_addCart);

            //$display .= $section->question($p);

            //$display .= '</div>';

            $display .= '</div>';

        $display .= '</div>';

        array_push($json, array($display));
        
        $count++;

    }
    
    array_unshift($json, array($count));

    $jsonOut = json_encode($json);

}

exit($jsonOut);