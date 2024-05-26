-- Adminer 4.8.1 MySQL 10.4.32-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `pokemondisplaysystem` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `pokemondisplaysystem`;

DROP TABLE IF EXISTS `pokemon`;
CREATE TABLE `pokemon` (
  `Pokemon_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` char(1) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Level` int(11) NOT NULL,
  `Abilities` char(1) NOT NULL,
  `Typing` int(11) NOT NULL,
  `Region` int(11) NOT NULL,
  PRIMARY KEY (`Pokemon_id`),
  UNIQUE KEY `Region` (`Region`),
  UNIQUE KEY `Typing` (`Typing`),
  CONSTRAINT `pokemon_ibfk_1` FOREIGN KEY (`Pokemon_id`) REFERENCES `trainers` (`Pokemon Amount`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pokemon_ibfk_3` FOREIGN KEY (`Region`) REFERENCES `region` (`Region_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pokemon_ibfk_4` FOREIGN KEY (`Typing`) REFERENCES `typing` (`Typing_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `Region_id` int(11) NOT NULL AUTO_INCREMENT,
  `Kanto` int(11) NOT NULL,
  `Johto` int(11) NOT NULL,
  `Hoenn` int(11) NOT NULL,
  `Sinnoh` int(11) NOT NULL,
  `Unova` int(11) NOT NULL,
  `Kalos` int(11) NOT NULL,
  PRIMARY KEY (`Region_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `trainers`;
CREATE TABLE `trainers` (
  `Trainers_id` int(11) NOT NULL AUTO_INCREMENT,
  `Badges` int(11) NOT NULL,
  `Gender` char(255) NOT NULL,
  `Pokemon Amount` int(6) NOT NULL,
  `Trainers_Region` char(255) NOT NULL,
  PRIMARY KEY (`Trainers_id`),
  UNIQUE KEY `Pokemon Amount` (`Pokemon Amount`),
  CONSTRAINT `trainers_ibfk_2` FOREIGN KEY (`Trainers_id`) REFERENCES `user_account` (`Username_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `typing`;
CREATE TABLE `typing` (
  `Typing_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fire` int(11) NOT NULL,
  `Water` int(11) NOT NULL,
  `Grass` int(11) NOT NULL,
  `Electric` int(11) NOT NULL,
  `Normal` int(11) NOT NULL,
  `Physchic` int(11) NOT NULL,
  `Dark` int(11) NOT NULL,
  `Fairy` int(11) NOT NULL,
  `Ice` int(11) NOT NULL,
  `Flying` int(11) NOT NULL,
  `Ground` int(11) NOT NULL,
  `Rock` int(11) NOT NULL,
  `Ghost` int(11) NOT NULL,
  `Steel` int(11) NOT NULL,
  `Dragon` int(11) NOT NULL,
  `Fighting` int(11) NOT NULL,
  `Bug` int(11) NOT NULL,
  `Poison` int(11) NOT NULL,
  PRIMARY KEY (`Typing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `user_account`;
CREATE TABLE `user_account` (
  `Username_id` int(111) NOT NULL AUTO_INCREMENT,
  `Email` char(255) NOT NULL,
  `Username` char(255) NOT NULL,
  `Password` char(255) NOT NULL,
  PRIMARY KEY (`Username_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `user_account` (`Username_id`, `Email`, `Username`, `Password`) VALUES
(23,	'rasdasda@gmail.com',	'rage',	'$2y$10$u5nYJDQ5id2/tivX70q97.rTik4aMkYQWl1VE23904rmY1zfnGkpu'),
(24,	'rasdasda@gmail.com',	'rages',	'$2y$10$tJCCTsXDoOUXwbfdisOy/uugQDa.E1BOUpoeRZSHH3yTHQYcGJWwS'),
(25,	'rasdasda@gmail.com',	'rages',	'$2y$10$sj4cnJSD2Kk..s3ftrMBZO0lQ4G/lwsSr28fGd.b7xO78pTRakf2K'),
(26,	'rasdasda@gmail.com',	'ragess',	'$2y$10$2vRflAvq55eskCudC8jhceYcZ48tjl48KuSCdEF3VlAa1Yuo5cDai'),
(27,	'rasdasda@gmail.com',	'ragess',	'$2y$10$l9/eX5OE6TT8Md6YzXy.OuDZLnCySd5F4Ox1NCn0o7E1aNoYARAEG');

-- 2024-05-26 12:43:32