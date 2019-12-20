<?php

echo '<div id="cart" title="Kliknij, aby zobaczyć szczegóły koszyka...">';

    if($content == $s_page['produkty']) {
        
        echo '<div id="cart-icon">';

            echo '<a href="'.$s_page['koszyk'].'"><i class="fas fa-shopping-basket fa-2x"></i></a>';

        echo '</div>';
        
        echo '<div id="cart-sum" class="'.$s_page['koszyk'].'">';
        
            echo 'Liczba produktów: <em class="badge">...</em><br>';

            echo 'Wartość koszyka: <label class="badge"><span>...</span> '.$s_currency.'</label>';
        
        echo '</div>';


    
    }

    echo '<div id="cart-content" class="table-responsive">';
    
        echo '<table class="table table-striped">';

        echo '</table>';

        if($content == $s_page['produkty']) {

            echo '<a href="'.$s_page['koszyk'].'" class="btn" style="background: #12435D" id="to-order-process">Realizuj zamówienie <i class="fas fa-arrow-right"></i></a>';

        }

    echo '</div>';

echo '</div>';