-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2023 at 11:29 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-pdo-crud-toets`
--
CREATE DATABASE IF NOT EXISTS `php-pdo-crud-toets` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `php-pdo-crud-toets`;

-- --------------------------------------------------------

--
-- Table structure for table `dureauto`
--

DROP TABLE IF EXISTS `dureauto`;
CREATE TABLE IF NOT EXISTS `dureauto` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Merk` varchar(200) DEFAULT NULL,
  `Model` varchar(200) DEFAULT NULL,
  `Topsnelheid` int(10) DEFAULT NULL,
  `Prijs` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dureauto`
--

INSERT INTO `dureauto` (`Id`, `Merk`, `Model`, `Topsnelheid`, `Prijs`) VALUES
(1, 'Bugatti ', 'La vioture noire', 420, '16500000'),
(2, 'Koenigsegg', 'CCXR Trevita', 401, '4000000'),
(3, 'Bugatti ', 'EB110', 390, '7500000'),
(4, 'Mercedes-Bnez', 'Maybach Exelero', 350, '6700000'),
(31, 'Rolls-Royce', 'Swaptail', 250, '10960000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
