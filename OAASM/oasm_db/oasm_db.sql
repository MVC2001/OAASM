-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 01:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oasm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisors_texts_tbl`
--

CREATE TABLE `advisors_texts_tbl` (
  `text_id` int(11) NOT NULL,
  `text_message` varchar(300) NOT NULL,
  `category` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advisors_texts_tbl`
--

INSERT INTO `advisors_texts_tbl` (`text_id`, `text_message`, `category`, `created_at`) VALUES
(1, 'wellocom my student', '1', '2023-05-27 09:37:55'),
(2, 'hello again', '1', '2023-05-27 09:40:18'),
(4, 'ask any question my student', '2', '2023-05-27 09:52:11'),
(5, 'Nambie my student', '3', '2023-05-27 10:02:15'),
(6, 'wellcome to group 4', '4', '2023-05-27 10:12:34'),
(7, 'wellcom again to group 4', '4', '2023-05-27 10:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `advisor_tbl`
--

CREATE TABLE `advisor_tbl` (
  `adv_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `depertment` varchar(40) NOT NULL,
  `role` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advisor_tbl`
--

INSERT INTO `advisor_tbl` (`adv_id`, `name`, `position`, `school`, `depertment`, `role`, `email`, `password`, `created_at`) VALUES
(1, 'Benito Chengulakjj', 'Assistant lecture', 'SELB1', 'CSM', 'Group1', 'chengula@gmail.com', '42e73da287bb2e203fbbbe0ffb432d33', '2023-05-27 18:00:03'),
(3, 'Yohana', 'Asisstant lecture', 'SELB', 'CSM', 'Group2', 'yohana@gmail.com', 'd7c82d6b9acb2704b664bc89c01258b9', '2023-05-27 20:20:15'),
(4, 'Zurufa Zurufa', 'Assistant lecture', 'SELB', 'CSM', 'Group3', 'zurufa@gmail.com', 'f9b2771934d22e4569690b08e204da82', '2023-05-22 17:45:46'),
(7, 'Christian Christian', 'Assistant lecutre', 'SELB', 'CSM', 'Group4', 'christian@gmail.com', 'e133c50e7f36238150a6845f51d983e9', '2023-05-27 10:10:53'),
(8, 'Mudhihir Nyema', 'Assistant lecture', 'SELB', 'CSM', 'Group1', 'clever@gmail.com', '6074c6aa3488f3c2dddff2a7ca821aab', '2023-05-16 16:46:22'),
(9, 'mussa', 'oi', 'SELB', 'CSM', 'Group3', 'mussa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2023-05-17 10:15:38'),
(10, 'Hello', 'myposition', 'SELB', 'CSM', 'Group3', 'hello@gmail.com', 'eb61eead90e3b899c6bcbe27ac581660', '2023-05-22 22:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `cordinator_tbl`
--

CREATE TABLE `cordinator_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cordinator_tbl`
--

INSERT INTO `cordinator_tbl` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'admin/cordinotor', 'cordinator@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2023-05-23 20:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `stud_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year_ofstudy` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `depertment` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`stud_id`, `name`, `year_ofstudy`, `school`, `depertment`, `course`, `role`, `username`, `password`, `created_at`) VALUES
(1, 'Omary Ipombo', 'year 2', 'Selb', 'Csm', 'ISM2', '1', '26996/T.2021', '3cb18c6bf8e4f38a0e6c69483435027b', '2023-05-28 20:42:22'),
(3, 'Mudhihir H. Nyema', 'year 2', 'Selb', 'CSM', 'ISM2', '2', '26990/T.2021', 'cb2f34a2a98bdde2a683ca90fc4cb5fe', '2023-05-27 18:01:48'),
(7, 'test2', 'year 3', 'Sacem', 'SES', 'LMV', '3', 'test2@gmail.com', '033bd94b1168d7e4f0d644c3c95e35bf', '2023-05-27 18:02:00'),
(9, 'Agatha', 'year 2', 'Selb', 'CSM', 'ISM', '1', '269OO/T.2021', 'c23673726fec12a7ec9267c68afd4c3d', '2023-05-27 18:02:13'),
(10, 'Meckzeck', 'year 3', 'Selb', 'CSM', 'CSN', '4', '26788/T.2021', 'b8874b38e9fca879f1d017ebd625a448', '2023-05-27 18:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `stud_texts_tbl`
--

CREATE TABLE `stud_texts_tbl` (
  `text_id` int(11) NOT NULL,
  `text_message` varchar(300) NOT NULL,
  `category` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_texts_tbl`
--

INSERT INTO `stud_texts_tbl` (`text_id`, `text_message`, `category`, `created_at`) VALUES
(2, 'high again my advisor', 1, '2023-05-27 08:37:40'),
(4, 'high again group 2', 2, '2023-05-27 08:54:36'),
(6, 'hight again group 3', 3, '2023-05-27 08:57:39'),
(8, 'high again group 4', 4, '2023-05-27 09:14:07'),
(9, 'uko wap', 1, '2023-05-28 20:44:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisors_texts_tbl`
--
ALTER TABLE `advisors_texts_tbl`
  ADD PRIMARY KEY (`text_id`);

--
-- Indexes for table `advisor_tbl`
--
ALTER TABLE `advisor_tbl`
  ADD PRIMARY KEY (`adv_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `cordinator_tbl`
--
ALTER TABLE `cordinator_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `password` (`password`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `stud_texts_tbl`
--
ALTER TABLE `stud_texts_tbl`
  ADD PRIMARY KEY (`text_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisors_texts_tbl`
--
ALTER TABLE `advisors_texts_tbl`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `advisor_tbl`
--
ALTER TABLE `advisor_tbl`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stud_texts_tbl`
--
ALTER TABLE `stud_texts_tbl`
  MODIFY `text_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
