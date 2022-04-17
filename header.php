<?php
include_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300&display=swap" rel="stylesheet">
    <title>Сети</title>
</head>
<body>

    <div class="header">
        <p class="headerText" onclick="location.href = 'index.php';">О проекте</p>
        <div class="dropdown headerText">
            <p onclick="myFunction()" class="dropbtn">Оглавление</p>
            <div id="myDropdown" class="dropdown-content">
              <a href="info.php">Компьютерные сети</a>
              <a href="lan.php">Локальные сети</a>
              <a href="wan.php">Глоабльные сети</a>
              <a href="create.php">Создание сети</a>
              <a href="connect.php">Обеспечение</a>
              <a href="send.php">Передача данных</a>
              <a href="ip.php">Адрес</a>
            </div>
          </div>
        <p class="headerText" onclick="location.href = 'end.php';">Тесты</p>
        <img onclick="location.href = 'login.php';" src="res/iconPerson.png" alt="icon of person">
    </div>