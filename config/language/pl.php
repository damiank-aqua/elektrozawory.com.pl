<?php

$l_dodajDoKoszyka = '<i class="fas fa-cart-plus fa-2x"></i><br>Dodaj do koszyka';
$l_szczegoly = 'Szczegóły';
$l_zamow = 'Zamów';
$l_zamowZaplata = 'Zamówienie z obowiązkiem zapłaty';
$l_dokumentacja = 'Dokumentacja';
$l_zapytaj = 'Zapytaj';
$l_podsumowanie = 'Ilość wyświetlona';
$l_sztuk = '';
$l_wybierz = 'Wszystkie wartości';
$l_koszyk = 'Koszyk';
$l_wtyczka = 'Wtyczka';
$l_napiecie = 'Napięcie';
$l_wpisz = 'Wpisz...';
$l_automatycznie = 'Pole zostanie automatycznie wypełnione';
$l_jakoFirma = 'Chcę rozliczyć zamówienie podając informacje firmowe';
$l_wpiszTelefon = '[Sugerowany format] 123-456-789';
$l_wpiszNip = '[Sugerowany format] 123-45-67-890';
$l_zastosuj = 'Zastosuj';
$l_darmowaPrzesylkaBrak = 'do darmowej dostawy brakuje';
$l_koszykIlosc = 'Liczba produktów w koszyku';
$l_koszykWartosc = 'Wartość koszyka';
$l_doZaplaty = 'Razem do zapłaty';
$l_uwagiDoZamowienia = 'Uwagi do zamówienia';
$l_adresRozliczeniowy = 'Adres rozliczeniowy';
$l_adresDostawy = 'Adres dostawy';
$l_stronaGlowna = 'Strona główna';
$l_filtryZamowienie = 'Aby zamówić towar, musisz określić: funkcję działania, średnicę przyłącza i rodzaj medium (filtracja w lewej części strony)';
$l_brakParametru = 'Brak parametru';
$l_modelElektrozaworu = 'Model elektrozaworu';

//@FAQ
$l_brakWpisow = 'Brak wpisów w kategorii';

//Realizacja zamowienia (indeksy to powrtotny url)
$l_orderAlert = array(
    'koszyk' => 'Aby móc zrealizować zamówienie, w pierwszej kolejności należy dodać choć jeden produkt do koszyka',
    'adres' => 'Aby przejść do wyboru sposobu płatności, najpierw wypełnij wszystkie wymagane pola',
    'platnosc' => 'Aby złożyć zamówienie, musisz wybrać sposób w jaki za nie zapłacisz'
);

$l_v_dodajDoKoszyka = '<i class="far fa-check-circle fa-2x"></i><br>Produkt dodany';
$l_v_zobaczKoszyk = '<a href="'.$s_page['koszyk'].'">Zobacz koszyk</a>';

//Etapy procesu zamowienia ($l_ poniewaz dla kazdego jezyka definicje beda inne)
$l_orderProcess = array(
    0 => array('koszyk', 'Podsumowanie koszyka'),
    1 => array('adres', 'Adres i dane rozliczeniowe'),
    //2 => array('dostawa', 'Sposób dostawy'),
    2 => array('platnosc', 'Sposób płatności'),
    3 => array('podsumowanie', 'Podsumowanie zamówienia')
);

//Definicja glownego menu (index - url, wartosc - wyswietlana nazwa)
$l_menu = array(
    'produkty' => 'Produkty',
    'koszyk' => 'Realizuj zamówienie',
    'regulamin' => 'Regulamin',
    'o-sklepie' => 'O sklepie',
    'regulamin' => 'Regulamin',
    'kontakt' => 'Kontakt',
    'dostawa' => 'Dostawa',
    'spis-zaworow-elektromagnetycznych' => 'Spis elektrozaworów'
	//'faq' => 'FAQ'
);