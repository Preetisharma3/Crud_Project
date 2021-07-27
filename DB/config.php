<?php

define('BASE_URL','http://localhost/corePhp');
define('BASE_PATH', __DIR__);

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "core_php_db";

try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
    
?>