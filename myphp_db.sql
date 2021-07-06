-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 11:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myphp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_login_tbl`
--

CREATE TABLE `user_login_tbl` (
  `t_id` bigint(20) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `loginUsername` varchar(255) NOT NULL,
  `loginPassword` varchar(255) NOT NULL,
  `loginStatus` varchar(255) NOT NULL,
  `loginAccess` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login_tbl`
--

INSERT INTO `user_login_tbl` (`t_id`, `user_id`, `loginUsername`, `loginPassword`, `loginStatus`, `loginAccess`) VALUES
(2, '06072021-7D11025', 'demoaccount', 'demoaccount', 'Offline', 'NO'),
(3, '06072021-961BDA0', 'createaccount', 'createaccount', 'Offline', 'NO'),
(4, '06072021-1FD6120', 'roald12345', 'roald12345', 'Offline', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_login_tbl`
--
ALTER TABLE `user_login_tbl`
  ADD PRIMARY KEY (`t_id`,`user_id`,`loginUsername`,`loginPassword`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_login_tbl`
--
ALTER TABLE `user_login_tbl`
  MODIFY `t_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
