<?php
$servername = "localhost";
$username = "changeme";
$password = "changeme";
$dbname = "clashroyale";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_GET['name'];

$sql = "DELETE FROM cards WHERE name = '$name';";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header('Refresh: 2; URL = ..\..\delete.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>