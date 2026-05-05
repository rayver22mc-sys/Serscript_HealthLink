-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2026 at 03:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
(6, 'Bea', 'Ku', 'beatriz@gmail.com', '$2y$10$tAHw8.UeCHD/onlSYmbL0eICAxGm.41gBwf4TJnwoHKahO9K3Ou.e', '2026-04-17 18:25:10'),
(7, 'Beatriz', 'Ku', 'bea@gmail.com', '$2y$10$FzEhdCtvVk6GujG.a4NxKOHY83D08ohfFqvLc0Tw.lLEFLyFef6Wa', '2026-04-17 18:33:22'),
(8, 'BeatrizTest', 'Ku', 'beatriztest@gmail.com', '$2y$10$D.Aq2sDoQ4VoTwT3U.IFiOc02ObMjavKOgskCUjfXZZr2GWp30JVS', '2026-04-17 18:34:31'),
(9, 'BeatrizTestt', 'Ku', 'beaku@gmail.com', '$2y$10$5R5bh7LTu1GL6JO6j2cM/O9EqBXxO91ZfT5vUiF.jbPkfdHE8Qkwm', '2026-04-17 18:41:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
