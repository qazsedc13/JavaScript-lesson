﻿<?php
	//глобальные переменные, видны по всему коду
	
	$x = 12;
	echo "Переменная x = $x<br />";
	$x = 10;
	echo "Переменная x = $x<br />";
	
	// локальные переменные, действуют только внутри функции
	function test (){
		//$x = 0;
		//$GLOBALS["x"] += 7;
		global $x;
		$x += 10;		
	}
	test ();
	echo "Переменная x = $x<br />";
?>