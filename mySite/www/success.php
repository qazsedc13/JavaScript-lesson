<?php
	session_start();
	echo "Вы успешно отправили сообщение на email".$_SESSION["to"];
?>