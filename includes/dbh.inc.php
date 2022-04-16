<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBname = "loginSystem";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn) {
    die("Connection failes: " . mysqli_connect_error());
}