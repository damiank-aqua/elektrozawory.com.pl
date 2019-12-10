<?php

require_once './config/setting.php';

$productDir = scandir($s_productDir);

$count = 0;

$jsonOut = false;

if(count($productDir) > 0) {
    
    require_once './php/init.php';
    
    $json = array();
	
	echo '<h1 style="padding: 1em 0;">Spis zaworów elektromagnetycznych</h1>
<p>Poniżej znajdą Państwo spis wszystkich zaworów elektromagnetycznych dostępnych w naszej ofercie. Wystarczy wybrać konkretny produkt, aby poznać model, szczegóły jego budowy, parametry techniczne, dedykowane zastosowanie oraz cenę.</p>

<p>W naszym asortymencie znajdują się zawory elektromagnetyczne wykorzystywane w branży instalacyjnej, grzewczej oraz pompowej. Są to modele, które działają na wodę, powietrze, oleje mineralne, oleje napędowe, oleje opałowe, benzynę, parę wodną, gazy obojętne, oleje lekkie oraz ropę.</p>

<p>Kładziemy szczególny nacisk na to, aby nasi klienci jeszcze przed dokonaniem wyboru dobrze zapoznali się ze specyfikacją oferowanych produktów. Pozwoli to sięgnąć po najlepsze proponowane rozwiązanie. Oczywiście służymy naszą fachową pomocą: w razie pojawienia się pytań lub wątpliwości zachęcamy do kontaktu.<br><br></p>';

    foreach ($productDir as $i => $p) {

        if(stristr($p, $s_dirChar))
            continue;

        echo ($i - 1).'. <a href="elektrozawor,'.$p.','.$section->url($s_dataProduct[$p]['medium']).'" title="Elektrozawór: '.$p.' - '.$s_dataProduct[$p]['medium'].'">Model zaworu elektromagnetycznego: '.$p.' - medium: '.$s_dataProduct[$p]['medium'].'</a><br>';

        $count++;

    }

}
echo '<strong>Ilość wyświetlona: '.$count.'</strong>';