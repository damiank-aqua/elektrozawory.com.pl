<?php

require_once 'content/section/order-process.php';

if($backStatus) {

    echo '<div class="order-alert">'.$l_orderAlert[$content].' <i class="far fa-smile"></i></div>';

}

//echo 'Tu użytkownik poda adres dostawy i dane do rozliczeń';

echo '<div class="row">';

    echo '<div class="col-xs-12 col-md-6">';
    
        require_once 'php/script/cart.php';
    
        require_once 'section/delivery.php';
        
        echo '<strong>'.$s_delivery[0].': <span class="badge badge-danger">'.$section->number($cost).' '.$s_currency.'</span></strong><br>';

        if($cost > 0) {
            
            echo '('.$l_darmowaPrzesylkaBrak.': '.$section->number($s_deliveryFree - $valueCart).' '.$s_currency.')<br>';
            
        }
        
    echo '</div>';

echo '</div>';

echo '<form action="#" method="post" id="order-form">';

echo '<div class="row">';

    echo '<div class="col-xs-12 col-md-6">';

        echo '<div class="form-group">';

            echo '<label for="person">Imię i nazwisko*:</label>';
            echo '<input type="text" class="form-control address'.((!isset($order['person']) and $backStatus) ? ' required' : '').'" name="person" id="person" '.(isset($order['person']) ? 'value="'.$order['person'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '<small>Dane osobowe, które pojawią się na fakturze (nie będą one w żaden sposób przetwarzane)</small>';
            
        echo '</div>';

    echo '</div>';

    echo '<div class="col-xs-12 col-md-6">';

        echo '<div class="form-group">';

            echo '<label for="email">Adres e-mail*:</label>';
            echo '<input type="text" class="form-control address'.((!isset($order['email']) and $backStatus) ? ' required' : '').'" name="email" id="email" '.(isset($order['email']) ? 'value="'.$order['email'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '<small>Adres e-mail posłuży nam <strong>tylko</strong> do informowania Cię o stopniu realizacji zamówienia</small>';

        echo '</div>';

    echo '</div>';

echo '</div>';

echo '<div class="row">';

    echo '<div class="col-xs-12 col-md-6">';

        echo '<div id="company-box-out">';

            $checked = ' checked';
//            if(isset($order['comapny']) or isset($order['tax']))
//                $checked = ' checked';

            echo $l_jakoFirma.' <input type="checkbox" id="company-check"'.$checked.'>';

            echo '<div id="company-box"'.($checked != '' ? ' style="display:block"' : '').'>';

                echo '<div class="row">';

                    echo '<div class="col-xs-12 col-md-6 no-border">';

                        echo '<small>Nazwa firmy:</small>';
                        echo '<input type="text" class="form-control address" name="company" '.(isset($order['comapny']) ? 'value="'.$order['comapny'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';

                    echo '</div>';

                    echo '<div class="col-xs-12 col-md-6 no-border">';

                        echo '<small>NIP:</small>';
                        echo '<input type="text" class="form-control address" name="tax" '.(isset($order['tax']) ? 'value="'.$order['tax'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';

                    echo '</div>';

                echo '</div>';

                echo '<small>Nazwa firmy i NIP, które pojawią się na fakturze (nie będą one w żaden sposób przetwarzane)</small>';

            echo '</div>';

        echo '</div>';

    echo '</div>';
    
    echo '<div class="col-xs-12 col-md-6">';

        echo '<label>Telefon kontaktowy (stacjonarny lub komórkowy):</label>';
        echo '<input type="text" class="form-control address" name="phone" '.(isset($order['phone']) ? 'value="'.$order['phone'].'"' : 'placeholder="'.$l_wpisz.'"').' class="address"/>';
        echo '<small>Telefon posłuży nam <strong>tylko</strong> do ewentualnego kontaktu z Tobą podczas realizacji zamówienia</small>';

    echo '</div>';

echo '</div>';

echo '<div class="row">';

    echo '<div class="col-xs-12 col-md-6" id="address">';

        echo '<label>'.$l_adresRozliczeniowy.':</label>';
        echo '<br><small>Ulica*</small>';
        echo '<input type="text" class="form-control copy-to address'.((!isset($order['street']) and $backStatus) ? ' required' : '').'" name="street" '.(isset($order['street']) ? 'value="'.$order['street'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
        echo '<div class="row">';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Numer domu*</small>';
                echo '<input type="text" class="form-control copy-to address'.((!isset($order['number']) and $backStatus) ? ' required' : '').'" name="number" '.(isset($order['number']) ? 'value="'.$order['number'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Numer mieszkania</small>';
                echo '<input type="text" class="form-control copy-to address" name="flat" '.(isset($order['flat']) ? 'value="'.$order['flat'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
        echo '</div>';
        echo '<div class="row">';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Kod pocztowy*</small>';
                echo '<input type="text" class="form-control copy-to address '.((!isset($order['post']) and $backStatus) ? ' required' : '').'" name="post" '.(isset($order['post']) ? 'value="'.$order['post'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Miasto*</small>';
                echo '<input type="text" class="form-control copy-to address'.((!isset($order['city']) and $backStatus) ? ' required' : '').'" name="city" '.(isset($order['city']) ? 'value="'.$order['city'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
        echo '</div>';
        echo '<small>Dane adresowe, które pojawią się na fakturze (nie będą one w żaden sposób przetwarzane)</small>';
        
    echo '</div>';

    echo '<div class="col-xs-12 col-md-6" style="background: #eee">';

        echo '<label>'.$l_adresDostawy.':</label>';
        echo '<br><small>Ulica*</small>';
        echo '<input type="text" class="form-control address addressd'.((!isset($order['streetd']) and $backStatus) ? ' required' : '').'" name="streetd" id="street" '.(isset($order['streetd']) ? 'value="'.$order['streetd'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
        echo '<div class="row">';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Numer domu*</small>';
                echo '<input type="text" class="form-control address addressd'.((!isset($order['numberd']) and $backStatus) ? ' required' : '').'" name="numberd" id="number" '.(isset($order['numberd']) ? 'value="'.$order['numberd'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Numer mieszkania</small>';
                echo '<input type="text" class="form-control address addressd" name="flatd" id="flat" '.(isset($order['flatd']) ? 'value="'.$order['flatd'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
        echo '</div>';
        echo '<div class="row">';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Kod pocztowy*</small>';
                echo '<input type="text" class="form-control address addressd'.((!isset($order['postd']) and $backStatus) ? ' required' : '').'" name="postd" id="post" '.(isset($order['postd']) ? 'value="'.$order['postd'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
            echo '<div class="col-xs-12 col-md-6 no-border">';
                echo '<small>Miasto*</small>';
                echo '<input type="text" class="form-control address addressd'.((!isset($order['cityd']) and $backStatus) ? ' required' : '').'" name="cityd" id="city" '.(isset($order['cityd']) ? 'value="'.$order['cityd'].'"' : 'placeholder="'.$l_wpisz.'"').'/>';
            echo '</div>';
        echo '</div>';
        echo '<small>Odpowiednie pola zostaną automatycznie wypełnione na podstawie danych wprowadzonych w formularzu dla "adresu rozliczeniowego"';
        echo ' (jeśli adres dostawy ma być inny niż adres rozliczeniowy, wówczas należy zmienić powyższe dane)</small>';

    echo '</div>';

echo '</div>';

echo '</form>';

require_once 'content/section/order-move.php';