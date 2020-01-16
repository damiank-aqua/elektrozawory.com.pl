<?php

echo '<nav class="navbar navbar-light" id="'.$in.'" lang="fa-bars:fa-times">';

    echo '<a href="tel:+48693053015">Opiekun sklepu: 693 053 015</a>';

    if($in == 'mobile')
        echo '<section><i class="fas fa-bars fa-2x"></i></section>';
        
    echo '<div>';

        foreach ($l_menu as $i => $m) {

            $active = '-outline';
            if($i == $content)
                $active = '';
			
			$showNext = '';
			if($i == 'produkty')
				$showNext = ' show-next';
			
			$productLink = '';
			if($in == 'mobile' and $i == 'produkty')
				$productLink = ' product-link';

            echo '<a href="'.$i.'" class="btn btn'.$active.'-light'.$showNext.''.$productLink.'" title="'.$m.'">'.$m.'</a>';
			
			if($in == 'mobile' and $i == 'produkty') {
				
				echo '<div class="product-icon show-next-click-mobile"><i class="fas fa-plus-circle"></i></div>';
				
				echo '<div class="clear"></div>';
				
			}
			
			
			if($i == 'produkty') {
				
				$submenuContent = array(
					array(
						'name' => 'Funkcja działania',
						'value' => array(
							'funkcja-dzialania_normalnie-otwarty' => 'Normalnie otwarte',
							'funkcja-dzialania_normalnie-zamkniety' => 'Normalnie zamknięte'
						)
					),
					array(
						'name' => 'Średnica przyłącza',
						'value' => array(
							'srednica-przylacza_18' => '1/8"',
							'srednica-przylacza_14' => '1/4"',
							'srednica-przylacza_38' => '3/8"',
							'srednica-przylacza_12' => '1/2"',
							'srednica-przylacza_34' => '3/4"',
							'srednica-przylacza_1' => '1"',
							'srednica-przylacza_1-14' => '1 1/4"',
							'srednica-przylacza_1-12' => '1 1/2"',
							'srednica-przylacza_2' => '2"',
							'srednica-przylacza_2-12' => '2 1/2"',
							'srednica-przylacza_3' => '3"',
							'srednica-przylacza_dn65' => 'DN65"',
							'srednica-przylacza_dn80' => 'DN80"',
							'srednica-przylacza_dn100' => 'DN100"'
						)
					),
					array(
						'name' => 'Rodzaj medium',
						'value' => array(
							'rodzaj-medium_woda-do-60-stopni-celsjusza' => 'Woda do 60 stopni Celsjusza',
							'rodzaj-medium_woda-do-90-stopni-celsjusza' => 'Woda do 90 stopni Celsjusza',
							'rodzaj-medium_woda-do-120-stopni-celsjusza' => 'Woda do 120 stopni Celsjusza',
							'rodzaj-medium_para-do-140-stopni-celsjusza' => 'Para do 140 stopni Celsjusza',
							'rodzaj-medium_para-do-180-stopni-celsjusza' => 'Para do 180 stopni Celsjusza',
							'rodzaj-medium_powietrze' => 'Powietrze',
							'rodzaj-medium_olej' => 'Olej',
							'rodzaj-medium_glikol' => 'Glikol',
							'rodzaj-medium_media-agresywne' => 'Media agresywne'
						)
					),
					array(
						'name' => 'Uszczelnienie',
						'value' => array(
							'uszczelnienie_nbr' => 'NBR',
							'uszczelnienie_epdm' => 'EPDM',
							'uszczelnienie_viton' => 'VITON',
							'uszczelnienie_teflon' => 'TEFLON'
						)
					),
					array(
						'name' => 'Zasada działania',
						'value' => array(
							'zasada-dzialania_posredniego-dzialania' => 'Pośredniego działania',
							'zasada-dzialania_bezposredniegokombinowanego-dzialania' => 'Bezpośredniego/kombinowanego działania'
						)
					)//,
//					array(
//						'name' => 'Materiał wykonania korpusu',
//						'value' => array(
//							'material-wykonania-korpusu_mosiadz' => 'Mosiądz',
//							'material-wykonania-korpusu_stal-nierdzewna-304kwasoodporna-316' => 'Stal nierdzewna 304/kwasoodporna 316',
//							'material-wykonania-korpusu_plastik' => 'Plastik'
//						)
//					)
				);
				
				echo '<div class="submenu hide">';
				
				foreach($submenuContent as $sc) {

						echo '<div>';
						
							echo '<div class="name show-next-click">'.$sc['name'].' <i class="fas fa-chevron-down"></i></div>';
							
							echo '<div class="separator hide">';
						
							echo '<ul>';
							
								foreach($sc['value'] as $i => $v) {
									
									$selected = '';
									if($i == $detail)
										$selected = ' class="a-selected"';
							
									echo '<li><a href="produkty,'.$i.'" title="'.$v.'"'.$selected.'>'.$v.'</a></li>';
								
								}
							
							echo '</ul>';
							
							echo '</div>';
						
						echo '</div>';

					
				
				}
				
				echo '</div>';
				
			}

        }

    echo '</div>';

echo '</nav>';

echo '<style>
.submenu{
	padding: 5px; 
	background-color: #fff; 
	position: absolute; 
	z-index: 2; 
	margin-left: 1px; 
	margin-top: 12px;
	min-width: 300px;
	opacity: 0.96;
}
.submenu svg{
	float: right;
	margin: 4px;
}
.submenu .name{
	font-size: 13px;
	cursor: pointer;
	width: 100%;
	padding: 5px;
	background-color: #eee;
	color: #777;
}
.submenu .name:hover{
	background-color: #ddd;
}
.submenu .separator{
	
}
.submenu ul, .submenu li, .submenu a{
	margin: 0 !important;
}
.submenu ul{
	border-left: 1px solid #eee;
	border-right: 1px solid #eee;
}
.submenu a{
	font-size: 12px !important;
}
.a-selected{
	font-weight: bold;
}
.product-link{
	float: left;
	width: 90% !important;
	padding-left: 12%;
}
.product-icon{
	float: right;
	width: 9%;
	color: #fff;
	text-align: center;
	font-size: 24px;
	padding-top: 2px;
	cursor: pointer;
}
.product-icon svg{
	width: 100%;
}
.clear{
	clear: both;
}
@media (max-width: 900px) {
	.submenu{
		position: unset;
		margin-top: 0;
		width: 100%;
	}
}
</style>';