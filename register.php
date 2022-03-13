<?php
require "header.php";
if (!empty($_SESSION['user']['user_name'])) {
    echo "<script>window.location.href='index.php'</script>";
    die();
}
?>
<div class="login">
    <small class="direction"><a href="index.php">Home</a> <i class="fa-solid fa-angle-right"></i> <a href="register.php">Register</a></small>

    <h3 class="title text-center text-dark">Sign Up With your email</h3>
    <p class="text-center" style="color: black;font-size: 16px;">We value your privacy.</p>

    <div class="row row-cols-1 row-cols-sm-2">
        <div class="col">
            <img src="images/register.jpg" class="container-fluid">
        </div>
        <div class="col">
            <form action="_actions/register.php" method="POST" class="mt-2" style="max-width: 400px;margin:0 auto;">

                <?php if (isset($_GET['pswErr'])) : ?>
                    <div class="alert alert-warning" style="font-size:14px">Password doesn't match!</div>
                <?php endif; ?>
                <?php if (isset($_GET['pswlenErr'])) : ?>
                    <div class="alert alert-warning" style="font-size:14px">Password must have at least 6 characters!</div>
                <?php endif; ?>
                <?php if (isset($_GET['emailErr'])) : ?>
                    <div class="alert alert-warning" style="font-size:14px">Email duplicated!</div>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="name" class="form-label">Name :</label><br>
                    <small style="color:red;float:left"><?= isset($_GET['nameReq']) ? '*Name is required' : '' ?></small>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label><br>
                    <small style="color:red;float:left"><?= isset($_GET['emailReq']) ? '*Email is required' : '' ?></small>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password :</label><br>
                    <small style="color:red;float:left"><?= isset($_GET['pswReq']) ? '*Password is required' : '' ?></small>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password :</label>
                    <input type="password" class="form-control" name="confirm_password">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone :</label><br>
                    <small style="color:red;float:left"><?= isset($_GET['phReq']) ? '*Phone is required' : '' ?></small>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">
                        Register
                    </button>
                    <small>Already have an account? <a href="login.php" style="color:orange">Login now</a></small>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require "footer.html" ?>