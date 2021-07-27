<?php
 include_once('../DB/config.php');
 include_once('../Model/login.php');

 session_start();

if( isset($_POST['submit']) ){
  if( !empty($_POST['email'] && !empty($_POST['password']) ) ){
    $login = loginUser($conn, $_POST['email'], $_POST['password']);
    if( !empty($login) ){
      $_SESSION['id']         = $login['id'];
      $_SESSION['first_name'] = $login['first_name'];
      $_SESSION['last_name']  = $login['last_name'];
      $_SESSION['email']      = $login['email'];
    } 
      header('location:'.BASE_URL.'/pages/index.php');
    }
    else{
      echo "Invalid User";
    }
  }else{
    echo "All fields are required";
  }
