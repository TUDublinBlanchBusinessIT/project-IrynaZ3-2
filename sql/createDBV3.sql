USE movieid;

CREATE TABLE genres (
    id INT AUTO_INCREMENT PRIMARY KEY,
    genre_name VARCHAR(100)
);

INSERT INTO genres (genre_name) VALUES
('Action'), ('Comedy'), ('Drama'), ('Horror');

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    movie_title VARCHAR(255),
    review_text TEXT,
    rating INT,
    genre_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (genre_id) REFERENCES genres (id)
);