<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "newsdesk";

// create connection
$db_connected = new mysqli($servername, $username, $password, $dbName);

if ($db_connected->connect_error) {
  die('Connection Failed:' . mysqli_connect_error());
}

// echo "DB connected successfully";
