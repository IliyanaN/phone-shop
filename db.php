<?php
$servername = "db";
$username = "user"; 
$password = "userpassword";
$dbname = "phone_shop";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
