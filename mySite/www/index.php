<?php
	session_start();
	if (isset($_POST["send"])){
		$from = htmlspecialchars($_POST["from"]);
		$to = htmlspecialchars($_POST["to"]);	
		$subject = htmlspecialchars($_POST["subject"]);
		$message = htmlspecialchars($_POST["message"]);		
	}
?>
<!doctype html>
<html>
<head>
<meta charset="ANSI">
<title>�������� �����</title>
</head>

<body>
	<h1>����� �������� �����</h2>
    <form name="feedback" action="" method="post">
    	<label>�� ����:</label><br />
        <input type="text" name="from" /><br />
        <label>����:</label><br />
        <input type="text" name="to" /><br />
        <label>����:</label><br />
        <input type="text" name="subject" /><br />
        <label>���������:</label><br />
        <textarea name="message" cols="30" rows="10"></textarea><br />
        <input type="submit" name="send" value="���������"/>
    </form>
</body>
</html>