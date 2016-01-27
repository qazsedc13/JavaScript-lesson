<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Обработка форм</title>
</head>

<body>
	<form name="test" action="check.php" method="post">
    	<label>Имя:</label><br />
        <input type="text" name="name" placeholder="Имя" /><br />
        <label>Email:</label><br />
        <input type="text" name="email" placeholder="Email" /><br /> 
        <label>Сообщение:</label><br />
        <textarea name="message" cols="40" rows="10"></textarea><br />
        <br />
        <input type="submit" name="done" value="Готово" />
    </form>
</body>
</html>