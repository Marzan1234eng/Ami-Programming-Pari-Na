<?php
include "include/header.php";
?>

    <div class="row">
        <div class="header offset-md-4 col-md-4">
            <form class="input-form" method="post" action="./include/login-db.php">
                <div class="mb-3">
                    <label for="exampleInputUserName" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUserName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-success submit-btn">Sign In</button>
                <button type="button" onclick="document.location.href = './register.php'" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
    </div>


<?php include "include/footer.php" ?>