-- Adminer 5.3.0 MySQL 9.3.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS Recipes;
CREATE TABLE Recipes (
id int NOT NULL AUTO_INCREMENT,
id_user int NOT NULL,
title varchar(255) NOT NULL,
description varchar(255) NOT NULL,
PRIMARY KEY (id),
KEY id_user (id_user),
CONSTRAINT Recipes_ibfk_1 FOREIGN KEY (id_user) REFERENCES Users (id) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DROP TABLE IF EXISTS Users;
CREATE TABLE Users (
id int NOT NULL AUTO_INCREMENT,
user varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
password varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- 2025-08-04 09:02:31 UTC