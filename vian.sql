-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 08:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vian`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`) VALUES
(1, 'cosmah kennedy', 'cosmahke4@gmail.com', '0708153467'),
(2, 'Mr.ken jack', 'jac06@gmail.com', '0772081843');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ken', 'jac06@gmail.com', '$2y$10$QQW84XdY2UNk0x5DM0McVOq.QKYvOGD.h6BQtSuTk2Utt7c.Ka/ou'),
(2, 'vian', 'vm@gmail.com', '$2y$10$k4CvEWeCZPAly6XuLJRf6eDepubIwg1K2KJZEyQYbc0ggI/T8Obay'),
(3, 'ken', 'jac06@gmail.com', '$2y$10$fLYbNhAzFi8EeNLG0/St7.n7jXF34ImU659FNp1A8qaOdou5DgmlW'),
(4, 'cosmah', 'cosmahke4@gmail.com', '$2y$10$Ntch6PHwJfXleC9UBK4CG.DVwPs/8csK10gqOA4w9u9VVsyzv3EKe'),
(5, 'Isaac Newton', 'newton@gmail.com', '$2y$10$Q9Bxsbm15hHNDuOVhmCG.O3FHFAUcjfLJP4LBut4//ZT2/0AUOKCG'),
(6, 'hello', 'hello@cosma.com', '$2y$10$yUjeVvDzpeM5RDdIC6BiSucxRwdJRd2bIumfVOy08/sX/tC/ztZye');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
