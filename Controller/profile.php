<?php
    include_once('../DB/config.php');
    include_once('../Model/profile.php');

    $jj= show($conn);
    echo json_encode($jj); 
        

        

?>