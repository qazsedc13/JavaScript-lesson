﻿<?php
	function printWords ($word, $x, $y){// В функции можно вызываь другую функцию
		$word = math($x, $y);
		echo $word;	
	}
	
	function math ($first, $second){
		$summa = $first + $second;
		return $summa;
	}
	
	$x = 12;
	$y = 35;
	
	printWords($sum, $x, $y);
		
?>