<?php
    include_once('header.php');
    include_once('../Model/update.php');
    
    //print_r($_GET);
    //echo "<pre>";
    //print_r(getUserByID($conn, $_GET['id']));
    //echo "</pre>";
?>
<?php
    if(isset($_GET['id'])):
        $userArr = getUserByID($conn ,$_GET['id']);
        
?>

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold text-muted">Edit-Form</span>
                </div>
                <div class="card-body">
                <form action="../Controller/edit.php" method="post">

                    <input type="hidden" name="id" id="" value ="<?=$_GET['id']?>">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="Enter first name" name="first_name"
                            value="<?= $userArr['first_name']?>">

                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Enter last name" name="last_name"
                            value="<?= $userArr['last_name']?>">
                            
                        </div>
                        <div class="form-group">
                            <label for="emIL">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email"
                            value="<?= $userArr['email']?>">
                        </div>
                        
                       
                        <input type="submit" class="btn btn-primary" name="submit">

                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
<?php
    include_once('footer.php');
?>