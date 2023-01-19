-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 09:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skilltest`
--

-- --------------------------------------------------------

--
-- Table structure for table `newpost`
--

CREATE TABLE `newpost` (
  `post_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `post_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newpost`
--

INSERT INTO `newpost` (`post_id`, `user_id`, `post_title`, `post_content`, `post_date`) VALUES
(14, 3, 'xc', 'zxcxc', '2023-01-19 07:37:51.000000'),
(17, 3, 'aaa', 'bbb', '2023-01-19 07:37:56.000000'),
(18, 5, 'new postx', 'qwex', '2023-01-19 08:07:43.000000'),
(21, 4, 'dfg', 'dfgdfg', '2023-01-19 08:18:59.000000');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`user_id`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'jaz', 'jaz@gmail.com', 'jaz', 'jaz'),
(3, 'jaz', 'jazpher@gmail.com', 'jaz', 'jaz'),
(4, 'new', 'new@gmail.com', 'jaz', 'jaz'),
(5, 'new acc', 'newagain@gmail.com', 'jaz', 'jaz'),
(6, 'new', 'trial@gmail.com', 'jaz', 'jaz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newpost`
--
ALTER TABLE `newpost`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newpost`
--
ALTER TABLE `newpost`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
