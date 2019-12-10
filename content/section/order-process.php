<?php

echo '<div id="order-process">';

    echo '<div class="row">';

        foreach ($l_orderProcess as $i => $op){

            echo '<div class="col-xs-12 col-lg-3">';

            if($content == $op[0]) {

                $current = $op[1];

                if(isset($l_orderProcess[$i - 1])) {

                    $prev = $l_orderProcess[$i - 1];

                }

                if(isset($l_orderProcess[$i + 1])) {

                    $next = $l_orderProcess[$i + 1];

                }

                echo '<div class="select">'.$current.'</div>';

            }else{

                echo '<div><a href="#" class="move" id="'.$op[0].'">'.$op[1].'</a></div>';

            }

            echo '</div>';

        }

    echo '</div>';

echo '</div>';

if(isset($current))
    echo '<br><h1 style="text-align:center; font-size: 2rem">'.$current.'</h1>';