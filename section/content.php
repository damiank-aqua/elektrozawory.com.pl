<?php

if($content == $s_page['zamowienia']) {
    
    if($_SESSION['pin'] == md5($s_securityPin)) {
    
        require_once 'order/index.php';
    
    }else{
        
        if(isset($_SESSION['pin']))
            echo 'Niepoprawny PIN!';
        
        echo '<form role="form" action="'.$content.'" method="post" id="login">';
        echo '<fieldset class="form-group">';
        echo '<input class="form-control" type="password" placeholder="Podaj PIN" name="pin">';
        echo '</fieldset>';
        echo '</form>';
        
    }
    
}else if($content == $s_page['merchant']) {

    require_once 'section/merchant.php';

}else{
    
    require_once 'content/'.$content.'.php';

}
