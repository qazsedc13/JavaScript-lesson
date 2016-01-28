<?php
	$start = microtime(true);
	echo time()."<br />";//возвращает количество секунд с 01.01.1970
	
	echo microtime(true)."<br />";//выводит доли секунд с 01.01.1970
	
	echo "Время работы скрипта: ".(microtime(true)-$start)." секунд<br />";
	
	$time = mktime(12, 35, 23, 12, 7, 2007);//возвращает количество секунд
	
	echo date("Y-m-d H:i:s", $time)."<br />";
	
	$array = getdate($time);
	print_r($array);
	
	echo "<br />".checkdate (2, 28, 2012);//Проверяет есть ли такой день
?>
