<?php
include_once('../DB/config.php');

function show($conn){
    $stmt =  $conn->prepare("SELECT * FROM users");

    $stmt->execute();
   return $stmt->fetchall();
}