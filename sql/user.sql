CREATE DATABASE IF NOT EXISTS `ftns`;
USE `ftns`;

CREATE TABLE `users` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(30) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `email` VARCHAR(50) NOT NULL
);

CREATE TABLE `payments` (
    `id` INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    `card_number` VARCHAR(20) NOT NULL,
    `expiry_date` VARCHAR(5) NOT NULL,
    `cvv` VARCHAR(3) NOT NULL
);

ALTER TABLE `users`
ADD COLUMN `poids` FLOAT NOT NULL,
ADD COLUMN `taille` FLOAT NOT NULL;

INSERT INTO payments (id, card_number, expiry_date, cvv) VALUES
(1, '1234567812345678', '2024-12-31', '123'),
(2, '8765432187654321', '2023-11-30', '456'),
(3, '1234987612349876', '2025-10-31', '789');

INSERT INTO users (id, username, password, email, poids, taille)
VALUES
  (1, 'user1', 'password1', 'user1@example.com', 70, 170),
  (2, 'user2', 'password2', 'user2@example.com', 65, 165),
  (3, 'user3', 'password3', 'user3@example.com', 80, 180);