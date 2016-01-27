<?php
	$string = "This is example!";
	
	echo strlen($string)."<br />";// Длина строки
	echo strpos($string, "exa")."<br />";// ищет в заданной строке совпадени с некоторыми символами, выдаёт номер 
	echo strpos($string, "is", 4)."<br />";// начать поиск с 4 элемента
	
	if (strpos($string, "T") == false) echo "T не найдено<br />";// выдаст T не найдено, т.к. т первый символ, а в массиве значит нулевой символ, соответствнно 0 это false 
	if (strpos($string, "T") === false) echo "T не найдено<br />";//поэтому надо использовать оператор эквивалентности
	else echo "T найдено<br />";
	
	echo substr($string, 3, 7)."<br />";// Обрезает строку по определённым параметрам
	echo substr($string, 3, -2)."<br />";//Удаляет первые 3 символа и 2 с конца
	echo str_replace("is", "abc", $string);
?>
