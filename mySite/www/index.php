<?php
	$array = array(12, 17, 5, 23, 56);
	
	echo count($array)."<br />";
	sort ($array);
	print_r($array);
	echo "<br />";
	rsort ($array);//сортировка по убыванию
	print_r($array);
	echo "<br />";
	asort ($array);//сортировка по возрастанию ассоциативных массивов (запоминает ключи)
	print_r($array);
	echo "<br />";
	arsort ($array);
	print_r($array);
	echo "<br />";
	
	$alist = array("123" => 23, "12" => 45);
	ksort ($alist);//Сортировка по колючам по возрастанию
	print_r($alist);
	echo "<br />";
	krsort ($alist);//Сортировка по колючам по убыванию
	print_r($alist);
	echo "<br />";
	
	shuffle($array);// перемешивание значений
	print_r($array);
	echo "<br />";
	
	echo in_array(12, $array);//проверяем есть ли такой элемент в массиве
	echo "<br />";
	
	$arr_1 = array (10, 2);
	$arr_2 = array (4, 5, 7);
	
	$array_3 = array_merge($arr_1, $arr_2);// объединение двух массивов
	print_r ($array_3);
	echo "<br />";
		
	$arrDone = array (1, 2, 3, 4, 5, 6, 7);
	print_r ($arrDone);
	echo "<br />";
	
	$arrDone = array_slice($arrDone, 1, -2);// указываем массив, указываем сколько элементов с начала откинут, указываем сколько элементов показать
	print_r ($arrDone);
	echo "<br />";
?>
