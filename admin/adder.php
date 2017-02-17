<?php
$servername = "localhost";
$username = "kewlguy13x";
$password = "riley000";
$dbname = "crimages";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$cn = $_GET['cn']; 
$name = $_GET['name']; 
$cost = $_GET['cost']; 
$type = $_GET['type']; 
$rarity = $_GET['rarity']; 
$arena = $_GET['arena']; 

$sql = "INSERT INTO cards (cn, name, cost, type, rarity, arena)
VALUES ('$cn', '$name', '$cost', '$type', '$rarity', '$arena')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>