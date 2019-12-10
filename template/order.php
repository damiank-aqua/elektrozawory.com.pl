<?php

require_once 'php/script/cart.php';

require_once 'section/delivery.php';

$template = '';

$template .= 'Zamówienie numer: '.$orderNumber."\n\n";

$template .= 'Dane osobowe'."\n";

$template .= $order['person']."\n";

$template .= $order['email']."\n";

$phone = '-';
if($order['phone'] != '')
    $phone = $order['phone']."\n";

$template .= $phone;

$template .= "\n";

$template .= 'Dane firmowe'."\n";

$company = '-';
if($order['company'] != '')
    $company = $order['company']."\n";

$template .= $company;

$template .= "\n";

$tax = '-';
if($order['tax'] != '')
    $tax = $order['tax']."\n";

$template .= $tax;

$template .= "\n";

$template .= 'Szczegóły:'."\n";
    
foreach ($_SESSION['cart'] as $c) {

    $template .= $c['name']." | ";

    $template .= $c['parameter']." | ";
    
    $template .= $c['quantity']." | ";

    $template .= $section->number($s_dataProduct[$c['name']]['price']).' '.$s_currency." | ";

    $addPrice = $s_connectorPrice * $c['quantity'];
    if(stristr($c['parameter'], 'nie')) {

        $addPrice = 0;

    }
    
    $template .= '+'.$section->number($addPrice).' '.$s_currency." | ";
    
    $template .= $section->number($c['quantity'] * $s_dataProduct[$c['name']]['price'] + $addPrice).' '.$s_currency."\n";
    
}

$template .= "\n";

$template .= 'Ilość w zamówieniu: '.$sumCart."\n";

$template .= 'Suma koszyka: '.$section->number($valueCart). ' '.$s_currency."\n\n";

$template .= 'Adres roliczeniowy'."\n";

$template .= $order['street'].' ';

$template .= $order['number'];

if($order['flat'] != '')
    $template .= ' m. '.$order['flat']."\n\n";

$template .= "\n";

$template .= $order['post'].' ';

$template .= $order['city'];

$template .= "\n\n";

$template .= 'Adres dostawy'."\n";

$template .= $order['streetd'].' ';

$template .= $order['numberd'];

if($order['flatd'] != '')
    $template .= ' m. '.$order['flatd'];

$template .= "\n";

$template .= $order['postd'].' ';

$template .= $order['cityd'];

$template .= "\n\n";

$template .= $s_delivery[0].': '.$section->number($cost).' '.$s_currency."\n";

$template .= $l_doZaplaty.': '.$section->number($valueCart + $cost).' '.$s_currency."\n";

$template .= 'Sposób płatności: '.$s_payment[$_SESSION['pay']]."\n\n";

if($_SESSION['pay'] == 'odbior') {
    
    //Informacja o zaplacie kurierowi
    $template .= 'Płatność za zamówienie zostanie przekazana kurierowi podczas odbioru przesyłki.'."\n";
    $template .= 'W tym momencie pozostaje Ci już tylko oczekiwać na ewentualną informację od nas i oczywiście przesyłkę.'."\n\n";
}

if($_SESSION['pay'] == 'przelew') {
    
    //Dane do przelewu
    $template .= 'Po zaksięgowaniu płatności na poniższe dane zostanie przygotowane Twoje zamówienie'."\n";
    $template .= '"AQUA - Grupa SBS" sp. z o.o.'."\n";
    $template .= 'ul. Marii Skłodowskiej-Curie 25'."\n";
    $template .= '65-124 Zielona Góra'."\n";
    $template .= 'Numer rachunku: 78 1020 5402 0000 0102 0021 2589'."\n\n";
    
}

$template .= 'Komentarz: '.($_SESSION['comment'] == '' ? '-' : $_SESSION['comment']);

$template .= "\n\n".'Dziękujemy serdecznie! Zapraszamy ponownie.';