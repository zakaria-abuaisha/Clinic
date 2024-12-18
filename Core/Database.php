<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "clinic";

try {
    $dsn = "mysql:host=$servername;dbname=$dbname";
    $db = new PDO($dsn, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex) {
    echo "Error: " . $ex->getMessage();
}
