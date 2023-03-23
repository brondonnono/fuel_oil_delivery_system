<?php
    session_start();
	if (isset($_POST['login'])) {
        include('connection.php');
        if (!empty(trim($_POST['username'])) && !empty(trim($_POST['password']))) {
            $username = $_POST['username'];
            $password = sha1($_POST['password']);
            $sql = "SELECT * FROM `USER` WHERE `USERNAME`=? AND `PASSWORD`=?";
            $query = $bdd->prepare($sql);
            $query->execute(array($username, $password));
            $row = $query->rowCount();

            $fetch = $query->fetch();

            if ($row == 1) {
               $_SESSION['username'] = $username;
               $_SESSION['user_id'] = $fetch['USER_ID'];
               header("Location:../frontend/index.php");
               exit();
            } else {
                echo "<script> alert('Invalid username or password');</script>";
                $_SESSION['message'] = "Invalid username or password";
                header("Location:../frontend/login.php");
            }
        } else {
            echo "<script> alert('Please complete the required field!');</script>";
            $_SESSION['message'] = "Please complete the required field";
            header("Location: ../frontend/login.php");
        }
    }
?>
