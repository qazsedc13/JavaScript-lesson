<?php
	$x = 10;
	$y = 5;
	if ($x == $y && $x != 12 && $y == 5 && ($x + 5) == 15){
		echo 'Всё сработало';}
	else if ($x == 15 || $y != 7){
		$num = 5;
		echo "Число № ".$num;	
	}
	else {
		echo 'Ура';
	}
	
	$x == $y ? $string = "Да" : $string = "Нет";
	echo "<br />";
	echo $string;
?>