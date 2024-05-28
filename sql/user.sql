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


