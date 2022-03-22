<?php

include("../layout/header.php");
?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-light mb-8">
                <div class="card-header">Sign Up</div>
                <div class="card-body">
                   <form action="..\scripts\register.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control my-3" placeholder="First Name" name="fname">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control  my-3" placeholder="Last Name" name="lname">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control  my-3" placeholder="Your@email.com" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control  my-3" placeholder="Password" name="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control  my-3" placeholder="Confirm Password" name="confirm">
                        </div>
                        <button type="submit" class="btn">Submit</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>