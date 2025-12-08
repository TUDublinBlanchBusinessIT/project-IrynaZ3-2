CREATE DATABASE movieid;
USE movieid;

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    movie_title VARCHAR(255),
    review_text TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
