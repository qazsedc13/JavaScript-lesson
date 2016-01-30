<?php
	function printResult ($result_set) {
		echo "Количество записей равно - ".$result_set->num_rows."<br />";
		while (($row = $result_set->fetch_assoc()) != false) {
			print_r ($row);
			echo "<br />";	
		}	
		echo "<br />------------------------------<br />";
	}
	$mysqli = new MySQLi ("localhost", "root", "", "mybase");// должен предоставить хостер
	$mysqli->query("SET NAMES 'utf8'");
	
	for ($i = 0; $i < 10; $i++) {
		$mysqli->query ("INSERT INTO `usres`(`login`, `password`, `reg_date`) VALUES ('User_$i', md5($i), '".time()."')");
	}
	
	$result_set = $mysqli->query ("SELECT * FROM  `users`");
	printResult ($result_set);
	
	$result_set = $mysqli->query ("SELECT `id`, `login` FROM  `users` WHERE `id` > 7");
	printResult ($result_set);
	
	$result_set = $mysqli->query ("SELECT * FROM  `users` WHERE `id` < 8 ORDER BY `id` DESC");
	printResult ($result_set);
	
	$result_set = $mysqli->query ("SELECT * FROM  `users` WHERE `id` < 8 ORDER BY `login` ASC LIMIT 0, 2 ");
	printResult ($result_set);
	
	$result_set = $mysqli->query ("SELECT * FROM  `users` WHERE `login` LIKE '%ser%'");
	printResult ($result_set);
	
	$result_set = $mysqli->query ("SELECT COUNT (`id`) FROM `users`");
	printResult ($result_set);
	
	$mysqli->close();
?>
