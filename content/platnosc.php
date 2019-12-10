<?php

require_once 'content/section/order-process.php';

if($backStatus) {

    echo '<div class="order-alert">'.$l_orderAlert[$content].' <i class="far fa-smile"></i></div>';

}

echo '<div class="row" id="payment-row">';

    echo '<div class="col-xs-12">';

        echo '<table class="table" id="payment">';
        
        foreach ($s_payment as $i => $pay) {
        
            echo '<tr>';

                echo '<td>';

                    echo $pay;
                
                echo '</td>';
                
                echo '<td>';
                
                    $button = ' btn-light';
                    if(isset($_SESSION['pay']) and $_SESSION['pay'] == $i)
                        $button = ' btn-secondary';
                
                    echo '<button class="btn pay'.$button.'" id="'.$i.'">'.$l_zastosuj.'</button>';

                echo '</td>';
                
            echo '</tr>';
            
        }
        
        echo '</table>';
    
    echo '</div>';

echo '</div>';

require_once 'content/section/order-move.php';