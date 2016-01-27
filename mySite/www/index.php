<?php
	$x = 15;
	if (isset ($x)) echo "Переменная существует";
	else echo "Переменная не существует";
	echo "<br />";
	unset ($x);// берёт переменную и удаляет её полностью, т.е. не только значение. Чаще всего применяется в массивах
	if (isset ($x)) echo "Переменная существует";
	else echo "Переменная не существует";
	echo "<br />";
	
	$x = "15";
	$bool = false;
	
	$null;
	
	echo "Is Numeric - ".is_numeric($x)."<br />";// Проверяет является ли переменная числом
	echo "Is Integer - ".is_integer($x)."<br />";// Проверяет является ли переменная целочисленной переменной
	echo "Is Double - ".is_double($x)."<br />"; // Проверяет переменные с точкой
	echo "Is String - ".is_string($x)."<br />"; //Проверяет является ли переменная строкой
	echo "Is Boolean - ".is_bool($bool)."<br />";
	echo "Is Scalar - ".is_scalar($bool)."<br />"; // Проверяет является ли переменная простой
	echo "Is Null - ".is_null($null)."<br />";// переменная есть но значения нет
	echo "Is Array - ".is_array($x)."<br />";// проверяет является ли переменная массивом
	echo "Type - ".gettype($bool)."<br />"; //узнаём тип переменной
	echo "Type - ".gettype($null)."<br />";
	
?>
