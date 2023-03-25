<?php
    require_once('./connection.php');
    if (isset($_POST['verify'])) {
        $_SESSION['message'] = "Code verified!";
        $_SESSION['msg_type'] = "info";
        $_SESSION['reset'] = True;
        header("Location:../frontend/resetPassword.php");
        exit();
    } 
    else if (isset($_POST['change']) and isset($_SESSION['phone'])) {
        $password = sha1($_POST['password']);
        $phone = $_SESSION['phone'];
        $sql = "UPDATE TABLE `USER` SET `password`= ? WHERE `USER_TEL`= ?";
        $query = $bdd->prepare($sql);
        $query->execute(array($password, $phone));
        $fetch = $query->fetch();

        $_SESSION['message'] = "Password changed successfully!";
        $_SESSION['msg_type'] = "success";
        header("Location:../frontend/login.php");
        exit();
    }
?>