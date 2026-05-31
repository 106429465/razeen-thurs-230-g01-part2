-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2026 at 04:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `ref_num` varchar(5) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_desc` varchar(200) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `chain_command` varchar(200) NOT NULL,
  `resp` varchar(500) NOT NULL,
  `ess_req` varchar(500) NOT NULL,
  `pre_req` varchar(500) NOT NULL
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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`ref_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
