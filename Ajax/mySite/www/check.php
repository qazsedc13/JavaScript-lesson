<?php
	sleep(1);
	if($_POST['name'] == "admin")
		echo "Fail";
	else
		echo $_POST['name'];

?>