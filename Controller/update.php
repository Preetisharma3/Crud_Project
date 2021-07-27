<?php
include_once('../DB/config.php');
include_once('../Model/update.php');
if( isset($_POST['submit']) )
{

    //print_r($_POST);
    //exit();

    $userArr = [
        'first_name'       => $_POST['first_name'],
        'last_name'        => $_POST['last_name'],
        'email'            => $_POST['email'],
        'id'               => $_POST['id'],
    ];

    if( 
        !empty($userArr['first_name']) &&
        !empty($userArr['last_name']) &&
        !empty($userArr['email']) &&
        !empty($userArr['id'])
    
    );
    $result=(userupdate($conn, $_POST));{
        if($result)
        echo "updated sucessfully!";
    } 
}

else{
echo "Error: not updated!";
}  


?>