<?php
require_once './config/setting.php';
require_once './php/init.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once 'section/analytics.php'; ?>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php require_once 'section/description.php'; ?>
        <title><?php require_once 'section/title.php'; ?></title>
		<meta name="google-site-verification" content="9zXp4kVBruDTHaXXUHk7TmQsBhn6MMm4hHSZNsb05Qw" />
        <?php require_once 'css/css.php'; ?>
		
		<?php if($sunrise_uri == '/kontakt?content=kontakt') echo '<link rel="canonical" href="https://elektrozawory.pl/kontakt" />'; ?>
		<?php if($sunrise_uri == '/regulamin?content=regulamin') echo '<link rel="canonical" href="https://elektrozawory.pl/regulamin" />'; ?>
		<?php if($sunrise_uri == '/o-sklepie?content=o-sklepie') echo '<link rel="canonical" href="https://elektrozawory.pl/o-sklepie" />'; ?>
		
		<?php require_once 'section/meta_robots.php'; ?>
		<?php if ($ssrobots!='index,follow') : ?>
		<meta name="robots" content="<?php echo $ssrobots; ?>" />
		<?php endif; ?>
		
        <script type="application/ld+json">{
          "@context": "http://schema.org",
          "@type": "LocalBusiness",
          "address": {
          "@type": "PostalAddress",
          "addressLocality": "Zielona Góra",
          "streetAddress": "M.C. Skłodowskiej 25",
          "postalCode": "65-124",
          "addressRegion": "lubuskie"
          },
          "name": "AQUA - Elektrozawory",
          "email": "marek@elektrozawory.eu",
          "telephone": "731076523",
          "vatID": "9290053876",
          "image": "https://www.elektrozawory.pl/graphic/layout/logo.png"
        }</script>		
    </head>
    <body id="<?php echo $content; ?>">
        
        <div class="container-fluid">
            
            <?php require_once 'section/slider.php'; ?>
            
            <?php 
            
            $in = 'mobile';
            require 'section/menu.php'; 
            
            $in = 'desktop';
            require 'section/menu.php'; 
            
            ?>
            
        </div>
        
        <div class="container">
            
            <div id="top">

            <div class="row">
                
                    <?php
                    
                    $col = '';
                    if($content == $s_page['produkty']) {
                        
                        $col = ' col-lg-3';
 
                    }
                    
                    $style = ' style="width: 100%;text-align: center"';
                    
                    ?>

                    <div class="col-xs-12<?php echo $col; ?>"<?php echo $style; ?>>

                        <?php require_once 'section/logo.php'; ?>

                    </div>
                
                    <?php
                    
                    if($content == $s_page['produkty']) {

                        echo '<div class="col-xs-12 col-lg-6">';

                            require_once 'section/search.php';

                        echo '</div>';

                        echo '<div class="col-xs-12 col-lg-3">';

                            require_once 'section/cart.php';

                        echo '</div>';
                
                    }
                
                ?>
                    
            </div>
                
            </div>
            
        </div>
        
        <div class="container" id="main">
            
            <?php
            
                if($content == $s_page['produkty']) {

                    echo '<div style="display:none">';

                        require_once 'section/breadcramb.php'; 

                    echo '</div>';

                    echo '<div class="row">';

                    echo '<div class="col-xs-12 col-md-4 col-lg-3">';

                        require_once 'section/filter.php'; 

                    echo '</div>';

                }

            ?>

            <?php 
            
            if($content == $s_page['produkty']) {
            
                echo '<div class="col-xs-12 col-md-8 col-lg-9" style="position:relative">';
				
                if ($_SERVER['REQUEST_URI'] == "/") {
                  echo '<h1 style="font-size:1.5rem;">Elektrozawory, zawory elektromagnetyczne</h1>';
                  echo '<div style="margin: 10px 0; text-align: justify;"><p style="font-size: 14px;">Firma "AQUA - Grupa SBS" sp. z o.o. od 1992r. specjalizuje się w doradztwie i sprzedaży zaworów elektromagnetycznych. Jako jedni z pierwszych w Polsce uruchomiliśmy stronę i sklep internetowy poświęcone elektrozaworom. Obecnie jesteśmy jednym z największych w Polsce dystrybutorów elektrozaworów. Obsługujemy duże koncerny, firmy oraz klientów indywidualnych. </p>
				  <p style="font-size: 14px; text-align: justify;">Głównym naszym dostawcą proponowanych elektrozaworów jest włoska firma ODE. Jest to firma z ponad 60-letnią tradycją - od 20lat jesteśmy ich przedstawicielem na Polskę. Na naszym magazynie centralnym w Zielonej Górze posiadamy duże ilości zaworów oraz części zamiennych dzięki czemu czas oczekiwania skraca się do minimum.</p>
				  <p style="font-size: 14px; text-align: justify;">Szeroki wybór, oferta składająca się  z najwyższej jakości produktów, profesjonalna pomoc oraz doradztwo i wiele lat doświadczenia w branży &ndash; tak pokrótce można opisać naszą hurtownię. Oferujemy m.in.  elektrozawory do automatyki przemysłowej, które sprawdzą się w bardzo wielu różnych branżach &ndash; m.in. budownictwie, zakładach przemysłowych, myjniach, firmach spożywczych, oczyszczalniach ścieków, wodociągach i wielu innych przedsiębiorstwach. Nasze elektrozawory możemy również zastosować w inteligentnych domach czy w systemach przeciw pożarowych.</p>
				  <p style="font-size: 14px; text-align: justify;">Proponowane zawory elektromagnetyczne występują w funkcji <a href="/produkty,funkcja-dzialania_normalnie-zamkniety" style="font-size: 14px">Normalnie Zamkniętej</a> gdzie zawór bez prądu jest zamknięty otwiera się dopiero po padaniu napięcia, oraz w funkcji <a href="/produkty,funkcja-dzialania_normalnie-otwarty" style="font-size: 14px">Normalnie Otwartej</a> gdzie zawór bez prądu jest otwarty i zamyka się dopiero po podaniu napięcia na cewkę. Oferujemy modele wykonane z mosiądzu, stali nierdzewnej i kwasoodpornej, które będą mogły bezpieczne przepompować wodę, parę wodną, glikole, rozmaite oleje,  benzynę i wiele innych związków chemicznych czy mediów agresywnych.</p>
					<p style="font-size: 14px; text-align: justify;"> Elektrozawory które mamy w swojej ofercie spełniają należyte normy, oraz posiadają atest <strong>PZH</strong>. </p></div>';
                } elseif ($_SERVER['REQUEST_URI'] == "/produkty,funkcja-dzialania_normalnie-zamkniety") {
                  echo '<div style="margin: 10px 0; text-align: justify;"><p style="font-size: 14px;">Od ponad 35 lat proponujemy naszym klientom jedynie najlepsze i najnowocześniejsze produkty oraz rozwiązania, które
                  sprawdzają się m.in. w branżach grzewczych czy w przedsiębiorstwach wykorzystujących instalację pompową.</p>
                  <p style="font-size: 14px;">W tej kategorii znajdują się elektrozawory, które nie przepuszczają medium, gdy cewka nie jest zasilana (tzw. zamknięte)
                  z zasadą pośredniego lub bezpośredniego działania. O ich wysokiej wytrzymałości świadczy fakt, że zostały wykonane z
                  bardzo   trwałych   materiałów   –   stali   nierdzewnej,   kwasoodpornej   lub   z   mosiądzu.   Dzięki   temu,   mają   możliwość
                  przepuszczania  wody  w  wysokiej  temperaturze,  pary  wodnej  i  powietrza,  a  także  różnego  rodzaju  soków,  olejów
                  (napędowych czy mineralnych) czy również glikoli i wielu innych związków chemicznych.</p>
                  <p style="font-size: 14px;">Elektrozawory  zamknięte  oferujemy  w  bardzo  wielu  wariantach,  na  różne  średnice  przyłącza,  a  także  z  różnym
                  uszczelnieniem  –  od  teflonu,  po  gumy  Viton  czy  EPDM.  Zapraszamy  rozmaite  przedsiębiorstwa,  jak  i  pośredników
                  handlowych, do sprawdzenia bogatej oferty naszej hurtowni.</p></div>';
                } elseif ($_SERVER['REQUEST_URI'] == "/produkty,funkcja-dzialania_normalnie-otwarty") {
                  echo '<div style="margin: 10px 0; text-align: justify;"><p style="font-size: 14px;">Udostępniamy szereg różnych akcesoriów wykorzystywanych w wielu rodzajach automatyki przemysłowej. W tej kategorii znajdują  się  specjalistyczne  elektrozawory  otwarte  (w  stanie  spoczynku  przepuszczające  medium),  które  doskonale
                  sprawdzą się w różnych instalacjach ciepłowniczych. Wykonane są one z mosiądzu, zatem będą odporne na korozję oraz na działanie bardzo wysokich temperatur.</p>
                  <p style="font-size: 14px;">Prezentowane  elektrozawory  mogą  przepuszczać  różne  rodzaje  medium  –  od  powietrza,  wody  (nawet  do  120  stopni
                  Celsjusza)  czy  pary  wodnej,  po  olej  opałowy,  ropę  czy  benzynę.  Bezpieczną  pracę  z  różnymi  cieczami  czy  gazami
                  zapewniają wbudowane nowoczesne uszczelki techniczne wykonane z gumy EPDM, NBR czy Viton.</p>
                  <p style="font-size: 14px;">Oferowane  urządzenia  występują  w  wielu  różnych  średnicach  przyłącz  –  dzięki  wygodnemu  menu  po  lewej  stronie,
                  bardzo  łatwo  znaleźć  szukane,  spełniające  wymagania  produkt.  Zachęcamy  do  kontaktu,  w  przypadku  problemów  z
                  wyborem odpowiedniego urządzenia – nasz fachowy zespół z chęcią pomoże i właściwie doradzi.</p></div>';
                } elseif ($_SERVER['REQUEST_URI'] == "/produkty,rodzaj-medium_powietrze") {
                  echo '<div style="margin: 10px 0; text-align: justify;"><p style="font-size: 14px;">Sprzedawane przez nas zawory elektromagnetyczne, zwane również elektrozaworami, przeznaczone są do sterowania przepływem mediów ciekłych lub gazowych w wielu gałęziach przemysłu. W prezentowanej ofercie dostępne są modele, które do właściwego działania wykorzystują nie tylko powietrze, ale także wodę oraz gazy obojętne. Wykonane są z wytrzymałych tworzyw dobrze radzących sobie w niesprzyjających warunkach. Ich konstrukcja została przemyślana w taki sposób, aby produkty te cechowała żywotność i niezawodność. Zawory elektromagnetyczne, których medium jest powietrze, znajdują zastosowanie w wielu gałęziach przemysłu, szczególnie w automatyce przemysłowej oraz technice ciepłowniczej. Dzięki nam znajdziesz element odpowiednio dopasowany do potrzeb oraz urządzenia, w jakim ma znaleźć zastosowanie.</p></div>';
                } elseif ($_SERVER['REQUEST_URI'] == "/produkty,rodzaj-medium_olej") {
                  echo '<div style="margin: 10px 0; text-align: justify;"><p style="font-size: 14px;">W prezentowanej kategorii znajdują się elektrozawory pośredniego lub bezpośredniego działania, które kontrolują przepływ następujących cieczy: olej opałowy, benzyna oraz ropa. Elementy tego typu pozwalają na automatyczne sterowanie przepływu substancji i stosowane są w wielu gałęziach przemysłu – te konkretne modele najważniejszą rolę odgrywają jednak w automatyce przemysłowej oraz technice ciepłowniczej. </p><p style="font-size: 14px;">Przemyślana konstrukcja zwiększa długotrwałą i niezawodną pracę produktów. Dzięki wykorzystaniu wytrzymałych tworzyw zawory elektromagnetyczne dobrze znoszą niesprzyjające warunki panujące w środowisku przemysłowym. Przed wyborem produktu zachęcamy do dokładnego przyjrzenia się każdemu z nich – w dokumentacji znajdują się najważniejsze informacje, w tym wymiary, cechy oraz nazwy rekomendowanych części zamiennych.</p></div>';
                } elseif ($_SERVER['REQUEST_URI'] == "/produkty,rodzaj-medium_glikol") {
                  echo '<div style="margin: 10px 0; text-align: justify;"><p style="font-size: 14px;">Na prezentowany asortyment składają się elektrozawory przeznaczone są do kontroli przepływu glikolu. W zależności od potrzeb można zadecydować się na tańszy element o prostej budowie lub sięgnąć po znacznie bardziej zaawansowane rozwiązania. Zadbaliśmy, aby nasi klienci mieli dostęp do różnych modeli, zgodnych z potrzebami oraz przeznaczeniem. Aby wybrać produkt spełniający wymagania przemysłowe, warto zapoznać się z załączoną do każdej oferty dokumentacją. Znajdują się w niej informacje dotyczące wymiarów, zastosowania, a także zalecanych części zamiennych. Zawory elektromagnetyczne tego typu przeznaczone są do przesyłania glikoli – cieczy, która znajduje zastosowanie w instalacjach chłodniczych. Używana jest również głównie do produkcji rozpuszczalników oraz płynów do chłodnic silników.</p></div>';
                } elseif ($_SERVER['REQUEST_URI'] == "/produkty,rodzaj-medium_media-agresywne") {
                  echo '<div style="margin: 10px 0; text-align: justify;"><p style="font-size: 14px;">Prezentujemy szeroką ofertę przemysłową, w której znajdują się zawory elektromagnetyczne przeznaczone do automatycznego przesyłania mediów agresywnych. Mowa tu o wszystkich cząstkach stałych, gazach oraz cieczach niebezpiecznych (w tym kwasach oraz zasadach), których kontrola przepływu odbywa się w specjalnych warunkach. Elektrozawory znajdujące się w naszej ofercie, dzięki przemyślanej konstrukcji, cechuje wysoka wytrzymałość, żywotność i niezawodność. Specjalna budowa membrany i odporne tworzywa pozwalają na bezpieczne przesyłanie mediów agresywnych różnego typu. Produkty znajdują zastosowanie w wielu gałęziach przemysłu, w tym branży chemicznej, farmaceutycznej, spożywczej i petrochemicznej. Zachęcamy do dokładnego przejrzenia załączonej dokumentacji, co ułatwi wybór odpowiedniego rozwiązania.</p></div>';
                }				
                
                require_once 'section/process.php';
            
            }
            
            require_once 'section/content.php'; 
            
            if($content == $s_page['produkty']) {
            
                echo '</div>';
                
                echo '</div>';
            
            }
            
            ?>

        </div>
        
        <div class="container-fluid">
            
            <?php require_once 'section/footer.php'; ?>
            
        </div>
        
        <?php
        
        $requiredCheck = 'false';
        
        echo '<input type="hidden" id="required-check" value="'.$requiredCheck.'" class="'.$l_filtryZamowienie.'">';

        require_once 'php/vars.php';

        require_once 'js/js.php'; 
        
        ?>

        <div id="start-title" class="hide"><?php echo $s_title; ?></div>
    </body>
</html>

<?php require_once 'php/out.php';