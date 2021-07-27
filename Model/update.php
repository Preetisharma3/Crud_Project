<?php
include_once('../DB/config.php');

function getUserByID($conn, $id){
    $stmt = $conn->prepare("SELECT * FROM users where id=:id");
    $stmt->execute([
        ":id" => $id
    ]);
    $result = $stmt->fetch();
    return $result;
}

//-----update---------------
    function userupdate($conn, $userArr)
    {
    $stmt = $conn->prepare ("UPDATE users SET first_name = :first_name , last_name = :last_name , email = :email WHERE id =:id ");
    $result = $stmt->execute([
        ':first_name' => $userArr['first_name'],
        ':last_name' => $userArr['last_name'],
        ':email' => $userArr['email'],
        ':id' => $userArr['id']

    ]);

    if( $result ){
        return true;
    }
    return false;

}
?>
