<?php
include 'db/connect.php';

$result = $conn->query("SELECT * FROM reviews ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Reviews</title>
</head>
<body>

<h2>All Movie Reviews</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Movie Title</th>
    <th>Review</th>
    <th>Rating</th>
    <th>Created At</th>
</tr>

<?php while ($row = $result->fetch_assoc()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['movie_title'] ?></td>
    <td><?= $row['review_text'] ?></td>
    <td><?= str_repeat("⭐", $row['rating']) ?></td>
    <td><?= $row['created_at'] ?></td>
</tr>
<?php endwhile; ?>

</table>

<br>
<a href="index.php">Add New Review</a>

</body>
</html>
