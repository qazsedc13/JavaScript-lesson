<?php
	//setcookie("num", 10, time() + 7);// добавили
	echo $_COOKIE["num"];
	if(isset($_COOKIE["num"])){
		echo "Кука установлена";
	} else
		echo "Кука не установлена";
?>
