<?php
	session_start();
	$num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
	$num ++;
	$_SESSION["num"] = $num;
	echo "Пользователь обновил страничку $num раз";	
?>
