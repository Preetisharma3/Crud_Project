<?php

include_once('../DB/config.php');
include_once('../Model/update.php');
if( isset($_POST['submit']) )

{
    $userArr=[
        'first_name'    =>$_POST['first_name'],
        'last_name'     =>$_POST['last_name'],
        'email'         =>$_POST['email'],
        'id'            =>$_POST['id'],
    ];

    if(
        !empty($userArr['first_name'])&&
        !empty($userArr['last_name'])&&
        !empty($userArr['email'])&&
        !empty($userArr['id'])
    ){
        
        $result = (userupdate($conn, $_POST));

        if($result){
            header("location:".BASE_URL."/pages/index.php");
        }else{
            echo "Can't Update!";
        }
    }

       else{
        echo "Error: not updated!";
        }  
}
?>