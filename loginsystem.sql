-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2020 at 02:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(20) NOT NULL,
  `user_last` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_uid` varchar(10) NOT NULL,
  `user_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Reshma', 'Lihe', 'reshmalihe@gmail.com', 'reslihe', '123abc'),
(2, 'janhvi', 'Lihe', 'janulihe@gmail.com', 'jan_lihe', '1234556abc'),
(3, 'Pritee', 'Lihe', 'lihepritee@gmail.com', 'plihe', '123pqr'),
(4, 'Vijaya', 'Thakare', 'vijaya@gmail.com', 'v123', '3456'),
(14, 'reshma', 'lihe', 'res@gamil.com', 'resh', '789456123'),
(15, 'janardan', 'lihe', 'janardan@gmail.com', 'jlihe', 'mcxmv'),
(16, 'abc', 'xyz', 'nfjdnmj@gamil.com', 'erw', '325'),
(17, 'reshma', 'lihe', 'reshmalihe00068@gmail.com', 'res', 'Reshma@69');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
