-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 08:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prof`
--

-- --------------------------------------------------------

--
-- Table structure for table `profs`
--

CREATE TABLE `profs` (
  `prof_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `contact_num` bigint(14) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `educ` longtext NOT NULL,
  `experience` varchar(255) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profs`
--

INSERT INTO `profs` (`prof_id`, `first_name`, `mid_name`, `last_name`, `age`, `contact_num`, `specialization`, `address`, `email`, `img`, `educ`, `experience`, `status`) VALUES
(23, 'Clark Nelson', 'Lotino', 'Montesor', 20, 9462704475, '', 'Sagpon Daraga', 'christianmontesor@gmail.com', 'asa3.jpg', 'Biology', '0', 1),
(24, 'Chan', 'Lotino', 'Montesor', 21, 9104291800, 'Chemistry\r\nBiology\r\nPhysics', 'Sagpon Daraga', 'christianmontesor@gmail.com', '244246245_4405238442888410_3943852264469229727_n.jpg', 'HS GRAD\r\nCOLLEGE GRAD\r\nTAKING MASTERAL', '0', 1),
(25, 'Maria Jovelle', 'asd', 'Nocomora', 24, 1234343434, 'BS Ed Math', 'GUINOBATAN', 'jovs@gmail.com', '../uploads/330613924_519250096985696_463167490740670324_n.jpg', 'COLLEGE GRAD', '2 years teaching MORMS', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profs`
--
ALTER TABLE `profs`
  ADD PRIMARY KEY (`prof_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profs`
--
ALTER TABLE `profs`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
