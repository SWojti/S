<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Dodaj rekord</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h2>Dodaj rekord do tabeli "tabela1"</h2>
	<form action="dodaj.php" method="post">
		<label for="imie">Imię:</label>
		<input type="text" id="imie" name="imie" required><br><br>

		<label for="nazwisko">Nazwisko:</label>
		<input type="text" id="nazwisko" name="nazwisko" required><br><br>

		<label for="adres_email">Adres e-mail:</label>
		<input type="email" id="adres_email" name="adres_email" required><br><br>

		<label for="haslo">Hasło:</label>
		<input type="password" id="haslo" name="haslo" required><br><br>

		<label for="data_urodzenia">Data urodzenia:</label>
		<input type="date" id="data_urodzenia" name="data_urodzenia" required><br><br>

		<input type="submit" value="Dodaj rekord">
	</form>
</body>
</html>