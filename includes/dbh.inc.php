<?php

$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpLogin";

// Handles the connection to the database
$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// Failed connection error handler
if(!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}