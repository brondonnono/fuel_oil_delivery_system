<?php
    session_start();
    if (isset($_POST['forgot'])) {
        $phone = trim($_POST['phone']);
        if (!empty($phone)) {
            $sql = "SELECT * FROM `CUSTOMER` WHERE `CUSTOMER_TEL`=?";
            $query = $bdd->prepare($sql);
            $query->execute(array($phone));
            $row = $query->rowCount();

            $fetch = $query->fetch();

            if ($row == 1) {
                $_SESSION['message'] = 'You will receive a password reset code on that phone number';
                header("Location:../frontend/login.php");
                exit();
            }
        }
    }
?>