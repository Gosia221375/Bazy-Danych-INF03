<html>
<head>
	<title>Obsługa SQL</title>
	<meta charset="UTF-8">
</head>
<body>
	<h3>Edytowanie rekordu:</br></h3>
	<form action="edit2.php" method="POST">
		Podaj ID osoby do edycji:
		<center>
			<input type="text" name="ID">
			<input type="reset" value="REZYGNACJA">
			<input type="submit" value="EDYTUJ">
		</center>
	</form>	
	
	<?php
		include('select_tabela.php');
	?>
	
</body>
</html>