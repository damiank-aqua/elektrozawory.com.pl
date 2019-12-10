<?php

echo '<div class="product-box row">';

    require_once 'content/section/record.php';

echo '</div>';

echo '<div class="row">';

echo '<div class="col-xs-12" id="count">'.$l_podsumowanie.': '.$count.' '.$l_sztuk.'</div>';

echo '</div>';

echo '<div id="modal"><div class="white-popup"></div></div>';

if(isset($detail) and isset($last) and $last == $s_zamowienie) {
    
    echo '<input type="hidden" id="order" value="'.$detail.'">';
    
}