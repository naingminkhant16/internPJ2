<?php
include "../config/DB.php";

use config\DB;

if (!empty($_POST)) {
    $db = new DB();
    $db->login($_POST['email'], $_POST['password']);
} else {
    header('location: ../index.php');
}
