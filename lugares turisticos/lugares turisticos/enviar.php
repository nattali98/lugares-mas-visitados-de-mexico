<?php
$name  = $_POST['name'];
$mail  = $_POST['mail'];
$phone  = $_POST['phone'];
$message  = $_POST['message'];

$header ='from:'.$mail."\r\n";
$header ="X-Mailer:PHP/".phpversion()."\r\n";
$header ="mime-version:1.0\r\n";
$header ="content-type:text/plain";

$message ="este mensaje fue enviado por:".$name."\r\n";
$message.="su e-mail es:".$mail."\r\n";
$message.="telefono de contaco:".$phone."\r\n";
$message.="mensaje:".$_POST['message']."\r\n";
$message.="enviado el:".date('d/m/Y',time());

$para = 'montesrodriguezdn@ag.cbtis225.edu.mx';
$asunto ='asunto del mensaje';

mail($para,$asunto, utf8_decode($message),$header);

header("location:proyecto contenido.html");
?>

