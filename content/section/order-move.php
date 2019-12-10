<?php
echo '<div class="row">';

    echo '<div class="col-xs-12" id="order-move">';

        if(isset($prev))
            echo '<a href="#" class="btn btn-secondary move" id="'.$prev[0].'"><i class="fa fa-angle-left" aria-hidden="true"></i> '.$prev[1].'</a>';

        if(isset($next))
            echo '<a href="#" class="btn btn-secondary move" id="'.$next[0].'">'.$next[1].' <i class="fa fa-angle-right" aria-hidden="true"></i></a>';
        
    echo '</div>';

echo '</div>';