<?php
    include_once 'header.php';

    session_start();

    if (!isset($_SESSION["name"])) {
        if (!isset($_SESSION["surname"]))
        {
            header("location: login.php");
            die();
        }
        
    }
?>

<div class="content">
    <div class="one_column wide_modal_window">
        <h1><?=$_SESSION["name"]?></h1>
        <h1><?=$_SESSION["surname"]?></h1>
        <h2><?=$_SESSION["role"];?></h1>
        <h2> Результат тестирования: <?=$_SESSION["score"]?> из "26" </h2>
        <input type="button" value="Disconnect" onclick="location.href = 'disconnect.php';">
    </div>
</div>

<?php

?>
