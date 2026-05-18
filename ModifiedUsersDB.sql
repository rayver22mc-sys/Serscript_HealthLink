-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2026 at 09:14 AM
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
-- Database: `doubledisasterdb1.0`
--

-- --------------------------------------------------------

--
-- Table structure for table `exerciseschedule`
--

CREATE TABLE `exerciseschedule` (
  `id` int(11) NOT NULL,
  `ExerciseSchedule1` varchar(25) NOT NULL,
  `ExerciseSchedule2` varchar(25) NOT NULL,
  `ExerciseSchedule3` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exerciseschedule`
--

INSERT INTO `exerciseschedule` (`id`, `ExerciseSchedule1`, `ExerciseSchedule2`, `ExerciseSchedule3`) VALUES
(1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usercalories`
--

CREATE TABLE `usercalories` (
  `id` int(11) NOT NULL,
  `Calories_Burned` int(25) NOT NULL,
  `Workout_Completed` int(25) NOT NULL,
  `Progress_Increased` int(25) NOT NULL,
  `breakfast_Calories` int(25) NOT NULL,
  `Lunch_Calories` int(25) NOT NULL,
  `Dinner_Calories` int(25) NOT NULL,
  `Monday_Total_Calories` int(25) NOT NULL,
  `Tuesday_Total_Calories` int(25) NOT NULL,
  `Wednesday_Total_Calories` int(25) NOT NULL,
  `Thursday_Total_Calories` int(25) NOT NULL,
  `Friday_Total_Calories` int(25) NOT NULL,
  `Saturday_Total_Calories` int(25) NOT NULL,
  `Sunday_Total_Calories` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercalories`
--

INSERT INTO `usercalories` (`id`, `Calories_Burned`, `Workout_Completed`, `Progress_Increased`, `breakfast_Calories`, `Lunch_Calories`, `Dinner_Calories`, `Monday_Total_Calories`, `Tuesday_Total_Calories`, `Wednesday_Total_Calories`, `Thursday_Total_Calories`, `Friday_Total_Calories`, `Saturday_Total_Calories`, `Sunday_Total_Calories`) VALUES
(1, 0, 0, 0, 360, 120, 400, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `password`, `created_at`) VALUES
(1, 'mark', 'rayver22@gmail.com', '$2y$10$F3mfoaBgdRfzz.UbQKcpF.NXzoVM0fELMzLTQo/PWRZ2MzW5AHNiK', '2026-05-12 07:55:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exerciseschedule`
--
ALTER TABLE `exerciseschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercalories`
--
ALTER TABLE `usercalories`
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
-- AUTO_INCREMENT for table `exerciseschedule`
--
ALTER TABLE `exerciseschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usercalories`
--
ALTER TABLE `usercalories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
