<?php

include_once('../DB/config.php');

function userdelete($conn, $userArr)
{
$stmt = $conn->prepare ("DELETE from users where id=:id" );
$result = $stmt->execute([
    ":id" =>$userArr
]);

return $result;

}


?>