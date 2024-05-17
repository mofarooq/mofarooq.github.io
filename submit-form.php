<?php
$host = 'ppa-database-1.czkjwcsnqzk1.us-east-2.rds.amazonaws.com';
$dbname = 'PPA';
$username = 'admin';
$password = 'Mmfarooq1!';

$name = $_POST['name'];
$licensePlate = $_POST['licensePlate'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Create a new mysqli object
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_errno) {
    die('Failed to connect to MySQL: ' . $conn->connect_error);
}

// Bind the parameter values to the statement

 $stmt = $conn->prepare("INSERT INTO final_ppa_userbase(Name, Email, License, PhoneNumber) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss", $name, $email, $licensePlate, $phone);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    

?>

