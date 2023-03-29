<?php
// establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vian";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

// insert data into contacts table
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$stmt = $conn->prepare("INSERT INTO contacts (name, email, phone) VALUES (:name, :email, :phone)");
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':phone', $phone);
$stmt->execute();

// redirect back to form page
header("Location: view.php");
exit();
?>
