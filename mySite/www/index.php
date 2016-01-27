<?php
	$array = array(12, -3.25, "String", false);
	echo $array[1];	
	$array[1] = "String";// заменили значения элементов
	$array[2] = 4.25;
	echo "<br />".$array[1]."<br />".$array[2];	
	$array[] = "New element";// добавили новый элемент в конец
	echo "<br />".$array[4]."<hr />";
	
	// для вывода всего массива целиком используются циклы
	
	for ($i = 0; $i < count ($array); $i++){
		echo "Элемент массива с индексом $i = ".$array[$i]."<br />";	
	}
	
	$list = array ("age" => 12, "name" => "Alex", "schoolBoy" => true); // Цикл for не применяется для ассациативных массивов
	
	$list["age"] = 10;
	
	$summa = 0;
	
	echo "<hr />".getAverage(array("first" => 12, "sec" => 45, "third" => 23, "forth" => 55));
	
	function getAverage ($array){
		foreach ($array as $key => $value){// этот цикл используется только для ассщциативных массивов
			$summa += $value;
		}
		return $summa / count ($array);
	}
?>