<?php
require 'db.php';

$name = $_POST['name'];
$description = $_POST['description'];

$sql = "INSERT INTO items (name, description) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $description);

if ($stmt->execute()) {
    echo "Item added successfully.<br><br>";
} else {
    echo "Error: " . $stmt->error;
}

echo "<a href='add.php'>Add Another</a><br>";
echo "<a href='view.php'>View All Items</a>";
?>
