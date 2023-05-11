-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: May 11, 2023 at 03:40 AM
-- Server version: 8.0.33
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usergroupDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `allgroups`
--

CREATE TABLE `allgroups` (
  `groupid` smallint NOT NULL,
  `groupname` varchar(100) NOT NULL,
  `created_by` int NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `allgroups`
--

INSERT INTO `allgroups` (`groupid`, `groupname`, `created_by`, `created_date`, `updated_by`) VALUES
(1, 'admin', 1, '2019-02-01 00:00:00', 1),
(2, 'editor', 1, '2019-02-01 00:00:00', 1),
(3, 'user', 1, '2019-02-01 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int NOT NULL,
  `groupids` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(150) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created_by` int NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `groupids`, `email`, `name`, `phone`, `created_by`, `created_date`, `updated_by`) VALUES
(1, '1', 'admin@gmail.com', 'admin', '6471235678', 1, '2019-01-01 00:00:00', 1),
(2, '3', 'Auser@gmail.com', 'userA', '6477777777', 1, '2020-01-01 00:00:00', 1),
(3, '2', 'Aeditor@gmail.com', 'editorA', '6478888888', 1, '2020-02-01 00:00:00', 1),
(4, '3', 'Buser@gmail.com', 'userB', '6477777777', 1, '2020-01-01 00:00:00', 1),
(5, '2', 'Beditor@gmail.com', 'editorB', '6478888888', 1, '2020-02-01 00:00:00', 1),
(6, '3', 'Cuser@gmail.com', 'userC', '6477777777', 1, '2020-01-01 00:00:00', 1),
(7, '2', 'Ceditor@gmail.com', 'editorC', '6478888888', 1, '2020-02-01 00:00:00', 1),
(8, '3', 'Duser@gmail.com', 'userD', '6477777777', 1, '2020-01-01 00:00:00', 1),
(9, '2', 'Deditor@gmail.com', 'editorD', '6478888888', 1, '2020-02-01 00:00:00', 1),
(10, '3', 'Euser@gmail.com', 'userE', '6477777777', 1, '2020-01-01 00:00:00', 1),
(11, '2', 'Eeditor@gmail.com', 'editorE', '6478888888', 1, '2020-02-01 00:00:00', 1),
(12, '3', 'Fuser@gmail.com', 'userF', '6477777777', 1, '2020-01-01 00:00:00', 1),
(13, '2', 'Feditor@gmail.com', 'editorF', '6478888888', 1, '2020-02-01 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allgroups`
--
ALTER TABLE `allgroups`
  ADD PRIMARY KEY (`groupid`),
  ADD UNIQUE KEY `unique_groupname` (`groupname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allgroups`
--
ALTER TABLE `allgroups`
  MODIFY `groupid` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
