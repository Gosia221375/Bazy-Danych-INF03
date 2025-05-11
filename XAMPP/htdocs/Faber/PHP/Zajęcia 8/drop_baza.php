<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<h3>Usuwanie istniejącej bazy danych:</br></h3>
	<form action="drop_baza_obsluga.php" method="POST">
		Adres bazy:
		<input type="text" name="url" value="localhost"></br></br>
		Login:
		<input type="text" name="login" value="root"></br></br>
		Hasło:
		<input type="password" name="pass"></br></br>
		Nazwa bazy do utworzenia:
		<input type="text" name="nazwabazy">
		
		<input type="reset" value="REZYGNACJA">
		<input type="submit" value="USUŃ BAZĘ">
	</form>
</body>
</html>