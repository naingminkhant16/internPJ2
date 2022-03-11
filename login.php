<?php
require "header.php";
if (!empty($_SESSION['user']['user_name'])) {
    echo "<script>window.location.href='index.php'</script>";
    die();
}
?>
<div class="login">
    <h3 class="title text-center text-dark">Welcome Back</h3>
    <p class="text-center" style="color: black;font-size: 16px;">You can now login.</p>

    <div class="row row-cols-1 row-cols-sm-2">
        <div class="col">
            <img src="images//login.jpg" class="container-fluid">
        </div>
        <div class="col">
            <form action="_actions/login.php" method="POST" class="mt-2" style="max-width: 400px;">
                <?php if (isset($_GET['errEmail'])) : ?>
                    <div class="alert alert-warning" style="font-size:14px">Email doesn't exist!</div>
                <?php endif; ?>
                <?php if (isset($_GET['errPsw'])) : ?>
                    <div class="alert alert-warning" style="font-size:14px">Incorrect Password</div>
                <?php endif; ?>

                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password :</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">
                        Login
                    </button>
                    <small>Don't have account? <a href="register.php" style="color:orange">Register now</a></small>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require 'footer.html' ?>