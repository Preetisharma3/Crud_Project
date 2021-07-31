<?php include_once('header.php'); ?>
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold text-muted">Sign up</span>
                </div>
                <div class="card-body">
                    <form method="post" action="../Controller/register.php">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" aria-describedby="emailHelp" placeholder="Enter first name" name="first_name">

                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" aria-describedby="emailHelp" placeholder="Enter last name" name="last_name">
                            
                        </div>
                        <div class="form-group">
                            <label for="emIL">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" 
                            placeholder="Password" name="password">
                            
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password">
                        </div>
                        <input type="submit" id="submit" class="btn btn-primary" name="submit">
                        <!-- <button type="submit" class="btn btn-primary">Sign up</button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>