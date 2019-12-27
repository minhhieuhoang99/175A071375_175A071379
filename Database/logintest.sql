-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 09:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logintest`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(60) ,
  `registration_date` datetime NOT NULL,
  `user_level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `user_level`) VALUES
(20, 'Mike', 'Rosoft', 'miker@myisp.com', '', '2018-05-17 17:33:49', 0),
(21, 'Olive', 'Branch', 'obranch@myisp.com.uk', '', '2018-05-17 17:35:21', 0),
(22, 'Frank', 'Insence', 'finsence@myisp.net', '', '2018-05-17 17:36:46', 0),
(23, 'Annie', 'Versary', 'aversary@myisp.com', '', '2018-05-17 17:37:47', 0),
(24, 'Terry', 'Fide', 'tfide@myisp.de', '', '2018-05-17 17:54:39', 0),
(25, 'Rose', 'Bush', 'rbush@myisp.co.uk', '', '2018-05-17 17:55:38', 0),
(26, 'James', 'Smith', 'jsmith@myisp.co.uk', '', '2018-05-17 17:57:11', 0),
(27, 'Jack', 'Smith', 'jsmith@outcook.com', '', '2018-05-17 17:58:14', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
