<?php

    $search = '';
    if(isset($_SESSION['search']) and $_SESSION['search'] != '') {
        
        $search = $_SESSION['search'];

    }
    
?>
<div id="search">
    <p style="position:absolute; cursor: pointer; left: 5px; top: 23px; display:none"><i class="fas fa-times"></i></p>
    <input type="text" placeholder="<?php echo $l_modelElektrozaworu; ?>..." value="<?php echo $search; ?>" title="Wyszukaj model zaworu elektromagnetycznego">
    <button title="Przeszukaj bazę danych..."><span>Szukaj</span> <i class="fas fa-search"></i></button>
</div>