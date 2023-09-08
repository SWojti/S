<link rel="stylesheet" href="style.css">
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ez";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT AVG(oceny) as srednia FROM oceny";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        echo "Średnia ocen: " . $row["srednia"];
    }
} else {
    echo "Brak wyników";
}

$conn->close();

?>
