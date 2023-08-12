<?php

// Database credentials
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'db_quilling_web';

// Create a connection to the database
$conn = new mysqli($localhost, $root, "", $db_quilling_web);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Create a new project
function createProjects($p_title, $p_dscrptn, $p_image) {
global $conn;
$sql = "INSERT INTO tb_projects (p_title, p_dscrptn, p_image) VALUES ('$p_title', '$p_dscrptn', '$p_image')";
if ($conn->query($sql) === TRUE) {
echo "Project created successfully!";
} else {
echo "Error creating project: " . $conn->error;
}
}


// Read all projects
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


// Update a project by ID
function updateProjects($p_id, $p_title, $p_dscrptn, $p_image) {
global $conn;

$sql = "UPDATE tb_projects SET Project Title ='$p_title' WHERE ID=$p_id";
if ($conn->query($sql) === TRUE) {
echo "project updated successfully!";
} else {
echo "Error updating project: " . $conn->error;
}
}


// Delete a projec by ID
function deleteProjects($p_id) {
$sql = "DELETE FROM users WHERE ID=$p_id";
if ($conn->query($sql) === TRUE) {
echo "project deleted successfully!";
} else {
echo "Error deleting project: " . $conn->error;
}
}



// Sample Project

// Create a new project
createProjects('Quilling Jewlerry Box', 'A small size jewlerry box using quilling shapes.', 'https://i.pinimg.com/736x/3c/1b/c6/3c1bc69bd927a818817955f1ede2debe.jpg');


// Read all projects
readProjects();


// Update a project
updateProjects(01, 'Quilling Portrait');

// Delete a project
deleteProjects(01);


// Close the database connection
$conn->close();
?>