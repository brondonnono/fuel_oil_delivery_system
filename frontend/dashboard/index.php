<?php
    require_once('../../backend/connection.php');
    if ($_SESSION['user_type'] == 'admin')
        echo 'admin';
    else 
        echo 'agent';
?>