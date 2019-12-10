<style>
.change-quantity{
	display: none;
}
</style>

<?php

require_once 'content/section/order-process.php';

echo '<div class="row">';

    echo '<div class="col-xs-12" style="text-align: center; width: 100%; padding-bottom: 20px;" id="sum-page">';

        //Wyswietlenie zawartosci koszyka
        require_once 'section/cart.php';
        
        //Naliczenie ilosci i wartosci koszyka
        require_once 'php/script/cart.php';
        
        echo '<div class="text-left">';
        
            echo $l_koszykIlosc.': <strong>'.$sumCart.' szt.</strong><br>';

            echo $l_koszykWartosc.': <strong>'.$section->number($valueCart).' '.$s_currency.'</strong>';
        
        echo '</div>';
        
    echo '</div>';
    
echo '</div>';
            
        //Wyswietlenie danych adresowych i rozliczeniowych (wykorzystanie $s_order do definicji)
        require_once 'section/address.php';

        //Koszty przesylki (gdy wartosc koszyka >= limit dormowej dostawy to $cost = 0)
        require_once 'section/delivery.php';
        
        echo '<div class="row">';
        
            echo '<div class="col-xs-12 col-md-6">';
            
            echo '<h3>Dostawa i płatność</h3>';
        
            echo $s_delivery[0].': <strong>'.$section->number($cost).' '.$s_currency.'</strong><br>';

            echo $l_doZaplaty.': <strong style="color:red">'.$section->number($valueCart + $cost).' '.$s_currency.'</strong><br>';

            echo 'Sposób płatności: '.(isset($_SESSION['pay']) ? '<strong>'.$s_payment[$_SESSION['pay']].'</strong>' : '- <a href="'.$s_page['platnosc'].'">uzupełnij</a>').'<br>';
            
            echo '</div>';
            
            echo '<div class="col-xs-12 col-md-6">';
            
            echo '<h3>Uwagi do zamówienia</h3>';

            echo '<textarea id="comment" class="form-control"></textarea>';
            
            echo '</div>';
        
        echo '</div>';

echo '</div>';

require_once 'content/section/order-move.php';

//Sprawdzenie czy mozna realizowac zamowienie
//require_once 'php/script/check.php';

if(!$check) {

    echo '<div style="text-align:center;padding-bottom: 10px"><button id="'.$s_page['realizacja'].'" class="btn btn-warning send-order">'.$l_zamowZaplata.'</button></div>';

}