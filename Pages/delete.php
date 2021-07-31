 <?php
     include_once('header.php');
     include_once('../DB/config.php');
     include_once('../Model/delete.php');
     ?> 

    <?php
    
    
    if(isset($_GET['id']));
    $userArr = userdelete($conn,$_GET['id']);



?>

    <!-- <form action="../Controller/delete.php" method="post">
    
    <input type="number"  name="id">
    <input type="hidden"  name="id"  value="<?= $userArr['id']?>">
    <input type="submit" class="btn btn-primary" name="submit">
    
    
    </form> -->

