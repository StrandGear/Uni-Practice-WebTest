<?php
/*
    session_start();

    if (!isset($_SESSION["username"])) {
        header("location: login.php");
        die();
    }
*/
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=loginsystem;', 'root', '1111');
        
    } catch (PDOException $e) {
        echo '<body style="background: linear-gradient(to bottom, #e74c3c, #c0392b)"><meta charset="UTF-8"><div style="position:fixed; color: white;top:50%;left:50%; transform: translateX(-50%) translateY(-50%); font-size: 35px; font-family: sans-serif;">Database error connection</div></body>';
        echo $e->getMessage();
        die();
    }

    function debug($value) {
        echo "<pre>";
        print_r($value);
        echo "</pre>";
    }
    