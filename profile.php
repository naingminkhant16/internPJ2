<?php
require "header.php";
if (empty($_SESSION['user']['user_name'])) {
    echo "<script>window.location.href='index.php'</script>";
    die();
}

include "config/DB.php";

use config\DB;

$db = new DB();
$user = $db->get($_SESSION['user']['user_id']);

// print_r($user);
?>
<div class="login">
    <h3 class="title text-center text-dark">Your Account Profile</h3>
    <p class="text-center" style="color: black;font-size: 16px;">You can update your information.</p>

    <div class="row row-cols-1 row-cols-sm-2">
        <div class="col">
            <img src="images/register.jpg" class="container-fluid">
        </div>
        <div class="col">
            <form action="_actions/update.php" method="POST" class="mt-2" style="max-width: 400px;margin:0 auto;">
                <?php if (isset($_GET['error'])) : ?>
                    <div class="alert alert-warning" style="font-size:14px">Password doesn't match!</div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="name" class="form-label">Name :</label>
                    <input type="text" class="form-control" name="name" value="<?= $user->name ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email :</label>
                    <input type="email" class="form-control" name="email" value="<?= $user->email ?>">
                </div>
                <!-- current password  -->
                <input type="hidden" class="form-control" name="currentpassword" value="<?= $user->password ?>">
                <div class="mb-3">
                    <label for="password" class="form-label">Change Password :</label>
                    <input type="password" class="form-control" name="newpassword" placeholder="Create new password">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Confirm Password :</label>
                    <input type="password" class="form-control" name="conpassword" placeholder="Confirm password">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone :</label>
                    <input type="text" class="form-control" name="phone" value="<?= $user->phone ?>">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary w-100">
                        Update
                    </button>
                    <a href="index.php" style="color:blue;text-decoration:none"><i class="fa-solid fa-arrow-left"></i>Back</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require "footer.html" ?>