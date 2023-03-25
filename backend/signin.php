<?php
    session_start();
	if (isset($_POST['login'])) {
        include('./connection.php');
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
                $user_id= $fetch['USER_ID'];
                $_SESSION['user_id'] = $user_id;

                $sql = "SELECT * FROM `ADMIN` WHERE `USER_ID`=?";
                $query = $bdd->prepare($sql);
                $query->execute(array($user_id));
                $row = $query->rowCount();
    
                $fetch = $query->fetch();
    
                if ($row == 1) {
                    $_SESSION['user_type'] = 'admin';
                } else {
                    $sql = "SELECT * FROM `DELIVERY_AGENT` WHERE `USER_ID`=?";
                    $query = $bdd->prepare($sql);
                    $query->execute(array($user_id));
                    $row = $query->rowCount();
        
                    $fetch = $query->fetch();
        
                    if ($row == 1) {
                        $_SESSION['user_type'] = 'agent';
                    } else {
                        $_SESSION['user_type'] = 'customer';
                    }
                }
                header("Location: ../frontend/index.php");
                exit();
            } else {
                echo "<script> alert('Invalid username or password');</script>";
                $_SESSION['message'] = "Invalid username or password";
                $_SESSION['msg_type'] = "danger";
                header("Location: ../frontend/login.php");
            }
        } else {
            echo "<script> alert('Please complete the required field!');</script>";
            $_SESSION['message'] = "Please complete the required field";
            $_SESSION['msg_type'] = "danger";
            header("Location: ../frontend/login.php");
        }
    }
?>
