<?php
    require_once('../backend/connection.php');
    if (isset($_POST['forgot'])) {
        $phone = trim($_POST['phone']);
        if (!empty($phone)) {
            $sql = "SELECT * FROM `USER` WHERE `USER_TEL`=?";
            $query = $bdd->prepare($sql);
            $query->execute(array($phone));
            $row = $query->rowCount();
            $fetch = $query->fetch();
            if ($row == 1) {
                $_SESSION['phone'] = $phone;
                $_SESSION['message'] = 'You will receive a password reset code on that phone number';
                $_SESSION['msg_type'] = 'info';
                // send the reset code before going on resetPassword
                header("Location:../frontend/resetPassword.php");
                exit();
            } else {
                $_SESSION['message'] = 'Account not found';
                $_SESSION['msg_type'] = 'danger';
                header("Location:../frontend/login.php");
                exit();
            }
        }
    }
?>
