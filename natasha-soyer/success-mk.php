<?php
header("Content-Type: text/html; charset=utf-8");
$email = htmlspecialchars($_POST["email"]);

$refferer = getenv('HTTP_REFERER');
$date=date("d.m.y"); // число.месяц.год  
$time=date("H:i"); // часы:минуты:секунды 
$myemail = "natali383@gmail.com";

$tema = "Регистрация на мастер-класс";
$message_to_myemail = "Текст письма:
<br><br>
E-mail: $email<br>
Источник (ссылка): $refferer
";

mail($myemail, $tema, $message_to_myemail, "From: NatashaSoyer <reg@wayup.in> \r\n Reply-To: NatashaSoyer \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


$tema = "Заявка на участие в мастер-классе";
$message_to_myemail = "
Ваша заявка принята! <br>
Я уведомлю Вас перед началом мастер-класса и предоставлю доступ. Жду лично.
";
$myemail = $email;
mail($myemail, $tema, $message_to_myemail, "From: NatashaSoyer <reg@wayup.in> \r\n Reply-To: NatashaSoyer \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


$f = fopen("leads.xls", "a+");
fwrite($f," <tr>");    
fwrite($f," <td>$email</td> <td>$date / $time</td>");   
fwrite($f," <td>$refferer</td>");    
fwrite($f," </tr>");  
fwrite($f,"\n ");    
fclose($f);


?>