<?php
    include('connection.php');
    session_start();

    $user_check = $_SESSION['user_id'];

    $sql = "SELECT * FROM `USER` WHERE `USER_ID`=?";
    $query = $bdd->prepare($sql);
    $query->execute(array($user_check));
    $row = $query->rowCount();

    $fetch = $query->fetch();

    if ($row > 0) {
        $login_session = $fetch['USERNAME'];
    }

    if (!isset($_SESSION['user_id'])) {
        // header("Location: ../frontend/login.php");
        die();
    }

?>