-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 01:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wt_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_Id` int(11) NOT NULL,
  `Book_Title` varchar(50) NOT NULL,
  `Book_Author` varchar(50) NOT NULL,
  `Book_Quantity` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_Id`, `Book_Title`, `Book_Author`, `Book_Quantity`) VALUES
(5, 'asd', 'asd', 5),
(2, 'java', 'xyz', 6),
(11, 'php', 'abc', 49);

-- --------------------------------------------------------

--
-- Table structure for table `issue_data`
--

CREATE TABLE `issue_data` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `Book_id` int(11) NOT NULL,
  `Book_title` varchar(50) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `issue_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_data`
--

INSERT INTO `issue_data` (`id`, `student_id`, `Book_id`, `Book_title`, `Status`, `issue_date`) VALUES
(92, 15, 5, 'asd', 'return', '2021-04-21 03:56:27'),
(91, 14, 5, 'asd', 'issued', '2021-03-31 08:25:40'),
(90, 14, 2, 'java', 'return', '2021-03-31 08:23:51'),
(89, 14, 5, 'asd', 'issued', '2021-03-31 08:23:40'),
(88, 14, 11, 'php', 'issued', '2021-03-31 08:22:37'),
(87, 2, 5, 'asd', 'issued', '2021-03-27 06:05:23'),
(86, 2, 2, 'java', 'return', '2021-03-26 06:19:12'),
(85, 2, 5, 'asd', 'issued', '2021-03-25 14:27:13'),
(84, 2, 2, 'java', 'issued', '2021-03-25 14:25:02'),
(83, 2, 11, 'php', 'return', '2021-03-25 14:24:49'),
(82, 2, 6, 'asd', 'return', '2021-03-25 14:24:04');

-- --------------------------------------------------------

--
-- Table structure for table `ragister_user`
--

CREATE TABLE `ragister_user` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Semester` int(11) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Issue_book` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ragister_user`
--

INSERT INTO `ragister_user` (`id`, `Name`, `Password`, `Status`, `Semester`, `Branch`, `Issue_book`) VALUES
(2, 'jay', 'jay1', 'admin', 2, 'me', 3),
(3, 'yash', 'yash', 'admin', 5, 'ce', 0),
(12, 'raj', 'raj', 'admin', 5, 'ce', 0),
(13, 'ravi', 'ravi1', 'student', 6, 'me', 0),
(14, 'nidhi', 'nidhi', 'admin', 6, 'ce', 3),
(15, 'shiv', 'shiv', 'student', 6, 'ce', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_Id`);

--
-- Indexes for table `issue_data`
--
ALTER TABLE `issue_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ragister_user`
--
ALTER TABLE `ragister_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `issue_data`
--
ALTER TABLE `issue_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `ragister_user`
--
ALTER TABLE `ragister_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
