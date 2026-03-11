-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2026 at 04:28 AM
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
-- Database: `spta_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_log`
--

CREATE TABLE `audit_log` (
  `log_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `action` varchar(60) NOT NULL,
  `table_affected` varchar(60) DEFAULT NULL,
  `record_id` int(10) UNSIGNED DEFAULT NULL,
  `old_value` text DEFAULT NULL,
  `new_value` text DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `audit_log`
--

INSERT INTO `audit_log` (`log_id`, `user_id`, `action`, `table_affected`, `record_id`, `old_value`, `new_value`, `ip_address`, `created_at`) VALUES
(1, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-08 08:28:26'),
(2, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-08 08:30:03'),
(3, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-08 08:30:07'),
(4, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-08 08:30:12'),
(5, 3, 'LOGIN', 'users', 3, NULL, NULL, '::1', '2026-03-08 09:33:46'),
(6, 3, 'LOGOUT', 'users', 3, NULL, NULL, '::1', '2026-03-08 09:39:23'),
(7, 3, 'LOGIN', 'users', 3, NULL, NULL, '::1', '2026-03-08 09:40:01'),
(8, 3, 'LOGOUT', 'users', 3, NULL, NULL, '::1', '2026-03-08 10:58:38'),
(9, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-08 10:58:43'),
(10, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-08 11:30:31'),
(11, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-08 11:40:13'),
(12, 4, 'LOGOUT', 'users', 4, NULL, NULL, '::1', '2026-03-08 11:40:45'),
(13, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-08 11:41:48'),
(14, 5, 'RECORD_PAYMENT', 'payments', 1, NULL, NULL, '::1', '2026-03-08 11:43:02'),
(15, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-08 11:43:27'),
(16, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-08 11:46:03'),
(17, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-08 13:54:57'),
(18, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-09 01:50:16'),
(19, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-09 01:51:09'),
(20, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-09 01:51:12'),
(21, 4, 'ADD_STUDENT', 'students', 2, NULL, NULL, '::1', '2026-03-09 01:51:44'),
(22, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-09 01:52:19'),
(23, 4, 'LOGOUT', 'users', 4, NULL, NULL, '::1', '2026-03-09 02:25:50'),
(24, 3, 'LOGIN', 'users', 3, NULL, NULL, '::1', '2026-03-09 02:25:53'),
(25, 3, 'LOGOUT', 'users', 3, NULL, NULL, '::1', '2026-03-09 02:38:30'),
(26, 3, 'LOGIN', 'users', 3, NULL, NULL, '::1', '2026-03-09 10:26:18'),
(27, 3, 'LOGOUT', 'users', 3, NULL, NULL, '::1', '2026-03-09 10:27:58'),
(28, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-09 10:28:03'),
(29, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-09 10:28:55'),
(30, 3, 'LOGIN', 'users', 3, NULL, NULL, '::1', '2026-03-09 10:29:00'),
(31, 3, 'LOGOUT', 'users', 3, NULL, NULL, '::1', '2026-03-09 10:48:25'),
(32, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-09 10:48:35'),
(33, 5, 'RECORD_PAYMENT', 'payments', 2, NULL, NULL, '::1', '2026-03-09 10:49:13'),
(34, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-09 10:55:24'),
(35, 3, 'LOGIN', 'users', 3, NULL, NULL, '::1', '2026-03-09 10:55:27'),
(36, 3, 'LOGOUT', 'users', 3, NULL, NULL, '::1', '2026-03-09 11:11:57'),
(37, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-09 11:12:04'),
(38, 4, 'LOGOUT', 'users', 4, NULL, NULL, '::1', '2026-03-09 11:13:44'),
(39, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-09 11:13:50'),
(40, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-09 11:14:16'),
(41, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-09 11:14:20'),
(42, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-09 11:27:27'),
(43, 3, 'LOGIN', 'users', 3, NULL, NULL, '::1', '2026-03-09 11:27:30'),
(44, 3, 'LOGOUT', 'users', 3, NULL, NULL, '::1', '2026-03-09 12:33:03'),
(45, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-09 12:33:07'),
(46, 4, 'RECORD_PAYMENT', 'payments', 3, NULL, NULL, '::1', '2026-03-09 12:35:04'),
(47, 4, 'LOGOUT', 'users', 4, NULL, NULL, '::1', '2026-03-09 14:10:51'),
(48, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-09 14:10:54'),
(49, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 00:10:08'),
(50, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 02:41:46'),
(51, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-10 02:44:01'),
(52, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-10 02:45:29'),
(53, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-10 02:46:05'),
(54, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-10 02:46:36'),
(55, 4, 'LOGOUT', 'users', 4, NULL, NULL, '::1', '2026-03-10 02:47:57'),
(56, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 02:49:59'),
(57, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-10 02:55:38'),
(58, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-10 02:56:00'),
(59, 4, 'LOGOUT', 'users', 4, NULL, NULL, '::1', '2026-03-10 02:59:03'),
(60, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-10 02:59:27'),
(61, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-10 03:01:17'),
(62, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-10 03:01:37'),
(63, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-10 05:01:52'),
(64, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 05:02:04'),
(65, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-10 05:30:38'),
(66, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 05:35:36'),
(67, 2, 'ADD_STUDENT', 'students', 3, NULL, NULL, '::1', '2026-03-10 05:36:21'),
(68, 2, 'ADD_STUDENT', 'students', 4, NULL, NULL, '::1', '2026-03-10 05:38:50'),
(69, 2, 'ADD_STUDENT', 'students', 5, NULL, NULL, '::1', '2026-03-10 05:43:37'),
(70, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-10 06:06:05'),
(71, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 06:11:39'),
(72, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-10 06:12:14'),
(73, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-10 06:12:28'),
(74, 4, 'LOGOUT', 'users', 4, NULL, NULL, '::1', '2026-03-10 06:13:18'),
(75, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-10 06:13:38'),
(76, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-10 06:14:13'),
(77, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 06:14:23'),
(78, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-10 06:15:58'),
(79, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-10 06:17:49'),
(80, 2, 'LOGIN', 'users', 2, NULL, NULL, '::1', '2026-03-11 02:47:58'),
(81, 2, 'LOGOUT', 'users', 2, NULL, NULL, '::1', '2026-03-11 02:48:53'),
(82, 5, 'LOGIN', 'users', 5, NULL, NULL, '::1', '2026-03-11 02:49:45'),
(83, 5, 'LOGOUT', 'users', 5, NULL, NULL, '::1', '2026-03-11 02:49:59'),
(84, 4, 'LOGIN', 'users', 4, NULL, NULL, '::1', '2026-03-11 02:50:20');

-- --------------------------------------------------------

--
-- Table structure for table `grade_levels`
--

CREATE TABLE `grade_levels` (
  `grade_id` int(10) UNSIGNED NOT NULL,
  `grade_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `grade_levels`
--

INSERT INTO `grade_levels` (`grade_id`, `grade_name`) VALUES
(1, 'Grade 1'),
(2, 'Grade 2'),
(3, 'Grade 3'),
(4, 'Grade 4'),
(5, 'Grade 5'),
(6, 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notif_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(120) NOT NULL,
  `message` text NOT NULL,
  `type` enum('reminder','overdue','confirmation','announcement') NOT NULL DEFAULT 'announcement',
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_student`
--

CREATE TABLE `parent_student` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_student`
--

INSERT INTO `parent_student` (`id`, `parent_id`, `student_id`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `requirement_id` int(10) UNSIGNED NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL DEFAULT 0.00,
  `payment_method` enum('cash','gcash','maya','bank_transfer') NOT NULL DEFAULT 'cash',
  `payment_date` date NOT NULL,
  `status` enum('paid','partial','unpaid','overdue') NOT NULL DEFAULT 'unpaid',
  `reference_no` varchar(60) DEFAULT NULL,
  `proof_image` varchar(255) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `recorded_by` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `student_id`, `requirement_id`, `amount_paid`, `payment_method`, `payment_date`, `status`, `reference_no`, `proof_image`, `remarks`, `recorded_by`, `created_at`) VALUES
(2, 1, 1, 1500.00, 'cash', '2026-03-09', 'paid', NULL, NULL, NULL, 5, '2026-03-09 10:49:13'),
(3, 2, 2, 2000.00, 'cash', '2026-03-09', 'paid', NULL, NULL, NULL, 4, '2026-03-09 12:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `payment_categories`
--

CREATE TABLE `payment_categories` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(80) NOT NULL,
  `description` text DEFAULT NULL,
  `managed_by` enum('staff','spta_officer') NOT NULL DEFAULT 'staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_categories`
--

INSERT INTO `payment_categories` (`category_id`, `category_name`, `description`, `managed_by`) VALUES
(1, 'SPTA Fee', 'Annual SPTA membership fee', 'spta_officer'),
(2, 'Miscellaneous', 'Other school fees', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `payment_requirements`
--

CREATE TABLE `payment_requirements` (
  `requirement_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `sy_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT 0.00,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_requirements`
--

INSERT INTO `payment_requirements` (`requirement_id`, `category_id`, `sy_id`, `amount`, `description`) VALUES
(1, 1, 3, 1500.00, 'For funds and ther utilities'),
(2, 2, 3, 2000.00, 'For funds and ther utilities');

-- --------------------------------------------------------

--
-- Table structure for table `pending_registrations`
--

CREATE TABLE `pending_registrations` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `role` enum('staff','spta_officer','parent') NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `otp_code` char(6) NOT NULL,
  `expires_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `receipt_id` int(10) UNSIGNED NOT NULL,
  `payment_id` int(10) UNSIGNED NOT NULL,
  `receipt_no` varchar(30) NOT NULL,
  `issued_to` varchar(120) NOT NULL,
  `issued_by` varchar(120) NOT NULL,
  `issued_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`receipt_id`, `payment_id`, `receipt_no`, `issued_to`, `issued_by`, `issued_at`) VALUES
(2, 2, 'SPTA-2026-00002', 'Kurt De Magiba', '5', '2026-03-09 10:49:13'),
(3, 3, 'SPTA-2026-00003', 'Jericho De Quiroz', '4', '2026-03-09 12:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `school_years`
--

CREATE TABLE `school_years` (
  `sy_id` int(10) UNSIGNED NOT NULL,
  `sy_label` varchar(20) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_years`
--

INSERT INTO `school_years` (`sy_id`, `sy_label`, `is_active`) VALUES
(1, '2023-2024', 0),
(2, '2024-2025', 0),
(3, '2025-2026', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `section_id` int(10) UNSIGNED NOT NULL,
  `section_name` varchar(60) NOT NULL,
  `grade_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `middle_name` varchar(60) DEFAULT NULL,
  `last_name` varchar(60) NOT NULL,
  `lrn` varchar(12) DEFAULT NULL,
  `gender` enum('male','female') NOT NULL,
  `grade_id` int(10) UNSIGNED NOT NULL,
  `section` varchar(100) DEFAULT NULL,
  `sy_id` int(10) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `middle_name`, `last_name`, `lrn`, `gender`, `grade_id`, `section`, `sy_id`, `is_active`, `created_at`) VALUES
(1, 'Kurt', NULL, 'De Magiba', NULL, 'male', 3, NULL, 3, 1, '2026-03-08 09:00:19'),
(2, 'Jericho', 'Mapa', 'De Quiroz', '920526472', 'male', 4, NULL, 3, 1, '2026-03-09 01:51:44'),
(3, 'Maria', 'yes', 'Yeah', '121925', 'female', 6, NULL, 3, 1, '2026-03-10 05:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(60) NOT NULL,
  `last_name` varchar(60) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','staff','spta_officer','parent') NOT NULL DEFAULT 'parent',
  `verification_token` varchar(64) DEFAULT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `reset_token` varchar(64) DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `role`, `verification_token`, `is_verified`, `is_active`, `reset_token`, `reset_expires`, `created_at`) VALUES
(2, 'System', 'Admin', 'admin@deped.gov.ph', '$2y$10$50zZj9NqAyILO2oWuHaMj..9/r2dnWsLD1QACG1wxxhvvtp9bGr4u', 'admin', NULL, 1, 1, NULL, NULL, '2026-03-08 08:28:06'),
(3, 'Marites', 'De magiba', 'ajinamotosasuke191@gmail.com', '$2y$10$7rndSUiFbx4lDRMPWZuJ0u6qrjXDUAX4AtcA8zBCNxq/DGUToO2KG', 'parent', NULL, 1, 1, NULL, NULL, '2026-03-08 09:33:40'),
(4, 'Test', 'Staff', 'staff@deped.gov.ph', '$2y$10$iHMoRGgq0vB9azxKGeUkL.yF9gsDViW1svVcCTerbpCFYO07GeUIu', 'staff', NULL, 1, 1, NULL, NULL, '2026-03-08 11:34:17'),
(5, 'Test', 'Officer', 'officer@deped.gov.ph', '$2y$10$s.gevgvhtD/HHLqJgWiqhe7gSmxi8cds58SA5LFOEFiy3JmWXS54e', 'spta_officer', NULL, 1, 1, NULL, NULL, '2026-03-08 11:34:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `grade_levels`
--
ALTER TABLE `grade_levels`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notif_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `parent_student`
--
ALTER TABLE `parent_student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link` (`parent_id`,`student_id`),
  ADD KEY `fk_ps_student` (`student_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `requirement_id` (`requirement_id`),
  ADD KEY `recorded_by` (`recorded_by`);

--
-- Indexes for table `payment_categories`
--
ALTER TABLE `payment_categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `payment_requirements`
--
ALTER TABLE `payment_requirements`
  ADD PRIMARY KEY (`requirement_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sy_id` (`sy_id`);

--
-- Indexes for table `pending_registrations`
--
ALTER TABLE `pending_registrations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`receipt_id`),
  ADD UNIQUE KEY `receipt_no` (`receipt_no`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `school_years`
--
ALTER TABLE `school_years`
  ADD PRIMARY KEY (`sy_id`),
  ADD UNIQUE KEY `sy_label` (`sy_label`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`section_id`),
  ADD KEY `grade_id` (`grade_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `grade_id` (`grade_id`),
  ADD KEY `sy_id` (`sy_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit_log`
--
ALTER TABLE `audit_log`
  MODIFY `log_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `grade_levels`
--
ALTER TABLE `grade_levels`
  MODIFY `grade_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notif_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_student`
--
ALTER TABLE `parent_student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment_categories`
--
ALTER TABLE `payment_categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_requirements`
--
ALTER TABLE `payment_requirements`
  MODIFY `requirement_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pending_registrations`
--
ALTER TABLE `pending_registrations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `receipt_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `school_years`
--
ALTER TABLE `school_years`
  MODIFY `sy_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `section_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `audit_log`
--
ALTER TABLE `audit_log`
  ADD CONSTRAINT `fk_audit_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE SET NULL;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `fk_notif_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `parent_student`
--
ALTER TABLE `parent_student`
  ADD CONSTRAINT `fk_ps_parent` FOREIGN KEY (`parent_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_ps_student` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_pay_req` FOREIGN KEY (`requirement_id`) REFERENCES `payment_requirements` (`requirement_id`),
  ADD CONSTRAINT `fk_pay_stu` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`),
  ADD CONSTRAINT `fk_pay_user` FOREIGN KEY (`recorded_by`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `payment_requirements`
--
ALTER TABLE `payment_requirements`
  ADD CONSTRAINT `fk_pr_cat` FOREIGN KEY (`category_id`) REFERENCES `payment_categories` (`category_id`),
  ADD CONSTRAINT `fk_pr_sy` FOREIGN KEY (`sy_id`) REFERENCES `school_years` (`sy_id`);

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `fk_rec_pay` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`payment_id`) ON DELETE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `fk_sec_grade` FOREIGN KEY (`grade_id`) REFERENCES `grade_levels` (`grade_id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_stu_grade` FOREIGN KEY (`grade_id`) REFERENCES `grade_levels` (`grade_id`),
  ADD CONSTRAINT `fk_stu_sy` FOREIGN KEY (`sy_id`) REFERENCES `school_years` (`sy_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
