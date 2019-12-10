<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/vendor/autoload.php';

$mail = new PHPMailer(TRUE);

$mail->CharSet = "UTF-8";

try {
   
   $mail->setFrom('web@aqua.net.pl', 'Damian Krawiec - IT');
   
   $mail->addAddress('d.krawiec@aqua.net.pl', 'Damian Krawiec');
   
   $mail->Subject = 'E-mail za pomocą PHPMailer';
   
   $mail->isHTML(TRUE);
   
   $mail->Body = '<html>OOO!! Html i polskie znaki: <strong>ąśćźżłóę</strong>.</html>';
   
   /* SMTP parameters. */
   
   /* Tells PHPMailer to use SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'aqua.home.pl';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'ssl';
   
   /* SMTP authentication username. */
   $mail->Username = 'web@aqua.net.pl';
   
   /* SMTP authentication password. */
   $mail->Password = 'jfv&FG;EIy4d';
   
   /* Set the SMTP port. */
   $mail->Port = 465;
   
   /* Finally send the mail. */
   $mail->send();
   
   echo 'Sended: OK. Check mail inbox.';
}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}