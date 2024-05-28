CREATE DATABASE ftns;
USE ftns;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);
CREATE TABLE planning_purchases (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    planning_id INT,
    card_number VARCHAR(20),
    expiry_date VARCHAR(5),
    cvv VARCHAR(3),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

