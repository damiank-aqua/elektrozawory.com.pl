<?php

//Tylko tutaj uzywany jest parametr url - "detail"

echo '<div class="detail">';

echo '<a href="'.$s_page['produkty'].'" class="btn btn-light back" title="Powrót do listy produktów"><i class="fas fa-angle-double-left fa-2x"></i></a>';

    if(isset($detail)) {
        
        echo '<div class="row">';
        
            echo '<div class="col-xs-12" style="width: 100%">';

                echo '<div class="link-one"><a href="product/'.$detail.'/karta/katalog.pdf" class="btn" target="_blank" title="Dokumentacja techniczna do elektrozaworu: '.$detail.'">'.$l_dokumentacja.'</a></div>';
            
            echo '</div>';
            
        echo '</div>';

            $par = $s_dataProduct[$detail]['parameter'];

            $display = '<div class="table-responsive">';
            
            $display .= '<table class="table table-bordered">';

                //Naglowek tabeli

                $display .= '<tr><th rowspan="2" colspan="2" class="price-one">'.number_format($s_dataProduct[$detail]['price'], 2, ',', '').' '.$s_currency.'</th><th>Przyłącze ISO 228/1</th><th>Kod</th><th>Moc</th></tr>';

                //Wiersze z wartosciami

                $display .= '<tr>';

                    $display .= '<td>'.$par[0].'</td>';
                    $display .= '<td>'.$par[1].'</td>';
                    $display .= '<td>'.$par[8].'</td>';

                $display .= '</tr>';

                //Naglowek tabeli

                $display .= '<th colspan="3">&#8709 (mm)</th><th colspan="3">K<sub>v</sub> (l/min)</th></tr>';

                //$display .= '<tr><th>cSt</th><th><sup>o</sup>E</th></tr>';

                $display .= '<tr>';

                    //$display .= '<td>'.$par[2].'</td>';
                    //$display .= '<td>'.$par[3].'</td>';
                    $display .= '<td colspan="3">'.$par[4].'</td>';
                    $display .= '<td colspan="3">'.$par[5].'</td>';

                $display .= '</tr>';

               // $display .= '<tr><th rowspan="2">Moc (W)</th><th rowspan="2">Ciśnienie minimalne (bar)</th><th colspan="2">Ciśnienie M.O.P.D.</th></tr>';

                $display .= '<tr><th colspan="3">Ciśnienie minimalne (bar)</th><th colspan="3">Ciśnienie maksymalne (bar)</th></tr>';

                //$display .= '<tr><th>AC (bar)</th><th>DC (bar)</th></tr>';

                $display .= '<tr>';

                    $display .= '<td colspan="3">'.$par[6].'</td>';
                    $display .= '<td colspan="3">'.$par[7].'</td>';
                    //$display .= '<td>'.$par[8].'</td>';
                    //$display .= '<td>'.$par[9].'</td>';

                $display .= '</tr>';

            $display .= '</table>';
        
            $display .= '</div>';
            
            echo '<div class="row">';

            echo '<div class="col-xs-12 col-md-6 col-lg-4">';

                echo '<h1>'.$l_modelElektrozaworu.'<br><b>'.$detail.'</b>';
                       
                if(isset($s_dataProduct[$detail]['medium']))
                    echo '<br>medium: '.$s_dataProduct[$detail]['medium'].'';
                
                echo '<br>średnica: '.$par[0].'';
                
                echo '</h1>';
                
                echo '<a href="product/'.$detail.'/image.jpg" class="image zoom" title="Zawór elektromagnetyczny: '.$detail.'"><img src="product/'.$detail.'/image.jpg" alt="Elektrozawór: '.$detail.'"></a>';

            echo '</div>';
            
            echo '<div class="col-xs-12 col-md-6 col-lg-8">';
            
                echo $display;
            
            echo '</div>';
            
            echo '</div>';
            
            echo '<div class="row">';

                echo '<div class="col-xs-12" style="width: 100%; text-align: center">';

                    if(isset($s_dataProduct[$detail]['description'])) {

                        echo '<h4 align="center" style="margin-top: 10px">Opis szczegółowy</h4>';

                        echo '<p style="padding: 20px; line-height: 30px;">'.$s_dataProduct[$detail]['description'].'. Madium: '.$s_dataProduct[$detail]['medium'].'</p>';

                    }

                echo '</div>';
            
            echo '</div>';
            
            echo '<div class="row">';

            echo '<div class="col-xs-12" style="width: 100%">';

            echo '<div class="modal-button"><a href="produkty,'.$detail.','.$s_zamowienie.'" class="btn dk-modal" lang="cart">Zamów</a></div>';
            
            echo '</div>';
            
            echo '</div>';
        
        echo '</div>';

    }else{

        $section->alert($l_brakParametru);

    }

echo '</div>';