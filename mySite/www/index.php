<?php
	$mysqli = new MySQLi ("localhost", "root", "", "mybase");// должен предоставить хостер
	$mysqli->query("SET NAMES 'utf8'");
	
	$success = $mysqli->query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('123', '".md5("123")."', '".time ()."')");
	echo $success;	
	
	for($i = 1; $i < 10; $i++){
		$mysqli->query("INSERT INTO `users` (`login`, `password`, `reg_date`) VALUES ('$i', '".md5("$i")."', '".time ()."')");
	}
	
	$mysqli->close();
?>
