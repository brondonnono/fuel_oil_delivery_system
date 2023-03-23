<?php
	if (isset($_POST['login'])) {
        include('connection.php');
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM `USER` WHERE `USERNAME`=? AND `PASSWORD`=?";
            $query = $bdd->prepare($sql);
            $query->execute(array($username, $password));
            $row = $query->rowCount();

            $fetch = $query->fetch();

            if ($row == 1) {
               echo "logged in";
               $_SESSION['username'] = $username;
               $_SESSION['user_id'] = $fetch['USER_ID'];
               header("Location:../frontend/index.php");
            } else {
                echo "<script> alert('Invalid username or password');</script>";
                header("Location:../frontend/login.php");
            }
        } else {
            echo "<script> alert('Please complete the required field!');</script>";
            header("Location: login.php");
        }
    }
?>