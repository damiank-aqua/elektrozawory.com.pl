<div>
<h1 class="text-center" style="font-size: 1.5em">FAQ</h1>
<p class="text-center">Dział sklepu, w którym inżynierowie produktu i programiści odpowiedzieli na najczęściej zadawane przez klientów pytania (dotyczące produktów, obsługi sklepu i realizacji zamówień)</p>		       
</div>
<?php
$configJson = file_get_contents('content/faq/config.json');

$configArray = json_decode($configJson);

if(count($configArray) > 0) {
	
	foreach($configArray->category as $ca) {
		
		foreach($ca as $i => $c) {
			
			echo '<h4>'.$c->name.'</h4>';
			
			$path = 'content/faq/'.$i;
			
			if (is_dir($path)) {
				
				if ($dh = opendir($path)) {

					$count = 0;
					while (($file = readdir($dh)) !== false) {
						
						if($file == '.' or $file == '..')
							continue;
						
						$count++;
						
						$content = file_get_contents($path.'/'.$file);
						
						if($content !== '') {
							
							echo $content;
							
						}
						
						
					}
					
					closedir($dh);
					
					if($count == 0)
						echo '<span class="badge">'.$l_brakWpisow.'</span>';
					
				}
				
			}
			
		}
		
	}
	
}