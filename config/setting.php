<?php
$s_title = 'Elektrozawory do wody, gazu, zawory elektromagnetyczne, hydraulika - Zielona Góra';
$s_description = 'Oferujemy różnego rodzaju elektrozawory do wody, gazu oraz automatyki przemysłowej wielu producentów. Każdy zawór elektromagnetyczny w naszej ofercie opisany jest w szczegóowej dokumentacji.';

// start Sunrise opt
$sunrise_title = '';
$sunrise_desc = '';
$sunrise_uri = $_SERVER['REQUEST_URI'];
$sunrise_brand = 'AQUA - Elektrozawory.pl';
// end Sunrise opt

$s_dirChar = '.';
$s_detailDefault = '';
$s_dirDocumentation = 'karta';
$s_domain = 'elektrozawory.pl';
$s_protocol = 'https://';
$s_currency = 'zł';
$s_email = 'd.krawiec@aqua.net.pl'; //administrator sklepu
$s_email_system = 'zamowienie@elektrozawory.pl'; //nadawca email
$s_email_encode = 'Utf-8';
$s_page = array(
    'produkty' => 'produkty',
    'koszyk' => 'koszyk',
    'realizacja' => 'realizacja',
    'adres' => 'adres',
    'platnosc' => 'platnosc',
    'podsumowanie' => 'podsumowanie',
    'elektrozawor' => 'elektrozawor',
    'zamowienia' => 'zamowienia',
    'merchant' => 'merchant',
    'mapa-zaworow-elektromagnetycznych' => 'mapa-zaworow-elektromagnetycznych'
);
$s_securityPin = '1981';
$s_productDir = 'product';
$s_back = '-uwaga';
$s_orderPath = 'order';
$s_zamowienie = 'zamowienie';
$numberFile = 3;

$s_filter = array(
    0 => array('name' => 'Funkcja działania', 
        'value' => array(
            0 => 'Normalnie zamknięty',
            1 => 'Normalnie otwarty'
        ), 'required' => true,
		'description' => array(
			0 => 'Zawór bezprądowo zamknięty, w stanie spoczynku nie przepuszcza medium - otwiera się gdy cewka jest zasilana',
			1 => 'Zawór bezprądowo otwarty, w stanie spoczynku swobodnie przepuszcza medium - zamyka się gdy cewka jest zasilana'
		)
    ),
    1 => array('name' => 'Średnica przyłącza', 
        'value' => array(
            0 => '1/8"',
            1 => '1/4"',
            2 => '3/8"',
            3 => '1/2"',
            4 => '3/4"',
            5 => '1"',
            6 => '1 1/4"',
            7 => '1 1/2"',
            8 => '2"',
            9 => '2 1/2"',
            10 => '3"',
            11 => 'DN65',
            12 => 'DN80',
            13 => 'DN100'
        ), 'required' => true,
		'description' => array()
    ),
    2 => array('name' => 'Rodzaj medium', 
        'value' => array(
            0 => 'Woda do 60 stopni Celsjusza', 
            1 => 'Woda do 90 stopni Celsjusza',
            2 => 'Woda do 120 stopni Celsjusza',
            3 => 'Para do 140 stopni Celsjusza',
            4 => 'Para do 180 stopni Celsjusza',
            5 => 'Powietrze', 
            6 => 'Olej',
            7 => 'Glikol',
            8 => 'Media agresywne',
            9 => 'Lekkie oleje'
        ), 'required' => true,
		'description' => array()
    ),
    3 => array('name' => 'Uszczelnienie',
        'value' => array(
            0 => 'NBR',
            1 => 'EPDM',
            2 => 'Viton',
            3 => 'Teflon'
        ), 'required' => false,
		'description' => array()
    ),
    4 => array('name' => 'Zasada działania', 
        'value' => array(
            0 => 'Pośredniego działania',
            1 => 'Bezpośredniego/kombinowanego działania'
        ), 'required' => false,
		'description' => array(
			0 => 'Zawór wymagający minimalnego ciśnienia różnicowego',
			1 => 'Zawór niewymagający minimalnego ciśnienia różnicowego'
		)
    )//,
//    5 => array('name' => 'Materiał wykonania korpusu',
//        'value' => array(
//            0 => 'Mosiądz',
//            1 => 'Stal nierdzewna 304/kwasoodporna 316',
//            2 => 'Plastik'
//        ), 'required' => false,
//		'description' => array()
//    )
);

$s_requiredArray = array(0, 1, 2);

//0 - funkcja dzialania (0 - 'normalnie zamkniety', 1 - 'normalnie otwarty')
//1 - srednica przylacza (0 - '1/8', 1 - '1/4', 2 - '3/8', 3 - '1/2', 4 - '3/4', 5 - '1', 6 - '1 1/4', 7 - '1 1/2', 8 - '2', 9 - '2 1/2', 10 - '3', 11 - 'DN65', 12 - 'DN80', 13 - 'DN100')
//2 - rodzaj medium (0 - 'Woda do 60 stopni C', 1 - 'Woda do 90 stopni C', 2 - 'Woda do 120', 3 - 'Para do 140 stopni C', 4 - 'Para do 180 stopni C', 5 - 'Powietrze', 6 - 'Olej', 7 - 'Glikol', 8 - 'Media agresywne', 9 - 'Lekkie oleje')
//3 - uszczelnienie (0 - 'NBR', 1 - 'EPDM', 2 - 'Viton', 3 - 'Teflon')
//4 - zasada dzialania (0 - 'Pośredniego działania', 1 - 'Bezpośredniego / kombinowanego działania')
//5 - material wykonania korpusu (0 => 'Mosiądz', 1 => 'Stal nierdzewna 304 / kwasoodporna 316', 2 => 'Plastik')

$s_filterProduct = array(
    '27ZE6AJE' => array(
        0 => array(0),
        1 => array(4),
        2 => array(0, 1, 2, 7),
        3 => array(1),
        4 => array(1)
    ),
    '25ZP5AJF' => array(
        0 => array(0),
        1 => array(5),
        2 => array(0, 1, 2, 3, 4, 6, 8, 9),
        3 => array(3),
        4 => array(0)
    ),
    '25ON1MZE' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 1, 5, 9),
        3 => array(0),
        4 => array(0)
    )
);

$s_dataProduct = array(
    
    '27ZE6AJE' => array('price' => 300.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '27ZE6AJE', 2 => '12', 3 => '~2', 4 => '13', 5 => '70', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'woda, glokol',
       'description' => 'Zawór elektromagnetyczny 3/4 cala, normalnie zamknięty, bezpośredniego działania.
                         Zastosowanie: Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
    '25ZP5AJF' => array('price' => 680.00, 'parameter' => array(
        0 => 'G 1"', 1 => '27ZE6AJE', 2 => '12', 3 => '~2', 4 => '13', 5 => '70', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'woda, para, olej, media agresywne',
        'description' => 'Zawór elektromagnetyczny 1 cal, normalnie zamknięty, pośredniego działania.
                         Zastosowanie: Lorem Ipsum is simply dummy text of the printing and typesetting industry'),
    '25ON1MZE' => array('price' => 400.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '25ON1MZE', 2 => '12', 3 => '~2', 4 => '13', 5 => '70', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'woda, powietrze, lekkie oleje',
        'description' => 'Zawór elektromagnetyczny 3/4 cala, normalnie otwarty, pośredniego działania.
                         Zastosowanie: Lorem Ipsum is simply dummy text of the printing and typesetting industry')
);

$s_connectorPrice = 10;

$connectorPrice = number_format($s_connectorPrice, 2, ',', '');

$s_addCart = array(
    'connector:Connector (wtyczka)' => array('on' => 'tak (+'.$connectorPrice.' '.$s_currency.')', 'off' => 'nie'),
    'suspense:Napięcie' => array(1 => '230V~/50Hz', 2 => '24V~/50Hz', 3 => '24 V=', 4 => '12 V=', 5 => '110V=', 6 => '110V~/50Hz')
);

$s_suspense = array(
    1 => '230V~/50Hz',
    2 => '24V~/50Hz',
    3 => '24 V=',
    4 => '12 V=',
    5 => '110V=',
    6 => '110V~/50Hz'
);

$s_connector = array(
    'on' => 'tak',
    'off' => 'nie'
);

$s_delivery = array('Przesyłka kurierska', 20); //Koszt dostawy zamowienia (wartosc w zloty)

$s_deliveryFree = 2000; //Od jakiej wartosci koszyka brak kosztow dostawy (wartosc w zloty)

$s_payment = array(
    'odbior' => 'Płatność przy odbiorze',
    'online' => 'Płatność on-line (przelewy24.pl)',
    'przelew' => 'Przedpłata (faktura pro-forma)'
);

//Przelewy24
define('PRZELEWY24_MERCHANT_ID', '35825');
define('PRZELEWY24_CRC', 'c463a13420c86098');
// sandbox - środowisko testowe, secure - środowisko produkcyjne
define('PRZELEWY24_TYPE', 'secure');
// Powrotny adres URL
$s_p24_url_return = $s_protocol.$s_domain.'/realizacja';
// Adres dla weryfikacji platnosci (realizacja w php/client.php)
$s_p24_url_status = $s_protocol.$s_domain.'/realizacja';

$s_order = array(
    'person' => 'Osoba'
);