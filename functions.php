<?php

// function for insert projects
function createProjects($p_title, $p_dscrptn, $p_image) {
global $conn;
$sql = "INSERT INTO tb_projects (p_title, p_dscrptn, p_image) VALUES ('$p_title', '$p_dscrptn', '$p_image')";
if ($conn->query($sql) === TRUE) {
echo "Project created successfully!";
} else {
echo "Error creating project: " . $conn->error;
}
}


// function for get projects
function readProjects() {
global $conn;

$sql = "SELECT * FROM tb_projects";

$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		echo "ID: " . $row['p_id'] . ", Project Title: " . $row['p_title'] . ", Description: " . $row['p_dscrptn'] . ", Image: " . $row['p_image'] . "<br>";
}
} else {
echo "No projects found.";
}
}

// function for update projects
function updateProjects($p_id, $p_title, $p_dscrptn, $p_image) {
global $conn;

$sql = "UPDATE tb_projects SET Project Title ='$p_title' WHERE ID=$p_id";
if ($conn->query($sql) === TRUE) {
echo "project updated successfully!";
} else {
echo "Error updating project: " . $conn->error;
}
}


//function delete projects
function deleteProjects($p_id) {
$sql = "DELETE FROM users WHERE ID=$p_id";
if ($conn->query($sql) === TRUE) {
echo "project deleted successfully!";
} else {
echo "Error deleting project: " . $conn->error;
}
}


//function for validate form
function validateForm(){ 
$name = filter_var($name, FILTER_SANITIZE_STRING);
$bdate = filter_var($bdate, FILTER_SANITIZE_DATE);
$whatsapp = filter_var($whatsapp, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$comments = htmlspecialchars(strip_tags(trim($_POST['comments'])), ENT_QUOTES, 'UTF-8');
}


//function for connect database
function connectDatabase(){
$conn = new mysqli(localhost, root, "", db_magazine);
}


// function for Check connection
function checkConnection(){
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
}

?>