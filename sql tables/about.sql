-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2026 at 05:28 AM
-- Server version: 8.0.46
-- PHP Version: 8.5.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `healthml`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `Person` set('Tyler','Marley','Zain','Jack') NOT NULL,
  `Work ID` int NOT NULL,
  `Contribution` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`Person`, `Work ID`, `Contribution`) VALUES
('Tyler', 1, 'Home Page'),
('Tyler', 3, 'Core CSS'),
('Tyler', 4, 'Jire Management'),
('Zain', 5, 'Apply Page'),
('Zain', 6, 'Core CSS'),
('Zain', 7, 'Accessibility Checking'),
('Marley', 8, 'About Page'),
('Marley', 9, 'Github Management'),
('Jack', 10, 'Jobs Page'),
('Tyler', 11, 'File Formatting (including .inc files)'),
('Tyler', 12, 'About Page Contributions Table'),
('Marley', 13, 'HR Management Backend'),
('Marley', 14, 'Login Page'),
('Zain', 15, 'Form Submission'),
('Jack', 16, 'Jobs Table & Search Functionality'),
('Zain', 17, 'Dark Mode Functionality'),
('Jack', 18, 'Nav and Footer icons');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Work ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Work ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
