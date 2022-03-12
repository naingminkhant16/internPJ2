<?php
include "../config/DB.php";

use config\DB;

if (!empty($_POST)) {

    // backend validation 
    if (empty($_POST['name']) || empty($_POST['email']) ||  empty($_POST['password']) || empty($_POST['phone'])) {
        $error = '';
        if (empty($_POST['name'])) {
            $error .= "nameReq&";
        }
        if (empty($_POST['email'])) {
            $error .= "emailReq&";
        }
        if (empty($_POST['password'])) {
            $error .= "pswReq&";
        }
        if (empty($_POST['phone'])) {
            $error .= "phReq";
        }
        header("location: ../register.php?" . $error);
        die();
    }
    // backend validation success

    $db = new DB();
    //email duplicated check 
    $user = $db->checkEmailDuplicated($_POST['email']);
    if (!empty($user)) {
        header("Location: ../register.php?emailErr=1");
        die();
    }
    // password validation 
    $psw = $_POST['password'];
    $con_psw = $_POST['confirm_password'];
    if ($psw !== $con_psw) {
        header("Location: ../register.php?pswErr=1");
    } elseif (strlen(trim($psw)) < 6) {
        header("Location: ../register.php?pswlenErr=1");
    } else {
        //overall validation success
        $data = [
            ":name" => $_POST['name'],
            ":email" => $_POST['email'],
            ":password" => password_hash($psw, PASSWORD_DEFAULT),
            ":phone" => $_POST['phone']
        ];
    
        $result = $db->register($data);
        if (!empty($result)) {
            echo "<script>alert('Registration success');window.location.href='../login.php'</script>";
        }
    }
} else {
    header("location: ../index.php");
}
