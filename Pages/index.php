<?php
include_once('./header.php');
include_once('../Model/profile.php');
include_once('../Model/delete.php');
session_start();

?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-8">

            
            <?php
            //echo "<pre>";
            //print_r($_SESSION);
           // echo "</pre>";
            ?>
            

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                <?php 
                    
                    $users = show($conn);
                    //echo count($users);
                    
                    foreach($users as $user) :
                ?>
                <tr>
                    
                    <?php // print_r($user['id'])?>
                    <th scope="row"><?php echo $user['id']?></th>
                    <td><?php echo$user['first_name']?></td>
                    <td><?php echo$user['last_name']?></td>
                    <td><?php echo$user['email']?></td>
                    <td> 
                        <a href="<?=BASE_URL.'/pages/edit.php?id='.$user['id'];?>">
                        <button type="button" class="btn mx-1">
                            <i class="fa fa-pencil text-warning"></i>
                        </button>
                        </a>
                        <a  href="<?=BASE_URL.'/pages/delete.php?id='.$user['id'];?>">>
                        <button type="button" class="btn mx-1">
                            <i class="fa fa-trash text-danger"></i>
                        </button>
                    </a>
                    </td>
                </tr>
                <?php endforeach ?>
                
            </tbody>
        </table>
    </div>
</div>
</div>
<?php
include_once('./footer.php');
?>