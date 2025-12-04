<!DOCTYPE html>
<html>
<head>
    <title>Add Item</title>
</head>
<body>

<h2>Add New Item</h2>

<form action="insert.php" method="POST">
    Name: <input type="text" name="name" required><br><br>
    Description:<br>
    <textarea name="description"></textarea><br><br>
    <button type="submit">Save</button>
</form>

<br>
<a href="view.php">View Items</a>

</body>
</html>
