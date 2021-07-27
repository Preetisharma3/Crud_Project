<?php
include_once('header.php');
?>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <span class="font-weight-bold text-muted">Login</span>
                </div>
                <div class="card-body">
                    <form action="../Controller/login.php" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        </div>
                        <input type= "submit"  class="btn btn-primary" name="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once('footer.php'); ?>