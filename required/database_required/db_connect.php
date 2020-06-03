<?php
require_once "db_connect.php";

//todo remove db config
$servername = "localhodt";
$database = "myblog";
$username = "root";
$password = "Password";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
