-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 10:49 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'cryptace', '$2y$04$j150rKQzwLI3MZDzWPGde.H/Gvzs4oKgkBu1mqjDFB5vz5HqDBZsW'),
(2, 'crypto', '$2y$04$OuRTodCS7Q8S6XPD.gDOoOreW/oDmFPHG8Pk7Cyh/BmnkeQ4vJxCO'),
(3, 'cry', '$2y$04$xiJbALvrX8HQPTzsfZfz7unh6diRbmE9NOeAqKeKXOUP3aJfkBfZS'),
(4, 'cryp', '$2y$04$dLajYnvYjMuBltAmuNquhuqqabL2wqnscuWInCnPDMSz8GKPex.H.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
