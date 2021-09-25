<?php
include "include/header.php"
?>

<div>
    <div class="row">
        <div class="header offset-md-4 col-md-4">
            <?php
            if(isset($_GET['msg'])){
                ?>
                <div class="bg-msg">
                    <?php echo $_GET['msg'];?>
                </div>
                <?php
            }else{

            }
            ?>
            <form  method="post" action="./include/reg-db.php">
                <div class="mb-3">
                    <label for="exampleInputUserName" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUserName" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" name="confirmPassword" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-success submit-btn">Register</button>
                <button type="button" onclick="document.location.href='index.php'" class="btn btn-primary">Sign In</button>
            </form>
        </div>
    </div>

</div>

<?php include "include/footer.php"; ?>
