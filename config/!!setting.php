<?php
$s_title = 'Elektrozawory
 do wody, gazu, zawory elektromagnetyczne - producent ode.it';
$s_description = 'Oferujemy różnego rodzaju elektrozawory do wody, gazu oraz automatyki przemysłowej wielu producentów. Każdy zawór elektromagnetyczny w naszej ofercie opisany jest w szczegóowej dokumentacji.';

// start Sunrise opt
$sunrise_title = '';
$sunrise_desc = '';
$sunrise_uri = $_SERVER['REQUEST_URI'];
$sunrise_brand = 'AQUA - Elektrozawory';
// end Sunrise opt

$s_dirChar = '.';
$s_detailDefault = '';
$s_dirDocumentation = 'karta';
$s_domain = 'elektrozawory.pl';
$s_protocol = 'https://';
$s_currency = 'zł';
$s_email = 'd.krawiec@aqua.net.pl'; //administrator sklepu
$s_email_system = 'zamowienie@elektrozawory.pl'; //nadawca email
$s_email_encode = 'Windows-1250';
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
            0 => 'Normalnie otwarty',
            1 => 'Normalnie zamknięty'
        ), 'required' => true,
		'description' => array(
			0 => 'Zawór bezprądowo otwarty, w stanie spoczynku swobodnie przepuszcza medium - zamyka się gdy cewka jest zasilana',
			1 => 'Zawór bezprądowo zamknięty, w stanie spoczynku nie przepuszcza medium - otwiera się gdy cewka jest zasilana'
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
            8 => 'Media agresywne'
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
    ),
    5 => array('name' => 'Materiał wykonania korpusu', 
        'value' => array(
            0 => 'Mosiądz',
            1 => 'Stal nierdzewna 304/kwasoodporna 316',
            2 => 'Plastik'
        ), 'required' => false,
		'description' => array()
    )
);

$s_requiredArray = array(0, 1, 2);

//0 - funkcja dzialania (0 - 'normalnie otwarty', 1 - 'normalnie zamkniety')
//1 - srednica przylacza (0 - '1/8', 1 - '1/4', 2 - '3/8', 3 - '1/2', 4 - '3/4', 5 - '1', 6 - '1 1/4', 7 - '1 1/2', 8 - '2', 9 - '2 1/2', 10 - '3', 11 - 'DN65', 12 - 'DN80', 13 - 'DN100')
//2 - rodzaj medium (0 - 'Woda do 60 stopni C', 1 - 'Woda do 90 stopni C', 2 - 'Woda do 120', 3 - 'Para do 140 stopni C', 4 - 'Para do 180 stopni C', 5 - 'Powietrze', 6 - 'Olej', 7 - 'Glikol', 8 - 'Media agresywne')
//3 - uszczelnienie (0 - 'NBR', 1 - 'EPDM', 2 - 'Viton', 3 - 'Teflon')
//4 - zasada dzialania (0 - 'Pośredniego działania', 1 - 'Bezpośredniego / kombinowanego działania')
//5 - material wykonania korpusu (0 => 'Mosiądz', 1 => 'Stal nierdzewna 304 / kwasoodporna 316', 2 => 'Plastik')

$s_filterProduct = array(
    '21WA4KOB130-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21WA4ZOB130-8W' => array(
        0 => array(0),
        1 => array(3),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W3KB190-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W4KB250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W5KB350-8W' => array(
        0 => array(1),
        1 => array(6),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W6KB400-8W' => array(
        0 => array(1),
        1 => array(7),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W7KB500-8W' => array(
        0 => array(1),
        1 => array(8),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W3KE190-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W4KE250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W5KE350-8W' => array(
        0 => array(1),
        1 => array(6),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W6KE400-8W' => array(
        0 => array(1),
        1 => array(7),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W7KE500-8W' => array(
        0 => array(1),
        1 => array(8),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W3KV190-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W4KV250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W5KV350-8W' => array(
        0 => array(1),
        1 => array(6),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W6KV400-8W' => array(
        0 => array(1),
        1 => array(7),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W7KV500-8W' => array(
        0 => array(1),
        1 => array(8),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W3ZB190-8W' => array(
        0 => array(0),
        1 => array(4),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W4ZB250-8W' => array(
        0 => array(0),
        1 => array(5),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W5ZB350-8W' => array(
        0 => array(0),
        1 => array(6),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W6ZB400-8W' => array(
        0 => array(0),
        1 => array(7),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W7ZB500-8W' => array(
        0 => array(0),
        1 => array(8),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21W3ZE190-8W' => array(
        0 => array(0),
        1 => array(4),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W4ZE250-8W' => array(
        0 => array(0),
        1 => array(5),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W5ZE350-8W' => array(
        0 => array(0),
        1 => array(6),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W6ZE400-8W' => array(
        0 => array(0),
        1 => array(7),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W7ZE500-8W' => array(
        0 => array(0),
        1 => array(8),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21W3ZV190-8W' => array(
        0 => array(0),
        1 => array(4),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W4ZV250-8W' => array(
        0 => array(0),
        1 => array(5),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W5ZV350-8W' => array(
        0 => array(0),
        1 => array(6),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W6ZV400-8W' => array(
        0 => array(0),
        1 => array(7),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21W7ZV500-8W' => array(
        0 => array(0),
        1 => array(8),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21H7KB120-8W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21H7KB120-14W-DC' => array(
        0 => array(1),
        1 => array(2),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21H8KB120-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21H8KB120-14W-DC' => array(
        0 => array(1),
        1 => array(3),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21H7KE120-8W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21H7KE120-14W-DC' => array(
        0 => array(1),
        1 => array(2),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21H8KE120-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21H8KE120-14W-DC' => array(
        0 => array(1),
        1 => array(3),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21H7KV120-8W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21H7KV120-14W-DC' => array(
        0 => array(1),
        1 => array(2),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21H8KV120-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21H8KV120-14W-DC' => array(
        0 => array(1),
        1 => array(3),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21H9KB180-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21H9KB180-14W-DC' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 1, 5),
        3 => array(0),
        4 => array(0),
        5 => array(0)
    ),
    '21H9KE180-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21H9KE180-14W-DC' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 1, 2, 3, 7),
        3 => array(1),
        4 => array(0),
        5 => array(0)
    ),
    '21H9KV180-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    '21H9KV180-14W-DC' => array(
        0 => array(1),
        1 => array(4),
        2 => array(0, 5, 6, 8),
        3 => array(2),
        4 => array(0),
        5 => array(0)
    ),
    //Seria 21H11-14K
    '21H12KOE120-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(1),
        3 => array(0, 1, 2, 3, 7),
        4 => array(1),
        5 => array(0)
    ),
    '21H12KOE120-14W-DC' => array(
        0 => array(1),
        1 => array(3),
        2 => array(1),
        3 => array(0, 1, 2, 3, 7),
        4 => array(1),
        5 => array(0)
    ),
    '21H13KOE190-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(1),
        3 => array(0, 1, 2, 3, 7),
        4 => array(1),
        5 => array(0)
    ),
    '21H13KOE190-14W-DC' => array(
        0 => array(1),
        1 => array(4),
        2 => array(1),
        3 => array(0, 1, 2, 3, 7),
        4 => array(1),
        5 => array(0)
    ),
    '21H14KOE250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(1),
        3 => array(0, 1, 2, 3, 7),
        4 => array(1),
        5 => array(0)
    ),
    '21H14KOE250-14W-AC-DC' => array(
        0 => array(1),
        1 => array(5),
        2 => array(1),
        3 => array(0, 1, 2, 3, 7),
        4 => array(1),
        5 => array(0)
    ),
    '21H12KOV120-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21H12KOV120-14W-DC' => array(
        0 => array(1),
        1 => array(3),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21H13KOV190-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21H13KOV190-14W-DC' => array(
        0 => array(1),
        1 => array(4),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21H14KOV250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21H14KOV250-14W-AC-DC' => array(
        0 => array(1),
        1 => array(5),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    //Seria HF7_8K - 25-09-2018
    '21HF7KOB350-8W' => array(
        0 => array(1),
        1 => array(6),
        2 => array(0),
        3 => array(0, 1, 5),
        4 => array(1),
        5 => array(0)
    ),
    '21HF7KOB350-14W-DC' => array(
        0 => array(1),
        1 => array(6),
        2 => array(0),
        3 => array(0, 1, 5),
        4 => array(1),
        5 => array(0)
    ),
    '21HF8KOB400-8W' => array(
        0 => array(1),
        1 => array(7),
        2 => array(0),
        3 => array(0, 1, 5),
        4 => array(1),
        5 => array(0)
    ),
    '21HF8KOB400-14W-DC' => array(
        0 => array(1),
        1 => array(7),
        2 => array(0),
        3 => array(0, 1, 5),
        4 => array(1),
        5 => array(0)
    ),
    //Seria HT3-6K - 25-09-2018
    '21HT4KOY160' => array(
        0 => array(1),
        1 => array(3),
        2 => array(4),
        3 => array(0, 1, 5, 6),
        4 => array(1),
        5 => array(0)
    ),
    //Seria IH3-8K - 25-09-2018
    '21IH3K1V150-8W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21IH3K1V150-14W-DC' => array(
        0 => array(1),
        1 => array(2),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21IH4K1V160-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21IH4K1V160-14W-DC' => array(
        0 => array(1),
        1 => array(3),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21IH5K1V200-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21IH5K1V200-14W-DC' => array(
        0 => array(1),
        1 => array(4),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21IH6K1V250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21IH6K1V250-14W-DC' => array(
        0 => array(1),
        1 => array(5),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21A2KV30-8W' => array(
        0 => array(1),
        1 => array(1),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A2KV30-14W' => array(
        0 => array(1),
        1 => array(1),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A3KV25-8W' => array(
        0 => array(1),
        1 => array(0),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A3KV25-14W' => array(
        0 => array(1),
        1 => array(0),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A5KV45-8W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A5KV45-14W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A5KT55-8W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A5KT55-14W' => array(
        0 => array(1),
        1 => array(2),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A8KV55-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A8KV55-14W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A8KT55-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A8KT55-14W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(0)
    ),
    '21A2KOT-XC' => array(
        0 => array(1),
        1 => array(1),
        2 => array(0, 1, 2, 3, 4, 6, 8),
        3 => array(3),
        4 => array(1),
        5 => array(0)
    ), 
    '21YW4KOT130-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(0),
        5 => array(0)
    ),
    '21YW5KOT190-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(0),
        5 => array(0)
    ),
    '21YW6KOT250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(0),
        5 => array(0)
    ), 
    '21YC4KOT130-8W' => array(
        0 => array(1),
        1 => array(3),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(0),
        5 => array(0)
    ),
    '21YC5KOT190-8W' => array(
        0 => array(1),
        1 => array(4),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(0),
        5 => array(0)
    ),
    '21YC6KOT250-8W' => array(
        0 => array(1),
        1 => array(5),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(0),
        5 => array(0)
    ),
    '21L2K1T30-8W' => array(
        0 => array(1),
        1 => array(1),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21L2K1T30-14W' => array(
        0 => array(1),
        1 => array(1),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(1)
    ),  
    '21L1K1T30-8W' => array(
        0 => array(1),
        1 => array(0),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21L1K1T30-14W' => array(
        0 => array(1),
        1 => array(0),
        2 => array(3),
        3 => array(0, 1, 2, 3, 4, 6, 8),
        4 => array(1),
        5 => array(1)
    ),
    '21JN1ROV23-5W' => array(
        0 => array(1),
        1 => array(0),
        2 => array(2),
        3 => array(0, 5, 6, 8),
        4 => array(1),
        5 => array(0)
    )
);

$s_dataProduct = array(
    
    '21WA4KOB130-8W' => array('price' => 285.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21WA4KOB130-8W', 2 => '12', 3 => '~2', 4 => '13', 5 => '70', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'powietrze, gazy obojętne, woda',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) sterowany zaworem pilotowym (manualne sterowanie), normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie 0,2 bar, ciśnienie maksymalne 20 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21WA4ZOB130-8W' => array('price' => 410.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21WA4ZOB130-8W', 2 => '12', 3 => '~2', 4 => '13', 5 => '70', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) sterowany zaworem pilotowym (manualne sterowanie), normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar, ciśnienie maksymalne 20 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W3KB190-8W' => array('price' => 435.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21W3KB190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '140', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W4KB250-8W' => array('price' => 535.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21W4KB250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '190', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W5KB350-8W' => array('price' => 805.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21W5KB350-8W', 2 => '12', 3 => '~2', 4 => '35', 5 => '400', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W6KB400-8W' => array('price' => 885.00, 'parameter' => array(
        0 => 'G 1 1/2"', 1 => '21W6KB400-8W', 2 => '12', 3 => '~2', 4 => '40', 5 => '520', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W7KB500-8W' => array('price' => 1160.00, 'parameter' => array(
        0 => 'G 2"', 1 => '21W7KB500-8W', 2 => '12', 3 => '~2', 4 => '50', 5 => '750', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W3KE190-8W' => array('price' => 450.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21W3KE190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '140', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W4KE250-8W' => array('price' => 550.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21W4KE250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '190', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W5KE350-8W' => array('price' => 850.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21W5KE350-8W', 2 => '12', 3 => '~2', 4 => '35', 5 => '400', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W6KE400-8W' => array('price' => 930.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21W6KE400-8W', 2 => '12', 3 => '~2', 4 => '13', 5 => '70', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W7KE500-8W' => array('price' => 1220.00, 'parameter' => array(
        0 => 'G 2"', 1 => '21W7KE500-8W', 2 => '12', 3 => '~2', 4 => '50', 5 => '750', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W3KV190-8W' => array('price' => 450.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21W3KV190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '140', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W4KV250-8W' => array('price' => 550.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21W4KV250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '190', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W5KV350-8W' => array('price' => 850.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21W5KV350-8W', 2 => '12', 3 => '~2', 4 => '35', 5 => '400', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W6KV400-8W' => array('price' => 930.00, 'parameter' => array(
        0 => 'G 1 1/2"', 1 => '21W6KV400-8W', 2 => '12', 3 => '~2', 4 => '40', 5 => '520', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W7KV500-8W' => array('price' => 1220.00, 'parameter' => array(
        0 => 'G 2"', 1 => '21W7KV500-8W', 2 => '12', 3 => '~2', 4 => '50', 5 => '750', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W3ZB190-8W' => array('price' => 435.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21W3ZB190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '140', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W4ZB250-8W' => array('price' => 535.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21W4ZB250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '190', 6 => '8', 7 => '0,2', 8 => '16', 9 => '16'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W5ZB350-8W' => array('price' => 805.00, 'parameter' => array(
        0 => 'G 1 1/4"', 1 => '21W5ZB350-8W', 2 => '12', 3 => '~2', 4 => '35', 5 => '400', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W6ZB400-8W' => array('price' => 885.00, 'parameter' => array(
        0 => 'G 1 1/2"', 1 => '21W6ZB400-8W', 2 => '12', 3 => '~2', 4 => '40', 5 => '520', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W7ZB500-8W' => array('price' => 1160.00, 'parameter' => array(
        0 => 'G 2"', 1 => '21W7ZB500-8W', 2 => '12', 3 => '~2', 4 => '50', 5 => '750', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W3ZE190-8W' => array('price' => 450.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21W3ZE190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '140', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W4ZE250-8W' => array('price' => 550.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21W4ZE250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '190', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W5ZE350-8W' => array('price' => 850.00, 'parameter' => array(
        0 => 'G 1 1/4"', 1 => '21W5ZE350-8W', 2 => '12', 3 => '~2', 4 => '35', 5 => '400', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W6ZE400-8W' => array('price' => 930.00, 'parameter' => array(
        0 => 'G 1 1/2"', 1 => '21W6ZE400-8W', 2 => '12', 3 => '~2', 4 => '40', 5 => '520', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W7ZE500-8W' => array('price' => 1220.00, 'parameter' => array(
        0 => 'G 2"', 1 => '21W7ZE500-8W', 2 => '12', 3 => '~2', 4 => '50', 5 => '750', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W3ZV190-8W' => array('price' => 450.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21W3ZV190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '140', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W4ZV250-8W' => array('price' => 550.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21W7KV500-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '190', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W5ZV350-8W' => array('price' => 850.00, 'parameter' => array(
        0 => 'G 1 1/4"', 1 => '21W5ZV350-8W', 2 => '12', 3 => '~2', 4 => '35', 5 => '400', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W6ZV400-8W' => array('price' => 930.00, 'parameter' => array(
        0 => 'G 1 1/2"', 1 => '21W6ZV400-8W', 2 => '12', 3 => '~2', 4 => '40', 5 => '520', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21W7ZV500-8W' => array('price' => 1220.00, 'parameter' => array(
        0 => 'G 2"', 1 => '21W7ZV500-8W', 2 => '12', 3 => '~2', 4 => '50', 5 => '750', 6 => '8', 7 => '0,2', 8 => '10', 9 => '10'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,2 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H7KB120-8W' => array('price' => 270.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21H7KB120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '35', 6 => '8', 7 => '0,1', 8 => '20', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H7KB120-14W-DC' => array('price' => 350.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21H7KB120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '35', 6 => '14', 7 => '0,1', 8 => '20', 9 => '20'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H8KB120-8W' => array('price' => 270.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H8KB120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '45', 6 => '8', 7 => '0,1', 8 => '20', 9 => '10'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H8KB120-14W-DC' => array('price' => 350.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H8KB120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '45', 6 => '14', 7 => '0,1', 8 => '20', 9 => '20'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie otwarty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H7KE120-8W' => array('price' => 275.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21H7KE120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '35', 6 => '8', 7 => '0,1', 8 => '20', 9 => '10'
    ), 'medium' => 'woda, para wodna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H7KE120-14W-DC' => array('price' => 355.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21H7KE120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '35', 6 => '14', 7 => '0,1', 8 => '20', 9 => '20'
    ), 'medium' => 'woda, para wodna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H8KE120-8W' => array('price' => 275.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H8KE120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '45', 6 => '8', 7 => '0,1', 8 => '20', 9 => '10'
    ), 'medium' => 'woda, para wodna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H8KE120-14W-DC' => array('price' => 355.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H8KE120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '45', 6 => '14', 7 => '0,1', 8 => '20', 9 => '20'
    ), 'medium' => 'woda, para wodna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H7KV120-8W' => array('price' => 275.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21H7KV120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '35', 6 => '8', 7 => '0,1', 8 => '20', 9 => '10'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H7KV120-14W-DC' => array('price' => 355.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21H7KV120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '35', 6 => '14', 7 => '0,1', 8 => '20', 9 => '20'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H8KV120-8W' => array('price' => 275.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H8KV120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '45', 6 => '8', 7 => '0,1', 8 => '20', 9 => '10'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H8KV120-14W-DC' => array('price' => 355.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H8KV120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '45', 6 => '14', 7 => '0,1', 8 => '20', 9 => '20'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H9KB180-8W' => array('price' => 295.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H9KB180-8W', 2 => '12', 3 => '~2', 4 => '18', 5 => '50', 6 => '8', 7 => '0,1', 8 => '16', 9 => '3'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H9KB180-14W-DC' => array('price' => 375.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H9KB180-14W-DC', 2 => '12', 3 => '~2', 4 => '18', 5 => '50', 6 => '14', 7 => '0,1', 8 => '16', 9 => '16'
    ), 'medium' => 'powietrze, gazy obojętne, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H9KE180-8W' => array('price' => 300.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H9KE180-8W', 2 => '12', 3 => '~2', 4 => '18', 5 => '50', 6 => '8', 7 => '0,1', 8 => '16', 9 => '3'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H9KE180-14W-DC' => array('price' => 380.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H9KE180-14W-DC', 2 => '12', 3 => '~2', 4 => '18', 5 => '50', 6 => '14', 7 => '0,1', 8 => '16', 9 => '16'
    ), 'medium' => 'para niskoprężna, woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H9KV180-8W' => array('price' => 300.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H9KV180-8W', 2 => '12', 3 => '~2', 4 => '18', 5 => '50', 6 => '8', 7 => '0,1', 8 => '16', 9 => '3'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H9KV180-14W-DC' => array('price' => 380.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H9KV180-14W-DC', 2 => '12', 3 => '~2', 4 => '18', 5 => '50', 6 => '14', 7 => '0,1', 8 => '16', 9 => '16'
    ), 'medium' => 'olej opałowy (2oE), benzyna, ropa', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,1 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H12KOE120-8W' => array('price' => 340.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H12KOE120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '32', 6 => '8', 7 => '0', 8 => '16', 9 => '1,5'
    ), 'medium' => 'woda, niskie ciśnienie pary wodnej', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
        
    '21H12KOE120-14W-DC' => array('price' => 420.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H12KOE120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '32', 6 => '14', 7 => '0', 8 => '20', 9 => '15'
    ), 'medium' => 'woda, niskie ciśnienie pary wodnej', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H13KOE190-8W' => array('price' => 435.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H13KOE190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '70', 6 => '8', 7 => '0', 8 => '5', 9 => '-'
    ), 'medium' => 'woda, niskie ciśnienie pary wodnej', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H13KOE190-14W-DC' => array('price' => 515.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H13KOE190-14W-DC', 2 => '12', 3 => '~2', 4 => '19', 5 => '70', 6 => '14', 7 => '0', 8 => '15', 9 => '-'
    ), 'medium' => 'woda, niskie ciśnienie pary wodnej', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H14KOE250-8W' => array('price' => 550.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21H14KOE250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '105', 6 => '8', 7 => '0', 8 => '5', 9 => '-'
    ), 'medium' => 'woda, niskie ciśnienie pary wodnej', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H14KOE250-14W-AC-DC' => array('price' => 630.00, 'parameter' => array(
        0 => 'G 1', 1 => '21H14KOE250-14W-AC-DC', 2 => '12', 3 => '~2', 4 => '25', 5 => '105', 6 => '14', 7 => '0', 8 => '15', 9 => '-'
    ), 'medium' => 'woda, niskie ciśnienie pary wodnej', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H12KOV120-8W' => array('price' => 340.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H12KOV120-8W', 2 => '12', 3 => '~2', 4 => '12', 5 => '32', 6 => '8', 7 => '0', 8 => '16', 9 => '1,5'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy, benzyna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H12KOV120-14W-DC' => array('price' => 420.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21H12KOV120-14W-DC', 2 => '12', 3 => '~2', 4 => '12', 5 => '32', 6 => '14', 7 => '0', 8 => '20', 9 => '15'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy, benzyna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H13KOV190-8W' => array('price' => 435.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H13KOV190-8W', 2 => '12', 3 => '~2', 4 => '19', 5 => '70', 6 => '8', 7 => '0', 8 => '5', 9 => '-'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy, benzyna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H13KOV190-14W-DC' => array('price' => 515.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21H13KOV190-14W-DC', 2 => '12', 3 => '~2', 4 => '19', 5 => '70', 6 => '14', 7 => '0', 8 => '15', 9 => '-'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy, benzyna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H14KOV250-8W' => array('price' => 550.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21H14KOV250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '105', 6 => '8', 7 => '0', 8 => '5', 9 => '-'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy, benzyna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21H14KOV250-14W-AC-DC' => array('price' => 630.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21H14KOV250-14W-AC-DC', 2 => '12', 3 => '~2', 4 => '25', 5 => '105', 6 => '14', 7 => '0', 8 => '15', 9 => '-'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy, benzyna', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),

    '21HF7KOB350-8W' => array('price' => 855.00, 'parameter' => array(
        0 => 'G 1 1/4"', 1 => '21HF7KOB350-8W', 2 => '12', 3 => '~2', 4 => '35', 5 => '270', 6 => '8', 7 => '0', 8 => '16', 9 => '-'
    ), 'medium' => 'powietrze, gazy obojętne, woda',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Maksymalne ciśnienie 16 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21HF7KOB350-14W-DC' => array('price' => 935.00, 'parameter' => array(
        0 => 'G 1 1/4"', 1 => '21HF7KOB350-14W-DC', 2 => '12', 3 => '~2', 4 => '35', 5 => '270', 6 => '14', 7 => '0', 8 => '16', 9 => '6'
    ), 'medium' => 'powietrze, gazy obojętne, woda',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Maksymalne ciśnienie 16 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21HF8KOB400-8W' => array('price' => 950.00, 'parameter' => array(
        0 => 'G 1 1/2"', 1 => '21HF8KOB400-8W', 2 => '12', 3 => '~2', 4 => '40', 5 => '280', 6 => '8', 7 => '0', 8 => '16', 9 => '-'
    ), 'medium' => 'powietrze, gazy obojętne, woda',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Maksymalne ciśnienie 16 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21HF8KOB400-14W-DC' => array('price' => 1020.00, 'parameter' => array(
        0 => 'G 1 1/2"', 1 => '21HF8KOB400-14W-DC', 2 => '12', 3 => '~2', 4 => '40', 5 => '280', 6 => '14', 7 => '0', 8 => '16', 9 => '6'
    ), 'medium' => 'powietrze, gazy obojętne, woda',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Maksymalne ciśnienie 16 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21HT4KOY160' => array('price' => 370.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21HT4KOY160', 2 => '12', 3 => '~2', 4 => '16', 5 => '40', 6 => '8', 7 => '0', 8 => '14', 9 => '2,5'
    ), 'medium' => 'powietrze, gazy obojętne, woda, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, do cieczy, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza, pakowanie próżniowe.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH3K1V150-8W' => array('price' => 785.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21IH3K1V150-8W', 2 => '12', 3 => '~2', 4 => '15', 5 => '40', 6 => '8', 7 => '0', 8 => '14', 9 => '6'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH3K1V150-14W-DC' => array('price' => 865.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21IH3K1V150-14W-DC', 2 => '12', 3 => '~2', 4 => '15', 5 => '40', 6 => '14', 7 => '0', 8 => '-', 9 => '14'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH4K1V160-8W' => array('price' => 890.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21IH4K1V160-8W', 2 => '12', 3 => '~2', 4 => '16', 5 => '50', 6 => '8', 7 => '0', 8 => '14', 9 => '6'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH4K1V160-14W-DC' => array('price' => 970.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21IH4K1V160-14W-DC', 2 => '12', 3 => '~2', 4 => '16', 5 => '50', 6 => '14', 7 => '0', 8 => '-', 9 => '14'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH5K1V200-8W' => array('price' => 950.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21IH5K1V200-8W', 2 => '12', 3 => '~2', 4 => '20', 5 => '60', 6 => '8', 7 => '0', 8 => '14', 9 => '6'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH5K1V200-14W-DC' => array('price' => 1030.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21IH5K1V200-14W-DC', 2 => '12', 3 => '~2', 4 => '20', 5 => '60', 6 => '14', 7 => '0', 8 => '-', 9 => '14'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH6K1V250-8W' => array('price' => 1250.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21IH6K1V250-8W', 2 => '12', 3 => '~2', 4 => '25', 5 => '140', 6 => '8', 7 => '0', 8 => '14', 9 => '3'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21IH6K1V250-14W-DC' => array('price' => 1330.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21IH6K1V250-14W-DC', 2 => '12', 3 => '~2', 4 => '25', 5 => '140', 6 => '14', 7 => '0', 8 => '-', 9 => '14'
    ), 'medium' => 'oleje lekkie, olej napędowy',
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) kombinowanego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A2KV30-8W' => array('price' => 210.00, 'parameter' => array(
        0 => 'G 1/4"', 1 => '21A2KV30-8W', 2 => '53', 3 => '~7', 4 => '3', 5 => '4', 6 => '8', 7 => '0', 8 => '10', 9 => '6'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Uwaga: dostępne również z mosiężnym korpusem bez ołowiu.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A2KV30-14W' => array('price' => 290.00, 'parameter' => array(
        0 => 'G 1/4"', 1 => '21A2KV30-14W', 2 => '53', 3 => '~7', 4 => '3', 5 => '4', 6 => '14', 7 => '0', 8 => '25', 9 => '20'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A3KV25-8W' => array('price' => 210.00, 'parameter' => array(
        0 => 'G 1/8"', 1 => '21A3KV25-8W', 2 => '53', 3 => '~7', 4 => '2,5', 5 => '3,2', 6 => '8', 7 => '0', 8 => '14', 9 => '9'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Uwaga: dostępne również z mosiężnym korpusem bez ołowiu.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A3KV25-14W' => array('price' => 290.00, 'parameter' => array(
        0 => 'G 1/8"', 1 => '21A3KV25-14W', 2 => '53', 3 => '~7', 4 => '2,5', 5 => '3,2', 6 => '14', 7 => '0', 8 => '30', 9 => '25'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A5KV45-8W' => array('price' => 210.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21A5KV45-8W', 2 => '53', 3 => '~7', 4 => '4,5', 5 => '6,5', 6 => '8', 7 => '0', 8 => '5', 9 => '2'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A5KV45-14W' => array('price' => 290.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21A5KV45-14W', 2 => '53', 3 => '~7', 4 => '4,5', 5 => '6,5', 6 => '14', 7 => '0', 8 => '10', 9 => '8'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A5KT55-8W' => array('price' => 220.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21A5KT55-8W', 2 => '53', 3 => '~7', 4 => '5,5', 5 => '9', 6 => '8', 7 => '0', 8 => '3', 9 => '1'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A5KT55-14W' => array('price' => 300.00, 'parameter' => array(
        0 => 'G 3/8"', 1 => '21A5KT55-14W', 2 => '53', 3 => '~7', 4 => '5,5', 5 => '9', 6 => '14', 7 => '0', 8 => '10', 9 => '5'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A8KV55-8W' => array('price' => 210.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21A8KV55-8W', 2 => '53', 3 => '~7', 4 => '5,5', 5 => '9', 6 => '8', 7 => '0', 8 => '3', 9 => '1'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A8KV55-14W' => array('price' => 290.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21A8KV55-14W', 2 => '53', 3 => '~7', 4 => '5,5', 5 => '9', 6 => '14', 7 => '0', 8 => '10', 9 => '5'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21A8KT55-8W' => array('price' => 220.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21A8KT55-8W', 2 => '53', 3 => '~7', 4 => '5,5', 5 => '9', 6 => '8', 7 => '0', 8 => '3', 9 => '1'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
        
    '21A8KT55-14W' => array('price' => 300.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21A8KT55-14W', 2 => '53', 3 => '~7', 4 => '5,5', 5 => '9', 6 => '14', 7 => '0', 8 => '10', 9 => '5'
    ), 'medium' => 'oleje mineralne (2oE), benzyna, olej napędowy, olej opałowy (7oE)',
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 40 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
        
    '21A2KOT-XC' => array('price' => 350.00, 'parameter' => array(
        0 => 'G 1/4"', 1 => '21A2KOT-XC', 2 => '12', 3 => '~2', 4 => '1,2', 5 => '1', 6 => '8', 7 => '0', 8 => '100', 9 => '90'
    ), 'medium' => 'woda, powietrze', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa.
 Nie jest wymagane ciśnienie minimalne. Ciśnienie maksymalne 150 bar
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21YW4KOT130-8W' => array('price' => 780.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21YW4KOT130-8W', 2 => '-', 3 => '-', 4 => '13', 5 => '50', 6 => '8', 7 => '0,9', 8 => '10', 9 => '10'
    ), 'medium' => 'para, gorąca woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,9 bar. Ciśnienie maksymalne 25 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21YW5KOT190-8W' => array('price' => 880.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21YW5KOT190-8W', 2 => '-', 3 => '-', 4 => '19', 5 => '90', 6 => '8', 7 => '0,9', 8 => '10', 9 => '10'
    ), 'medium' => 'para, gorąca woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,9 bar. Ciśnienie maksymalne 25 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21YW6KOT250-8W' => array('price' => 1010.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21YW6KOT250-8W', 2 => '-', 3 => '-', 4 => '25', 5 => '160', 6 => '8', 7 => '0,9', 8 => '10', 9 => '10'
    ), 'medium' => 'para, gorąca woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,9 bar. Ciśnienie maksymalne 25 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21YC4KOT130-8W' => array('price' => 780.00, 'parameter' => array(
        0 => 'G 1/2"', 1 => '21YC4KOT130-8W', 2 => '-', 3 => '-', 4 => '13', 5 => '50', 6 => '8', 7 => '0,9', 8 => '10', 9 => '10'
    ), 'medium' => 'para, gorąca woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,9 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21YC5KOT190-8W' => array('price' => 880.00, 'parameter' => array(
        0 => 'G 3/4"', 1 => '21YC5KOT190-8W', 2 => '-', 3 => '-', 4 => '19', 5 => '90', 6 => '8', 7 => '0,9', 8 => '10', 9 => '10'
    ), 'medium' => 'para, gorąca woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,9 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21YC6KOT250-8W' => array('price' => 1010.00, 'parameter' => array(
        0 => 'G 1"', 1 => '21YC6KOT250-8W', 2 => '-', 3 => '-', 4 => '25', 5 => '160', 6 => '8', 7 => '0,9', 8 => '10', 9 => '10'
    ), 'medium' => 'para, gorąca woda', 
       'description' => 'Zawór elektromagnetyczny 2/2-drożny (drogowy) sterowany zaworem pilotowym do cieczy, pośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie minimalne 0,9 bar.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21L2K1T30-8W' => array('price' => 480.00, 'parameter' => array(
        0 => 'G 1/8"', 1 => '21L2K1T30-8W', 2 => '53', 3 => '~7', 4 => '3', 5 => '4', 6 => '8', 7 => '0', 8 => '10', 9 => '6'
    ), 'medium' => 'woda demiralizowana, para, soki, związki chemiczne nie wchodzące w reakcję ze stalą nierdzewną', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: związki chemiczne, napoje.
 Wymagane ciśnienie nie jest wymagane.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21L2K1T30-14W' => array('price' => 560.00, 'parameter' => array(
        0 => 'G 1/8"', 1 => '21L2K1T30-14W', 2 => '53', 3 => '~7', 4 => '3', 5 => '4', 6 => '14', 7 => '0', 8 => '25', 9 => '20'
    ), 'medium' => 'woda demiralizowana, para, soki, związki chemiczne nie wchodzące w reakcję ze stalą nierdzewną', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: związki chemiczne, napoje.
 Wymagane ciśnienie nie jest wymagane.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21L1K1T30-8W' => array('price' => 480.00, 'parameter' => array(
        0 => 'G 1/8"', 1 => '21L1K1T30-8W', 2 => '53', 3 => '~7', 4 => '3', 5 => '4', 6 => '8', 7 => '0', 8 => '10', 9 => '6'
    ), 'medium' => 'woda demiralizowana, para, soki, związki chemiczne nie wchodzące w reakcję ze stalą nierdzewną', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: związki chemiczne, napoje.
 Wymagane ciśnienie nie jest wymagane.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21L1K1T30-14W' => array('price' => 560.00, 'parameter' => array(
        0 => 'G 1/8"', 1 => '21L1K1T30-14W', 2 => '53', 3 => '~7', 4 => '3', 5 => '4', 6 => '14', 7 => '0', 8 => '25', 9 => '20'
    ), 'medium' => 'woda demiralizowana, para, soki, związki chemiczne nie wchodzące w reakcję ze stalą nierdzewną', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: związki chemiczne, napoje.
 Wymagane ciśnienie nie jest wymagane.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
    
    '21JN1ROV23-5W' => array('price' => 175.00, 'parameter' => array(
        0 => 'G 1/8"', 1 => '21JN1ROV23-5W', 2 => '37', 3 => '~5', 4 => '2,3', 5 => '2,3', 6 => '5', 7 => '0', 8 => '18', 9 => '8'
    ), 'medium' => 'oleje mineralne (2oE), olej napędowy, olej opałowy (5oE)', 
       'description' => 'Zawór elektromagnetyczny do cieczy 2/2-drożny (drogowy) bezpośredniego działania, normalnie zamknięty.
 Zastosowanie: automatyka przemysłowa, technika ciepłownicza.
 Wymagane ciśnienie nie jest wymagane.
 Zastosowane materiały, konstrukcja i przeprowadzone testy gwarantują niezawodność i długotrwałość wyrobu'),
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

$s_delivery = array('Przesyłka kurierska', 25); //Koszt dostawy zamowienia (wartosc w zloty)

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