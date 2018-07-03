<?php
header("Content-Type: text/html; charset=utf-8");
$tel = htmlspecialchars($_POST["tel"]);

$refferer = getenv('HTTP_REFERER');
$date=date("d.m.y"); // число.месяц.год  
$time=date("H:i"); // часы:минуты:секунды 
$myemail = "natali383@gmail.com";

$tema = "Регистрация на мастер-класс";
$message_to_myemail = "Текст письма:
<br><br>
Телефон: $tel<br>
Источник (ссылка): $refferer
";

mail($myemail, $tema, $message_to_myemail, "From: NatashaSoyer <reg@wayup.in> \r\n Reply-To: NatashaSoyer \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


$tema = "Заявка на участие в мастер-классе";
$message_to_myemail = "
Ваша заявка принята! <br>
Я скоро Вам перезвоню, до встречи на мастер-классе. Жду лично.
";
$myemail = $email;
mail($myemail, $tema, $message_to_myemail, "From: NatashaSoyer <reg@wayup.in> \r\n Reply-To: NatashaSoyer \r\n"."MIME-Version: 1.0\r\n"."Content-type: text/html; charset=utf-8\r\n" );


$f = fopen("leads-mk.xls", "a+");
fwrite($f," <tr>");    
fwrite($f," <td>$tel</td> <td>$date / $time</td>");   
fwrite($f," <td>$refferer</td>");    
fwrite($f," </tr>");  
fwrite($f,"\n ");    
fclose($f);


?>