<?php

if(isset($day)) {
    
    $openCheck = false;
    if(in_array(date('l'), $day)) {

        if(isset($time) and is_array($time)) {

            $open = explode(':', $time[0]);

            $close = explode(':', $time[1]);

            $currentHour = (int)date('G');

            if($currentHour >= (int)$open[0] and $currentHour <= (int)$close[0]) {

                if($currentHour == (int)$open[0] or $currentHour == (int)$close[0]) {

                    $currentMinute = (int)ltrim(date('i'), 0);

                    if($currentHour == (int)$open[0]) {

                        if((int)$open[1] > $currentMinute)
                            $openCheck = true;

                    }

                    if($currentHour == (int)$close[0]) {

                        if((int)$close[1] > $currentMinute)
                            $openCheck = true;

                    }

                }else $openCheck = true;

            }

        }

    }

}