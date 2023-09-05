-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 06:18 PM
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
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `educ` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profs`
--

INSERT INTO `profs` (`prof_id`, `first_name`, `mid_name`, `last_name`, `age`, `contact_num`, `address`, `email`, `img`, `educ`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd', 31, 0, '', 'asdasd@gmail.com', '', 'asdasdasd'),
(2, 'Christian', 'Lotino', 'Montesor ', 18, 9104291800, '', 'christianmontesor@gmail.com', '', 'College Grad'),
(3, 'Rayven', 'Padre', 'Moratalla', 21, 9104291800, '', 'vee@gmail.com', '', 'College Grad\r\nTaking Masteral'),
(5, 'Erlfred', 'Albelio', 'Joaquin', 30, 9876542311, '', 'erlfred@gmail.com', '', 'Repeater\r\nCollege Grad\r\nPedo'),
(6, 'Jade Ken', 'Acero', 'Manlapaz', 21, 915, '', 'jadekenpogilang@gmail.com', '', 'goodshit'),
(7, 'Jambie', 'Villamor', 'Espinas', 20, 9999919191919, '', 'jambieXrenzo@gmail.com', '', 'DI nakapagtapos kasi mahal na mahal ko si renzo\r\n'),
(8, 'John Rey', 'Megasonic', 'Dado', 59, 999, '', 'daduputi@yahoo.com', '', 'albay central school SY 1968-1969'),
(9, 'asdasd', 'asdasd', 'asdasd', 123, 123, 'asdasd', 'aasd@gmail.com', '244246245_4405238442888410_3943852264469229727_n.jpg', 'adasdsad'),
(10, 'Christian', 'Lotino', 'Montesor', 18, 910492810, 'Sagpon', 'asd@gmail.com', '244246245_4405238442888410_3943852264469229727_n.jpg', 'College Grad'),
(11, 'Christian ', 'Lotino', 'Montesor', 24, 910492810, 'Sagpon', 'asd@gmail.com', '244246245_4405238442888410_3943852264469229727_n.jpg', 'College Grad'),
(12, 'Christian', 'asdasd', 'Montesor', 111, 9462704475, 'Sagpon Daraga', 'christianmontesor@gmail.com', '366064609_294888526421499_1136290317040738864_n (1).jpg', 'aassdd'),
(13, 'Christian', 'asdasd', 'Montesor', 111, 9462704475, 'Sagpon Daraga aaaa', 'christianmontesor@gmail.com', '366064609_294888526421499_1136290317040738864_n (1).jpg', 'aassdd'),
(14, 'Christian', 'asdasd', 'Montesor', 111, 9462704475, 'Sagpon Daraga aaaa', 'christianmontesor@gmail.com', '343268655_528027689336399_5175790113728576315_n.png', 'aassdda'),
(15, 'Christian', 'asdasd', 'Montesor', 123, 9462704475, 'Sagpon Daraga aaaa', 'christianmontesor@gmail.com', 'asa3.jpg', 'aassdda');

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
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
