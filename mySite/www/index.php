<?php
	$string = "Example";
	$num = 0;
	$bool = $string == true;

	echo "$bool = $string == true"; //Строка есть, значит true
	
	$bool_2 = $num == "";
	
	echo "<br />$bool_2 = $num == \"\"<hr/>";// Проверяем число и строчку, они равны, благодаря тому, что в php 0 и пустая строчка это false
	
	$bool_3 = $string === true;
	
	echo "<br />$bool_3 = $string === true";// поверка типа переменных
	
	$bool_4 = $num === "";
	
	echo "<br />$bool_4 = $num === \"\"";
?>