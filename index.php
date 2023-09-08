<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="UTF-8">
	<title>Strona 1</title>
	
</head>
<body>
<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			font-size: 16px;
			line-height: 1.5;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #333;
			color: #fff;
			padding: 20px;
		}

		h1 {
			margin: 0;
			font-size: 36px;
		}

		nav ul {
			margin: 0;
			padding: 0;
			list-style: none;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		nav li {
			margin: 0 10px;
		}

		a {
			color: #fff;
			text-decoration: none;
		}

		main {
			padding: 20px;
			background-color: #fff;
		}

		form {
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			padding: 20px;
			background-color: #eee;
		}

		form label {
			margin-right: 10px;
		}

		form select {
			margin-right: 20px;
			padding: 5px;
			border: none;
			border-radius: 5px;
			background-color: #fff;
			box-shadow: 0 2px 4px rgba(0,0,0,.1);
		}

		form input[type="submit"] {
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
		}

		table {
			border-collapse: collapse;
			width: 100%;
			margin-top: 20px;
		}

		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ccc;
		}

		tr:hover {
			background-color: #f2f2f2;
		}

		footer {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
		}
	</style>


	<header>
	<img class="nagłowek" src="WSS.png" alt="Nagłówek strony">
	<section>
			<h1>Witam na stronie</h1>
			<p>.</p>
		</section>
		<nav>
			<ul>
				<li><a href="strona1.php">Strona 1</a></li>
				<li><a href="strona2.php">Strona 2</a></li>
				
			</ul>
		</nav>
	</header>
	<main>
		
	</main>
	<form method="post" action="results.php">
  <label for="field1">Płeć:</label>
  <select id="field1" name="field1">
    <option value="option1">Mężczyzna</option>
    <option value="option2">Kobieta</option>
    <option value="option3">Nie chce podawac</option>
  </select>

  <label for="field2">szkoła:</label>
  <select id="field2" name="field2">
    <option value="option1">podstawówka</option>
    <option value="option2">liceum</option>
    <option value="option3">technikum</option>
  </select>

  <input type="submit" value="Wyślij">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ez";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT studenci.imie, studenci.nazwisko, studenci.adres_email
        FROM studenci
        WHERE studenci.data_urodzenia < '2023-11-11'
        ORDER BY studenci.imie ASC";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Imię</th><th>Nazwisko</th><th>Email</th><th>Pole 1</th><th>Pole 2</th><th>Pole 3</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["imie"]."</td><td>".$row["nazwisko"]."</td><td>".$row["adres_email"]."</td><td></td><td></td><td></td></tr>";
  }
  echo "</table>";
}

$conn->close();
?>

	<footer>
		<p>Autor: Wojtek Sośnicki, klasa 2D, numer dziennika 25</p>
	</footer>
</body>
</html>