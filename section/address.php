<?php

$correct = '<a href="'.$s_page['adres'].'">uzupełnij</a>';

echo '<div id="order-data">';

    echo '<div class="row">';

        echo '<div class="col-xs-12 col-md-6">';

            echo '<h3>Dane osobowe</h3>';

            echo '<small>Imię i nazwisko</small><br>';
            echo '<span class="orange">'.($order['person'] == '' ? '- '.$correct : $order['person']).'</span><br>';

            echo '<small>Adres e-mail</small><br>';
            echo '<span class="orange">'.($order['email'] == '' ? '- '.$correct : $order['email']).'</span><br>';

            echo '<small>Telefon kontaktowy</small><br>';
            echo '<span class="orange">'.($order['phone'] == '' ? '-' : $order['phone']).'</span><br>';

        echo '</div>';

        echo '<div class="col-xs-12 col-md-6">';

            echo '<h3>Dane firmowe</h3>';

            echo '<small>Nazwa firmy</small><br>';
            echo '<span class="orange">'.($order['company'] == '' ? '-' : $order['company']).'</span><br>';

            echo '<small>NIP</small><br>';
            echo '<span class="orange">'.($order['tax'] == '' ? '-' : $order['tax']).'</span>';

        echo '</div>';

    echo '</div>';

    echo '<div class="row">';

        echo '<div class="col-xs-12 col-md-6">';

            echo '<h3>'.$l_adresRozliczeniowy.':</h3>';

                echo '<small>Ulica</small><br>';
                echo '<span class="orange">'.($order['street'] == '' ? '- '.$correct : $order['street']).'</span><br>';

                echo '<small>Numer domu</small><br>';
                echo '<span class="orange">'.($order['number'] == '' ? '- '.$correct : $order['number']).'</span><br>';

                echo '<small>Numer mieszkania</small><br>';
                echo '<span class="orange">'.($order['flat'] == '' ? '-' : $order['flat']).'</span><br>';

                echo '<small>Kod pocztowy</small><br>';
                echo '<span class="orange">'.($order['post'] == '' ? '- '.$correct : $order['post']).'</span><br>';

                echo '<small>Miasto</small><br>';
                echo '<span class="orange">'.($order['city'] == '' ? '- '.$correct : $order['city']).'</span>';

        echo '</div>';

        echo '<div class="col-xs-12 col-md-6">';

            echo '<h3>'.$l_adresDostawy.':</h3>';

                echo '<small>Ulica</small><br>';
                echo '<span class="orange">'.($order['streetd'] == '' ? '- '.$correct : $order['streetd']).'</span><br>';

                echo '<small>Numer domu</small><br>';
                echo '<span class="orange">'.($order['numberd'] == '' ? '- '.$correct : $order['numberd']).'</span><br>';

                echo '<small>Numer mieszkania</small><br>';
                echo '<span class="orange">'.($order['flatd'] == '' ? '-' : $order['flatd']).'</span><br>';

                echo '<small>Kod pocztowy</small><br>';
                echo '<span class="orange">'.($order['postd'] == '' ? '- '.$correct : $order['postd']).'</span><br>';

                echo '<small>Miasto</small><br>';
                echo '<span class="orange">'.($order['cityd'] == '' ? '- '.$correct : $order['cityd']).'</span>';

        echo '</div>';

    echo '</div>';

echo '</div>';