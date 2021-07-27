<?php
include_once('../DB/config.php');

function loginUser($conn, $email, $password){
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=:email and password=:password LIMIT 1");
    $stmt->execute([
        ':email' => $email,
        ':password' => md5($password)
    ]);
    $result = $stmt->fetch();

    return $result;

}

    
    

   