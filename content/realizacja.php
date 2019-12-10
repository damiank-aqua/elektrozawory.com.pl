<?php

if(isset($_SESSION['pay'])) {
    
    echo 'Dziękujemy za złożenie zamówienia w naszym sklepie!<br><br>';
    
    require_once 'php/script/cart.php';

    require_once 'section/delivery.php';

    echo $l_doZaplaty.': '.$section->number($valueCart + $cost).' '.$s_currency.'<br><br>';

}else{
    
    echo 'Zapraszamy ponownie! <a href="'.$s_page['produkty'].'">'.$l_stronaGlowna.'</a>';
    
}

if($_SESSION['pay'] == 'odbior') {
    
    //Informacja o zaplacie kurierowi
    echo 'Płatność za zamówienie zostanie przekazana kurierowi podczas odbioru przesyłki.';
    
    echo '<br><p>W tym momencie pozostaje Ci już tylko oczekiwać na ewentualną informację od nas i oczywiście przesyłkę.</p><br><br>';
}

if($_SESSION['pay'] == 'przelew') {
    
    //Dane do przelewu
    echo 'Po zaksięgowaniu płatności na poniższe dane zostanie przygotowane Twoje zamówienie<br><br>';

    echo '"AQUA - Grupa SBS" sp. z o.o.<br>';
    echo 'ul. Marii Skłodowskiej-Curie 25<br>';
    echo '65-124 Zielona Góra<br>';
    echo 'Numer rachunku: 78 1020 5402 0000 0102 0021 2589<br><br>';
    
}

if($_SESSION['pay'] == 'online') {
    
    //Informacja o zaplacie online
    echo 'Poniżej znajduje się przycisk do uruchomienia aplikacji Przelewy24.pl';
    
    echo '<br><p>Prosimy dokonać przelewu wybranym sposobem, a my zostaniemy poinformowani o tym fakcie niemal natychmiast.</p><br><br>';
    
    if(isset($onlinePaymentApp)) {
        
        echo $onlinePaymentApp;
        
    }
}