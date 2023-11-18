-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 07:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdb`
--
CREATE DATABASE IF NOT EXISTS `formdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `formdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(32) NOT NULL,
  `password` int(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin1', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `fname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mssg` varchar(192) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `email`, `mssg`) VALUES
('syedniaz', 'syedniaz_10@yahoo.com', 'syedniaz'),
('subha', 'subha@bolbona.com', 'BEST'),
('bolbona', 'bolbona@bolbona.com', 'dekhi kaj kore naki'),
('surem', 'surem@emali.com', 'Ar in game knife ber korbo na'),
('Vikram Rathore', 'baap@jawan.com', 'Beta ko haath lagane se pehle baap se baat kar'),
('Azad Rathore', 'beta@jawan.com', 'Babaaa babaaaa'),
('Sanzar', 'sanzar@iub.edu.bd', 'Liverpool >>> Manchester United');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
