<?php
	function printResult ($result_set) {
		while (($row = $result_set->fetch_assoc()) != false) {
			print_r ($row);
			//echo $row("login");
			echo "<br />";	
		}	
		echo "Количество записей равно - ".$result_set->num_rows."<br />------------------------------";
	}
	$mysqli = new MySQLi ("localhost", "root", "", "mybase");// должен предоставить хостер
	$mysqli->query("SET NAMES 'utf8'");
	
	$result_set = $mysqli->query ("SELECT * FROM  `users`");
	printResult ($result_set);
	$mysqli->close();
?>
