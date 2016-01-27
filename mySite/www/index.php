<?php
	function printWords ($word){// Просто выводит на экран
		echo $word;	
	}
	
	function math ($first, $second){
		$summa = $first + $second;
		return $summa;
	}
	
	$x = 12;
	$y = 35;
	
	$sum = $x + $y;
	printWords($sum);
	$x = 13;
	$sum = math($x, $y);
	printWords($sum);
	
		
?>