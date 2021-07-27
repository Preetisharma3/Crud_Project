<?php
    include_once('../DB/config.php');

    function createUser($conn, $userArr){
        $stmt = $conn->prepare(
            "insert into users(first_name,last_name,email,password) 
            values(
                    :first_name, 
                    :last_name, 
                    :email, 
                    :password
                )"
        );
        $result = $stmt->execute([
            ':first_name' => $userArr['first_name'],
            ':last_name' => $userArr['last_name'],
            ':email' => $userArr['email'],
            ':password' => md5($userArr['password']),
        ]);
        if( $result ){
            return true;
        }
        return false;
    }
    //unique email//

    function email($conn, $email){
        $stmt1 = $conn->prepare("SELECT email from users where email=:email");
            
        $stmt1->execute([':email'=>$email]);
        if($stmt1->rowCount() > 0){
            return true;
        }else{
            return false;
        }
           

     
}