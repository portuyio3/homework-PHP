<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "mynewDB";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO MyGuests (firstname,lastname,email)VALUES (?,?,?)");
$stmt->bind_param("sss",$firstname,$lastname,$email);

$firstname = "John";
$lastname = "Doe";
$email = "john@exmaple.com";
$stmt->execute();

$firstname = "Mary";
$lastname = "Moe";
$email = "mary@example.com";
$stmt->execute();

$firstname = "Julie";
$lastname = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>