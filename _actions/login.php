<?php
include "../config/DB.php";

use config\DB;

if (!empty($_POST)) {
    $db = new DB();
    if (empty($_POST['email']) ||  empty($_POST['password'])) {
        $error = '';

        if (empty($_POST['email'])) {
            $error .= "emailReq&";
        }
        if (empty($_POST['password'])) {
            $error .= "pswReq";
        }
        header("location: ../login.php?" . $error);
        die();
    }
    $db->login($_POST['email'], $_POST['password']);
} else {
    header('location: ../index.php');
}
