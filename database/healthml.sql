-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2026 at 02:35 AM
-- Server version: 8.0.45-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

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

-- --------------------------------------------------------

--
-- Table structure for table `eoi`
--

CREATE TABLE `eoi` (
  `eoi_id` int NOT NULL,
  `job_ref_num` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `suburb` varchar(50) NOT NULL,
  `state` char(3) NOT NULL,
  `postcode` char(4) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `skills` text,
  `other_skills` text,
  `status` enum('New','Current','Final') NOT NULL DEFAULT 'New'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eoi`
--

INSERT INTO `eoi` (`eoi_id`, `job_ref_num`, `first_name`, `last_name`, `date_of_birth`, `gender`, `street_address`, `suburb`, `state`, `postcode`, `email`, `phone_number`, `skills`, `other_skills`, `status`) VALUES
(1, 'HMLA7', 'Markus', 'Howl', '1965-12-06', 'male', '75 Birchwood Avenue', 'Mulberry', 'NSW', '4065', 'markh@gmail.com', '0123451234', 'time management, adaptability', 'Organisation', 'Current'),
(2, 'HMLC1', 'Joanne', 'Earl', '2008-03-27', 'female', '14 Elm Street', 'Earnsworth', 'VIC', '3988', 'sparkles6992@fastmail.net', '9876543210', 'communication, teamwork', 'Reading', 'Final'),
(3, 'HMLA7', 'Kris', 'Dreemur', '1987-12-25', 'other', '45 Egg Lane', 'Hometown', 'QLD', '1225', 'kris53@deltarune.com', '6173489654', 'teamwork', '', 'Current'),
(4, 'HMLC1', 'Kris', 'Elonia', '1982-03-06', 'male', '8 Markus Avenue', 'Westshire', 'VIC', '3994', 'kelonia@outlook.org', '6145632476', 'problem solving, adaptability', 'Excel', 'New'),
(5, 'HMLC1', 'Test', 'Test', '2000-01-01', 'male', '1 Glenferrie Road', 'Hawthorn', 'VIC', '3122', '106508843@student.swin.edu.au', '0400000000', 'communication', '', 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `hr_users`
--

CREATE TABLE `hr_users` (
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hr_users`
--

INSERT INTO `hr_users` (`username`, `password`) VALUES
('admin', '$2y$10$7GC7o6s5RNtK46JX5RXD4OzbSCS.EvvyZeLQHRUMs9G5YRx9/bJ/6');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `ref_num` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `job_title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `job_desc` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `salary` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `chain_command` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `resp` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `ess_req` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `pre_req` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`ref_num`, `job_title`, `job_desc`, `salary`, `chain_command`, `resp`, `ess_req`, `pre_req`) VALUES
('HMLA7', 'Health Services Support Officer', 'A service delivery role focused on operational support, patient assistance, and ensuring smooth day-to-day functioning of HealThML\'s care environment.', ' $68,000-$78,000 per year <em>(depending on experience)</em>', 'Operations & Service Delivery Lead', '<li>Coordinate patient appointments, follow-ups, and care pathways.</li>\r\n<li>Maintain accurate records and ensure privacy compliance.</li>\r\n<li>Communicate clearly with clinicians, families, and support teams.</li>\r\n<li>Monitor caseload progress and escalate issues when needed.</li>', '<li>Experience in healthcare admin, patient coordination, or support services.</li>\r\n<li>Strong communication skills and empathy in patient interactions.</li>\r\n<li>Confident using digital systems and managing detailed records.</li>\r\n<li>Ability to work collaboratively in a multidisciplinary team.</li>', '<li>Certificate or Diploma in Health Administration or related field.</li>\r\n<li>Experience in private healthcare or allied health settings.</li>\r\n<li>Familiarity with clinical terminology and workflows.</li>'),
('HMLC1', 'Clinical Care Coordinator', 'A frontline role responsible for guiding patients through their care journey, ensuring clear communication, timely support, and seamless coordination between clinicians, families, and service teams.', ' $68,000-$78,000 ', 'Senior Clinical Operations Manager', '<li>Coordinate patient appointments, follow ups, and care pathways.</li>\r\n<li>Maintain accurate records and ensure privacy compliance.</li>\r\n<li>Communicate clearly with clinicians, families, and supp', '<li>Experience in healthcare admin, patient coordination, or support services.</li>\r\n<li>Strong communication skills and empathy in patient interactions.</li>\r\n<li>Confident using digital systems and ', '<li>Certificate or Diploma in Health Administration or related field.</li>\r\n<li>Experience in private healthcare or allied health settings.</li>\r\n<li>Familiarity with clinical terminology and workflow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`Work ID`);

--
-- Indexes for table `eoi`
--
ALTER TABLE `eoi`
  ADD PRIMARY KEY (`eoi_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ref_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `Work ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `eoi`
--
ALTER TABLE `eoi`
  MODIFY `eoi_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
