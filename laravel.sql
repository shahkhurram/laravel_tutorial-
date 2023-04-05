-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 07:12 AM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `user_id`) VALUES
(1, 'luc', 1),
(2, 'amazon', 2),
(3, 'flipkart', 3),
(13, 'airtel', 4);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `user_id`) VALUES
(1, 'laptop', 1),
(2, 'computer', 2),
(3, 'mobile', 1),
(4, 'earpods', 1),
(5, 'car', 2);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `email`, `phone`) VALUES
(1, 'khurram', 'khurramgaur8@gmail.com ', '9248559456'),
(2, 'gaur', 'khurr@gmail.com', '1576878765'),
(3, 'ali', 'khyuj@gmail.com', '1576878765');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_02_15_095812_create_test_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `username`, `email`, `comment`) VALUES
(1, 'khurram', 'khurrydbcu@gmail.com', 'deegsthrhehdhhhs'),
(2, 'ali', 'khurramgaur8@gmail.com ', 'trhhrdhttrdhsr');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(114) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `updated_at`, `created_at`) VALUES
(1, 'khurram', 'khutt@gmau.com', '9248559456', 'tytr', '2023-02-16 08:57:42', '2023-02-16 12:30:49'),
(2, 'gaur', 'khurramgaur8@gmail.com', '37843435334', 'eroihw', '2023-02-16 12:31:30', '2023-02-16 12:31:30'),
(9, 'khurram_gaur ali', 'khurramgaur8@gmail.com', '8126364389', 'tt4wertrgge', '2023-02-15 05:59:13', '2023-02-14 13:22:41'),
(13, 'epogjo egspjpotsr esr\'ojg', 'khurramgaur8@gmail.com', '8126364389', 'strjjtr', '2023-02-15 05:30:36', '2023-02-15 05:30:36'),
(14, 'gaurboy', 'gaurboy@gmail.com', '86545466356', 'adsyukfg43', '2023-02-15 12:22:56', '2023-02-15 12:22:56'),
(15, 'gaurboy', 'gaurboy@gmail.com', '86545466356', 'adsyukfg43', '2023-02-15 12:28:49', '2023-02-15 12:28:49'),
(16, 'gaurboy', 'gaurboy@gmail.com', '86545466356', 'adsyukfg43', '2023-02-15 12:28:55', '2023-02-15 12:28:55'),
(17, 'asjdfgdsurboy', 'gaurboy@gmail.com', '86545466356', 'adsyukfg43', '2023-02-15 12:29:23', '2023-02-15 12:29:23'),
(18, 'asjdfgdsurboy', 'gaurboy@gmail.com', '86545466356', 'adsyukfg43', '2023-02-15 12:29:25', '2023-02-15 12:29:25'),
(20, 'hanry cavil', 'email@gmail.com', '231197', 'dom123', '2023-02-16 08:45:49', '2023-02-16 06:24:23'),
(21, 'domnictorreto', 'email@gmail.com', '231197', 'dom123', '2023-02-16 08:44:25', '2023-02-16 06:27:25'),
(22, 'dom', 'email@gmail.com', '+91 231197', 'dom123', '2023-02-16 06:27:51', '2023-02-16 06:27:51'),
(23, 'mr. dom', 'email@gmail.com', '+91 231197', 'dom123', '2023-02-16 06:28:37', '2023-02-16 06:28:37'),
(24, 'Mr. dom', 'email@gmail.com', '+91 231197', '4beeb5d2c2294f60f19db2e48656b791', '2023-02-16 07:43:37', '2023-02-16 07:43:37'),
(25, 'Mr. dom', 'email@gmail.com', '+91 231197', '4beeb5d2c2294f60f19db2e48656b791', '2023-02-16 07:43:40', '2023-02-16 07:43:40'),
(26, 'Mr. dom', 'email@gmail.com', '+91 231197', '4beeb5d2c2294f60f19db2e48656b791', '2023-02-16 07:44:52', '2023-02-16 07:44:52'),
(27, 'shah', 'khurramgaur8@gmail.com', '08126364389', '123456', '2023-02-16 08:36:57', '2023-02-16 08:36:57'),
(28, 'khurram_gaur', 'khurramgaur8@gmail.com', '08126364389', 'frerw', '2023-02-16 08:39:23', '2023-02-16 08:39:23'),
(29, 'khurram_gaur', 'khurramgaur8@gmail.com', '8126364389', 'erety', '2023-02-16 08:41:31', '2023-02-16 08:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
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
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
