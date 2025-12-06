<?php
require 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];

$sql = "UPDATE items SET name = ?, description = ?, WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $id, $name, $description);
