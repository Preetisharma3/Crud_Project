<?php
include_once('../DB/config.php');
include_once('../Model/delete.php');
if( isset($_POST['submit']) )
{
   
$result=(userdelete($conn, $_POST));{
    if($result)
    echo "DELETED sucessfully!";
} 
}

else{
echo "Error: not DELETED!";
}  


?>




