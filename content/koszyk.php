<?php

require_once 'content/section/order-process.php';

if($backStatus) {

    echo '<div class="order-alert">'.$l_orderAlert[$content].' <i class="far fa-smile"></i></div>';

}

echo '<div class="row">';

    echo '<div class="col-xs-12" style="text-align: center; width: 100%; padding-bottom: 20px;">';

        require_once 'section/cart.php';

    echo '</div>';

echo '</div>';

require_once 'content/section/order-move.php';