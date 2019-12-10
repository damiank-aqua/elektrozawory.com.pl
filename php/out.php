<?php
if($content == $s_page['realizacja']) {
    
    //Czyszczenie zmiennych sesji
    unset($_SESSION['order']);
    unset($_SESSION['cart']);
    unset($_SESSION['pay']);
    unset($_SESSION['filter']);
        
}