<?php
$servername = "192.168.64.5;
$username = "gulim";
$password = "1234";
$dbname = "devops_lab";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("error occured while connecting:" . $conn->connect_error);
}

$sql =  "SELECT id, username, email FROM users";
$result =  $conn->query($sql);

echo "<h2>Data from DataBase: </h2>";

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
		echo "ID: " . $row["id"]. " - Username: " . $row["username"]. " - Email : " . $row["email"]. "<br>";
	}
} else {
	echo "0 results";
}

$conn->close();
?>

