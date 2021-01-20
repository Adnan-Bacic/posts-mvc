-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 06:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `posts-mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `mvc_posts`
--

CREATE TABLE `mvc_posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mvc_posts`
--

INSERT INTO `mvc_posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(1, 2, 'title1', 'body1', '2020-07-14 14:26:25'),
(2, 3, 'body2', 'body2', '2020-07-14 14:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `mvc_users`
--

CREATE TABLE `mvc_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mvc_users`
--

INSERT INTO `mvc_users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'name1', 'adnan-bacic@hotmail.com', '123456', '2020-07-22 12:58:07'),
(2, 'a', 'adnan-bacic2@hotmail.com', '$2y$10$y7ooVwCtruSxU2Lq.Syj.ucuJcijCAIau8BUU8qcw7TrmObd99ZpK', '2020-07-22 13:42:17'),
(3, 'a', 'adnan-bacic3@hotmail.com', '$2y$10$TgKf.IT4oLnuvSqfOUut8OLx7MgGJg1Z/0uM/jBlVMpyvsxoC.VwO', '2020-07-22 14:26:44'),
(4, 'a', 'adnan-bacic4@hotmail.com', '$2y$10$75eWRt876JrCU6t8m5ywp.T6kaaXlJ3Kc3zv9ivNx5haHtGDTmCj2', '2020-07-22 14:27:53'),
(5, 'a', 'adnan-bacic5@hotmail.com', '$2y$10$HRjlLuiL0/PnhDQL0L1r3.vow6OLR1JySkRGvo/hFJY9XtSZFP91e', '2020-07-22 14:28:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mvc_posts`
--
ALTER TABLE `mvc_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mvc_users`
--
ALTER TABLE `mvc_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mvc_posts`
--
ALTER TABLE `mvc_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mvc_users`
--
ALTER TABLE `mvc_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
