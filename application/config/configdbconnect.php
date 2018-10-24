<?php
$globleConnectDB = array();
try {
    $username = "j2k5e6r5_octopus";
    $password = "India$2017";
    $conn = new PDO('mysql:host=localhost;dbname=j2k5e6r5_shanielfashions', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    $stmt = $conn->prepare('SELECT * FROM site_configuration');
    $stmt->execute();
    while($row = $stmt->fetch()) {
        $globleConnectDB = $row;
    }
} catch(PDOException $e) {
 
}
