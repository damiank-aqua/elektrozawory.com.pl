<?php
//$_SESSION['filter'][id filtra] = id wartosci;

if($content == $s_page['produkty']) {

    if(isset($detail) and stristr($detail, '_')) {
        
        $_SESSION['filter'] = array();
        
        $display = new Display();
        
        $urlVar = array($detail, $last, $filter1, $filter2, $filter3, $filter4);
        
        foreach ($urlVar as $uv) {
        
            $urlArray = explode('_', $uv);
        
            foreach ($s_filter as $m => $fi) {

                if($display->url($fi['name']) == $urlArray[0]) {

                    foreach ($fi['value'] as $n => $va) {

                        if($display->url($va) == $urlArray[1]) {

                            $_SESSION['filter'][$m] = $n;

                        }

                    }

                    break;
                }

            }
        
        }

    }
    
}