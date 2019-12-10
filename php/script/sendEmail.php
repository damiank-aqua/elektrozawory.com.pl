<?php

require_once 'php/phpmailer/PHPMailerAutoload.php';

$mailer = new PHPMailer(true);

$mailer->CharSet = 'UTF-8';

$mailer->SetFrom('zamowienie@elektrozawory.pl', 'Elektrozawory.pl');

$mailer->AddAddress('web@aqua.net.pl');

$mailer->AddAddress('marek@elektrozawory.eu');

$mailer->AddAddress($order['email']);

$mailer->Subject = $title;

$startEmail = '<h2>Dziękujemy za złożenie zamówienia w naszym sklepie - elektrozawory.pl</h2><br>';

$endEmail = '<br><br><hr>WWW.ELEKTROZAWORY.PL';

$templateEmail = iconv('utf-8', $s_email_encode, $startEmail.$template.$endEmail);

$mailer->MsgHTML($templateEmail);

$mailer->IsSMTP();

$mailer->SMTPAuth = true;

$mailer->SMTPSecure = 'ssl';

$mailer->Port = 465;

$mailer->Host = 'aqua.home.pl';

$mailer->Username = 'zamowienie@elektrozawory.pl';

$mailer->Password = 'cp.CWs9EScKk';

$mailer->Send();