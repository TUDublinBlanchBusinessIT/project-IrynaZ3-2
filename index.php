<!DOCTYPE html>
<html>
<head>
    <title>Add Movie Review</title>
</head>
<body>

<h2>Movie Review System - Add Review</h2>

<form method="POST" action="insert.php">
    <label>Movie Title:</label><br>
    <input type="text" name="title" required><br><br>

    <label>Your Review:</label><br>
    <textarea name="review" rows="5" cols="40" required></textarea><br><br>

    <button type="submit">Submit Review</button>
</form>

<br>
<a href="view.php">View All Reviews</a>

</body>
</html>
