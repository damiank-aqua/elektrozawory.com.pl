<?php

ob_start();

error_reporting(E_ALL & ~E_NOTICE);

session_start();

if(isset($_GET['content']))
    $content = $_GET['content'];

if(isset($_GET['detail']))
    $detail = $_GET['detail'];

if(isset($_GET['last']))
    $last = $_GET['last'];

if(isset($_GET['filter1']))
    $filter1 = $_GET['filter1'];

if(isset($_GET['filter2']))
    $filter2 = $_GET['filter2'];

if(isset($_GET['filter3']))
    $filter3 = $_GET['filter3'];

if(isset($_GET['filter4']))
    $filter4 = $_GET['filter4'];

if(!isset($content)) {
    
    $content = $s_page['produkty'];
    
}

require_once 'config/language/pl.php';

require_once 'api/seo.php';

require_once 'php/class/display.class.php';

require_once 'php/class/section.class.php';

$section = new Section();

//Zrzucenie danych adresowych i rozliczeniowych do tablicy jednego wymiaru (out: $order) - jezeli zmienna sesji order istnieje
require_once 'php/script/order.php';

//Pobranie zmiennych z url do wlaczenia filtrow
require_once 'php/script/url.php';

if($content == $s_page['realizacja']) {
    
    if(isset($_SESSION['order']) and isset($_SESSION['cart']) and isset($_SESSION['pay'])) {
        
        $file = scandir($s_orderPath);
        
        $countFile = count($file) - $numberFile;

        $orderNumber = $countFile.'-zamowienie-elektrozawory-'.date("Y-m-d-H-i-s").'-'.md5(microtime());
        
        $title = iconv('utf-8', $s_email_encode, 'Zamówienie nr: '.$orderNumber.' z '.$s_domain);

        require_once 'template/order.php';

        file_put_contents('order/'.$orderNumber.'.txt', $template);

        $template = str_replace("\n", "<br>", $template);

		require_once 'php/script/sendEmail.php';
		
		if($_SESSION['pay'] == 'online') {

			require_once 'przelewy24/przelewy24.class.php';

			require_once 'php/script/cart.php';

			require_once 'section/delivery.php';

			$oPrzelewy24_API = new Przelewy24_API();

			$sumPay = ($valueCart * 100) + ($cost * 100);

			$redirect = $oPrzelewy24_API->Pay($sumPay, $orderName, $order['email'], $s_p24_url_return, $s_p24_url_status);

			//$section->go2($redirect);
			
			$onlinePaymentApp = '<div class="modal-button"><a href="'.$redirect.'" title="Uruchom aplikację Przelewy24.pl" target="_blank" class="btn make-payment">Dokonaj płatności</a></div>';

		}

    }

}

if($content == $s_page['zamowienia']) {
    
    if(isset($_POST['pin'])) {
        
        $_SESSION['pin'] = md5($_POST['pin']);
        
    }
    
}

if($content == 'email') {
    
    //use PHPMailer\PHPMailer\PHPMailer;
    
    require_once 'php/PHPMailer/src/PHPMailer.php';    //dodanie klasy phpmailer
 
    //require_once 'php/PHPMailer/src/SMTP.php';    //dodanie klasy smtp
    $phpmailer = new \PHPMailer\PHPMailer\PHPMailer();
    //$mail = new PHPMailer();    //utworzenie nowej klasy phpmailer
//    $mail->From = "j.nowak@webio.pl";    //adres e-mail użyty do wysyłania wiadomości
//    $mail->FromName = $from;  //imię i nazwisko lub nazwa użyta do wysyłania wiadomości
//    $mail->AddReplyTo($from, 'mailing'); //adres e-mail nadawcy oraz jego nazwa
//                                                 //w polu "Odpowiedz do"  
//    $mail->Host = "aqua.home.pl";    //adres serwera SMTP wysyłającego e-mail
//    $mail->Mailer = "smtp";    //do wysłania zostanie użyty serwer SMTP
//    $mail->SMTPAuth = true;    //włączenie autoryzacji do serwera SMTP
//    $mail->Username = $from;    //nazwa użytkownika do skrzynki e-mail
//    $mail->Password = "RfkDf&cVY*Uh";    //hasło użytkownika do skrzynki e-mail
//    $mail->Port = 587; //port serwera SMTP zależny od konfiguracji dostawcy usługi poczty
//    $mail->Subject = "temat";    //Temat wiadomości, można stosować zmienne i znaczniki HTML
//    $mail->Body = 'treść';    //Treść wiadomości, można stosować zmienne i znaczniki HTML     
//    $mail->AddAddress ("d.krawiec@aqua.net.pl","Test");    //adres skrzynki e-mail oraz nazwa
                                                    //adresata, do którego trafi wiadomość
    
  var_dump('PHPMailer');
  
  exit();
    
}

if(isset($_POST['name']))
    $name = $_POST['name'];

if(isset($_POST['value']))
    $value = $_POST['value'];

if(isset($_POST['event']))
    $event = $_POST['event'];

if(isset($_POST['parameter']))
    $parameter = $_POST['parameter'];

$backStatus = false;
if(stristr($content, $s_back)) {

    $backArray = explode('-', $content);
    
    $content = $backArray[0];
    
    $backStatus = true;

}

if($content == $s_page['adres'] or
   $content == $s_page['platnosc'] or
   $content == $s_page['podsumowanie']) {
    
    $back = '';
    switch($content) {

        case 'adres':

            require_once 'php/script/cart.php';
            
            if($sumCart == 0 and $valueCart == 0) {

                $back = $s_page['koszyk'].$s_back;

            }

            break;
    
        case 'platnosc':
            
            require_once 'php/script/cart.php';
            
            if($sumCart == 0 and $valueCart == 0) {

                $back = $s_page['koszyk'].$s_back;

            }

            require 'php/script/checkAddress.php';

            if($check) {

                $back = $s_page['adres'].$s_back;

            }

            break;
            
        case 'podsumowanie':
            
            require_once 'php/script/cart.php';
            
            if($sumCart == 0 and $valueCart == 0) {

                $back = $s_page['koszyk'].$s_back;

            }

            require 'php/script/check.php';

            if($check) {

                $back = $s_page['platnosc'].$s_back;

            }

            break;

    }
    
    if($back != '') {
    
        header('Location: '.$back);

        exit();
    
    }
       
}