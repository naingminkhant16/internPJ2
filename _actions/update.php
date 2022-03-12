<?php
include "../config/DB.php";

use config\DB;

if (!empty($_POST)) {
    // backend validation 
    if (empty($_POST['name']) || empty($_POST['phone'])) {
        $error = '';
        if (empty($_POST['name'])) {
            $error .= "nameReq&";
        }
        if (empty($_POST['phone'])) {
            $error .= "phReq";
        }
        header("location: ../profile.php?" . $error);
        die();
    }
    //password validation
    if (!empty($_POST['newpassword'])) {
        if (!($_POST['newpassword'] == $_POST['conpassword'])) {
            header("Location: ../profile.php?error=1");
            die();
        } else {
            if (strlen(trim($_POST['newpassword'])) < 6) {
                header("Location: ../profile.php?pswLenErr=1");
                die();
            }
            $password = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
        }
    } else {
        $password = $_SESSION['user']['user_password'];
    }
    //overall validation success
    $data = [
        ":name" => $_POST['name'],
        ":password" => $password,
        ":phone" => $_POST['phone'],
        ":id" => $_SESSION['user']['user_id']
    ];

    $db = new DB();
    $success = $db->update($data);
    if ($success) {
        $_SESSION['user']['user_name'] = $_POST['name'];
        $_SESSION['user']['user_password'] = $password;
        echo "<script>alert('Successfully updated');window.location.href='../index.php'</script>";
    } else {
        echo "<script>alert('Failed update!');window.location.href='../profile.php'</script>";
    }
} else {
    header("location: ../index.php");
}
