﻿<?php
	$num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
	$num ++;
	setcookie ("num", $num, time() + 4);
	echo "Пользователь обновил страничку $num раз";	
?>
