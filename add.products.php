<?php
require 'db.php';

$name = $_POST['name'];
$price = $_POST['price'];
$image = $_POST['image'];

$stmt = $conn->prepare("INSERT INTO cases (name, price, image) VALUES (?, ?, ?)");
$stmt->bind_param("sds", $name, $price, $image);
$stmt->execute();

header("Location: index.html");
exit;
?>