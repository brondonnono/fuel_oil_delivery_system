<?php
    session_start();
    try
    {
        // Connection to mySQL SERVER
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=fuel management system', 'root', '', $pdo_options);
    }
    catch(Exception $e)
    {
        //If the previous command make an error, we show the error message and stop all
        die('Error : '.$e->getMessage());
    }
?>
