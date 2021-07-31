<?php
include_once('../DB/config.php');
include_once('../Model/register.php');
//print_r($_POST);exit;
if( isset($_POST) )
{

    $userArr = [
        'first_name'       => $_POST['first_name'],
        'last_name'        => $_POST['last_name'],
        'email'            => $_POST['email'],
        'password'         => $_POST['password'],
        'confirm_password' => $_POST['confirm_password'],
    ];

    if( 
        !empty($userArr['first_name']) &&
        !empty($userArr['last_name']) &&
        !empty($userArr['email']) &&
        !empty($userArr['password']) &&
        !empty($userArr['confirm_password'])
    ){
        if( ($userArr['password']) == ($userArr['confirm_password'])){
            if( email($conn, $userArr['email']) ){
                echo "Email address already exist!";
            }else{
                if(createUser($conn, $userArr)){
                    echo "Created Successfully!";
                } 
            }
            
        } else{
            echo "Password not match!";
        }  

    }else{
        echo "All fields are required!";
    }
    
}else{
    echo "Something went wrong!";
}
//unique email//
