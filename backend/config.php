<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

$servername = "127.0.0.1";
$username = "root";
$password = "goldtree9";
$dbname = "todo";

// Create connection
$db_handle = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($db_handle->connect_error) {
    echo "Connected failed";
    exit("Connection failed: " . $db_handle->connect_error ."\n");
}
?>