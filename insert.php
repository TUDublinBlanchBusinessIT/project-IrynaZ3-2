<?php
include 'db/connect.php';

$title = $_POST['title'];
$review = $_POST['review'];
$rating = $_POST['rating'];
$genre = $_POST['genre'];

$sql = "INSERT INTO reviews (movie_title, review_text, rating, genre_id)
        VALUES ('$title', '$review', '$rating', '$genre')";

if ($conn->query($sql)) {
    echo "Review added successfully!<br>";
} else {
    echo "Error: " . $conn->error;
}

echo "<br><a href='index.php'>Add Another Review</a>";
echo "<br><a href='view.php'>View All Reviews</a>";
?>
