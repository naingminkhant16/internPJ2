<?php
include "../config/DB.php";

use config\DB;

if (!empty($_POST)) {

    if (!empty($_POST['newpassword'])) {
        if (!($_POST['newpassword'] == $_POST['conpassword'])) {
            header("Location: ../profile.php?error");
            die();
        }
        $password = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
    } else {
        $password = $_POST['currentpassword'];
    }
    $data = [
        ":name" => $_POST['name'],
        ":email" => $_POST['email'],
        ":password" => $password,
        ":phone" => $_POST['phone'],
        ":id" => $_SESSION['user']['user_id']
    ];

    $db = new DB();
    $success = $db->update($data);
    if ($success) {
        $_SESSION['user']['user_name'] = $_POST['name'];
        echo "<script>alert('Successfully updated');window.location.href='../index.php'</script>";
    } else {
        echo "<script>alert('Failed update!');window.location.href='../profile.php'</script>";
    }
} else {
    header("location: ../index.php");
}
