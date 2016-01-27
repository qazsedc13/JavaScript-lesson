<?php
	$array = array(array(12, 4.46, "string", true), array("Example"), array(45, "strong"));
	
	echo $array[0][2]."<hr />";// с двумерными работают все те же функции что и с одномерными
	
	//Перебор элементов в двумерном массиве
	
	for ($i = 0; $i < count($array); $i++){
		for ($j = 0; $j < count($array[$i]); $j++){
			echo $array[$i][$j]." | ";//вывод в виде матрицы
		}	
		echo "<br />";
	}
?>