<?php
	$message = "Это самое простое сообщение в мире!";
	$to = "qazsedc13@yandex.ru";
	$from = "qazsedc13@yandex.com";
	$subject = "Тема сообщения";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";//тема передастся по спец. протоколу. для того чтобы mail.ru правильно обработал
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";// очень важны для правильной обработки сообщения
	mail ($to, $subject, $message, $headers);
?>
