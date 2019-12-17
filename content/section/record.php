<?php

require_once './config/setting.php';

$productDir = scandir($s_productDir);

$count = 0;

//$jsonOut = false;

if(count($productDir) > 0) {

    require_once './php/init.php';

    //$json = array();

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
        
        echo '<div class="col-xs-12 col-md-6 col-lg-4">';

            echo '<div class="product">';
            
            echo '<div class="cover"><i class="far fa-times-circle fa-2x close"></i>';
            
                echo '<h4>'.$p.'</h4>';
                
                $par = $s_dataProduct[$p]['parameter'];
            
                echo '<table class="table table-bordered">';
                
                    //Naglowek tabeli
                
                    echo '<tr><th>Przyłącze ISO 228/1</th><th>Kod</th></tr>';        
                    
                    //Wiersze z wartosciami
                    
                    echo '<tr>';
                        
                        echo '<td>'.$par[0].'</td>';
                        echo '<td>'.$par[1].'</td>';
                
                    echo '</tr>';
                    
                    //Naglowek tabeli
                
                    echo '<tr><th colspan="2">Maksymalna lepkość</th><th rowspan="2">&#8709 (mm)</th><th rowspan="2">K<sub>v</sub> (l/min)</th></tr>';

                    echo '<tr><th>cSt</th><th><sup>o</sup>E</th></tr>';                    
                    
                    
                    echo '<tr>';
                        
                        echo '<td>'.$par[2].'</td>';
                        echo '<td>'.$par[3].'</td>';
                        echo '<td>'.$par[4].'</td>';
                        echo '<td>'.$par[5].'</td>';
                
                    echo '</tr>';
                    
                    echo '<tr><th rowspan="2">Moc (W)</th><th rowspan="2">Ciśnienie minimalne (bar)</th><th colspan="2">Ciśnienie M.O.P.D.</th></tr>';

                    echo '<tr><th>AC (bar)</th><th>DC (bar)</th></tr>';               

                    echo '<tr>';
                        
                        echo '<td>'.$par[6].'</td>';
                        echo '<td>'.$par[7].'</td>';
                        echo '<td>'.$par[8].'</td>';
                        echo '<td>'.$par[9].'</td>';
                
                    echo '</tr>';

                echo '</table>';
            
            echo '</div>';

            echo $section->product($p, $s_dataProduct[$p]['medium']);

            echo $section->price($section->number($s_dataProduct[$p]['price']).' '.$s_currency);

            //echo '<div class="pull-right">';
            
            //echo $section->view($l_dokumentacja, $s_productDir.'/'.$p.'/'.$s_dirDocumentation.'/katalog.pdf', true);

            echo $section->modal($p, $l_zamow, 'cart');

            //echo $section->modal($p, $l_zapytaj, 'question');

            echo $section->cart($p, $l_dodajDoKoszyka);

            //parametr wejsciowy - tablica (plik setting.php)
            echo $section->parameter($s_addCart);

            //echo $section->question($p);

            //echo '</div>';

            echo '</div>';

        echo '</div>';

        //array_push($json, array($display));
        
        $count++;

    }
    
    //array_unshift($json, array($count));

    //$jsonOut = json_encode($json);

}

//exit($jsonOut);