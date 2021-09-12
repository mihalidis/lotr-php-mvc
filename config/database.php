<?php
$servername = DB_HOST;
$username = DB_USER;
$password = DB_PASS;
$databaseName = DB_NAME;

try {
    $db = new PDO("mysql:host=$servername;dbname=".$databaseName, $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /*echo "Connected successfully";*/
} catch(PDOException $e) {
    die(var_dump("Connection failed: " . $e->getMessage()));
}

?>