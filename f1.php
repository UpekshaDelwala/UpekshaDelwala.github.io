<?php

// Retrieve form data
$name = $_POST['name'];
$bdate = $_POST['bdate'];
$whatsapp = $_POST['whatsapp'];
$email = $_POST['email'];
$comments = $_POST['comments'];


// Validate and sanitize the inputs
$name = filter_var($name, FILTER_SANITIZE_STRING);
$bdate = filter_var($bdate, FILTER_SANITIZE_DATE);
$whatsapp = filter_var($whatsapp, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$comments = htmlspecialchars(strip_tags(trim($_POST['comments'])), ENT_QUOTES, 'UTF-8');


// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_magazine';


// Create a connection to the database
$conn = new mysqli(localhost, root, "", db_magazine);


// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


// Insert form data into the database
$sql = "INSERT INTO tb_subscriber(name, bdate, whatsapp, email, comments ) VALUES ('$name', '$bdate', '$whatsapp', '$email', '$comments')";
if ($conn->query($sql) === TRUE) {
echo "Form submitted successfully!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close the database connection
$conn->close();
?>