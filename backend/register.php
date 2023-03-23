<?php
	if (isset($_POST['signup'])) {
        include('connection.php');
        if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['address'])) {
            
            // getting form data
            $username = trim($_POST['username']);
            $password = sha1(trim($_POST['password']));
            $name = trim($_POST['name']);
            $phone = trim($_POST['phone']);
            $address = trim($_POST['address']);

            // writing sql request to check if the username is already used
            $sql = "SELECT * FROM `USER` WHERE `USERNAME` = ?";
            $query = $bdd->prepare($sql);
            $query->execute(array($username));
            $row = $query->rowCount();

            $fetch = $query->fetch();

            if ($row > 0) {
               $_SESSION['message'] = "This username is already used!";
               header("Location:../frontend/signup.php");
               exit;
            } else {
                
                // writing sql request to check if another customer don't have the same name or phone
                $sql = "SELECT * FROM `CUSTOMER` WHERE `CUSTOMER_TEL` = ?";
                $query = $bdd->prepare($sql);
                $query->execute(array($phone));
                $row = $query->rowCount();

                if ($row > 0) {
                    $_SESSION['message'] = "This phone number is already used!";
                    header("Location:../frontend/signup.php");
                    exit;
                } else {

                    // writing sql request to check if the username is already used
                    $sql = "SELECT * FROM `CUSTOMER` WHERE `CUSTOMER_NAME` = ?";
                    $query = $bdd->prepare($sql);
                    $query->execute(array($name));
                    $row = $query->rowCount();

                    $fetch = $query->fetch();
                    
                    if ($row > 0) {
                    $_SESSION['message'] = "This name is already used!";
                    header("Location:../frontend/signup.php");
                    exit;
                    } else {
                    
                        // writing sql request to check if another customer don't have the same name or phone
                        $sql = "INSERT INTO `USER` VALUES (?,?,?)";
                        $query = $bdd->prepare($sql);
                        $query->execute(array(0,$username, $password));
                        header("Location:../frontend/login.php");
                    }
                }
            }
        } else {
            echo "<script> alert('Please complete the required field!');</script>";
            header("Location:../frontend/signup.php");
        }
    }
?>