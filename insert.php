<?php
include 'db.php';

$title = $_POST['title'];
$review = $_POST['review'];
$rating = $_POST['rating'];

$sql = "INSERT INTO reviews (movie_title, review_text, rating)
        VALUES ('$title', '$review', '$rating')";

if ($conn->query($sql)) {
    echo "Review added successfully!<br>";
} else {
    echo "Error: " . $conn->error;
}

echo "<br><a href='index.php'>Add Another Review</a>";
echo "<br><a href='view.php'>View All Reviews</a>";
?>
