
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

    <label>Your Review</label><br>
    <textarea name="review" rows="5" cols="40" required></textarea><br><br>

    <label>Rating:</label><br>
    <input type="radio" name="rating" value="1" required> 1 Star<br>
    <input type="radio" name="rating" value="2"> 2 Stars<br>
    <input type="radio" name="rating" value="3"> 3 Stars<br>
    <input type="radio" name="rating" value="4"> 4 Stars<br>
    <input type="radio" name="rating" value="5"> 5 Stars<br><br>

    <label>Genre:</label><br>
    <select name="genre" required>
        <option value="">Select Genre</option>

        <?php
        $genres = $conn->query("SELECT * FROM genres");
        while ($g = $genres->fetch_assoc()):
        ?>
            <option value="<?= $g['id']; ?>">
                <?= $g['genre_name']; ?>
            </option>
        <?php endwhile; ?>

    </select><br><br>

    <button type="submit">Submit Review</button>
</form>

<br>
<a href="view.php">View All Reviews</a>

</body>
</html>
