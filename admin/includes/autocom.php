<?php
    //database configuration
    $dbHost = 'localhost';
    $dbUsername = 'changeme';
    $dbPassword = 'changeme';
    $dbName = 'clashroyale';
    
    $db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
    $searchTerm = $_GET['term'];
    
    $query = $db->query("SELECT * FROM cards WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC");
    while ($row = $query->fetch_assoc()) {
        $data[] = $row['name'];
    }
    
    //return json data
    echo json_encode($data);
?>