-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2026 at 07:04 AM
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
-- Database: `spta`
--
CREATE DATABASE IF NOT EXISTS `spta` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `spta`;

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `grade_level` enum('I','II','III','IV','V','VI') NOT NULL,
  `grade_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `grade_last_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_of_payments`
--

CREATE TABLE `list_of_payments` (
  `lp_id` int(11) NOT NULL,
  `lp_sys_id` int(11) NOT NULL,
  `lp_name` varchar(100) NOT NULL,
  `lp_amount` decimal(6,2) NOT NULL,
  `lp_due_date` date NOT NULL,
  `lp_status` varchar(20) NOT NULL COMMENT 'for collaboration',
  `lp_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `lp_last_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `parent_teach_id` int(11) NOT NULL,
  `parent_stud_id` int(11) NOT NULL,
  `parent_fname` varchar(50) NOT NULL,
  `parent_mname` varchar(50) NOT NULL,
  `parent_lname` varchar(50) NOT NULL,
  `parent_extn` varchar(5) NOT NULL,
  `parent_contact_no` bigint(20) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `parent_address` varchar(500) NOT NULL,
  `parent_relationship` enum('Mother','Father','Guardian') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_P` enum('SPTA Officer','Parent') NOT NULL DEFAULT 'Parent',
  `parent_status` varchar(20) NOT NULL COMMENT 'for collaboration',
  `parent_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `parent_last_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_parent_id` int(11) NOT NULL COMMENT 'Who''s officer added the data',
  `payment_stud_id` int(11) NOT NULL,
  `payment_lp_id` int(11) NOT NULL,
  `payment_amount` decimal(6,2) NOT NULL,
  `payment_date` date NOT NULL,
  `payment_status` varchar(20) NOT NULL COMMENT 'for collaboration',
  `payment_remarks` varchar(255) DEFAULT NULL,
  `payment_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_last_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `sy_id` int(11) NOT NULL,
  `sy_name` varchar(20) NOT NULL,
  `sy_start_date` date NOT NULL,
  `sy_end_date` date NOT NULL,
  `sy_status` enum('Active','Inactive') DEFAULT 'Active',
  `sy_date_created` datetime DEFAULT current_timestamp(),
  `sy_last_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sec_id` int(11) NOT NULL,
  `sec_name` varchar(50) NOT NULL,
  `sec_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `sec_last_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `stud_teach_id` int(11) NOT NULL,
  `stud_sys_id` int(11) NOT NULL,
  `stud_fname` varchar(50) NOT NULL,
  `stud_mname` varchar(50) NOT NULL,
  `stud_lname` varchar(50) NOT NULL,
  `stud_extn` varchar(5) NOT NULL,
  `stud_sex` enum('Male','Female') NOT NULL,
  `stud_address` varchar(500) NOT NULL,
  `stud_contact_no` bigint(20) NOT NULL,
  `stud_status` varchar(20) NOT NULL COMMENT 'for collaboration',
  `stud_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `stud_last_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sy_section`
--

CREATE TABLE `sy_section` (
  `sys_id` int(11) NOT NULL,
  `sys_sy_id` int(11) DEFAULT NULL,
  `sys_grade_id` int(11) DEFAULT NULL,
  `sys_sec_id` int(11) DEFAULT NULL,
  `sys_date_created` datetime DEFAULT NULL,
  `sys_last_updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teach_id` int(11) NOT NULL,
  `teach_fname` varchar(50) NOT NULL,
  `teach_mname` varchar(50) NOT NULL,
  `teach_lname` varchar(50) NOT NULL,
  `teach_extn` varchar(5) NOT NULL,
  `teach_email` varchar(50) NOT NULL,
  `teach_contact_no` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_T` enum('Admin','Staff') NOT NULL DEFAULT 'Staff',
  `teach_status` varchar(20) DEFAULT NULL COMMENT 'for collaboration',
  `teach_date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `teach_last_updated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teach_id`, `teach_fname`, `teach_mname`, `teach_lname`, `teach_extn`, `teach_email`, `teach_contact_no`, `username`, `password`, `role_T`, `teach_status`, `teach_date_created`, `teach_last_updated`) VALUES
(1, 'juan', 'm', 'dada', 'sr', 'agfd@adnsjkh', 215454465, '', '$2y$10$6RyD2mrNzrdxs5OaFuZP7uh9opmoSfPO4TqFB71p8k.', 'Admin', NULL, '2026-02-26 11:46:09', '2026-02-26 11:46:09'),
(2, 'juan', 'm', 'dada', 'sr', 'haf@fdgfgf', 215454465, '', '$2y$10$a06U6LmqLNoJQYoxBEQYtuTpBlK1MJ55QhyJbEKFZIR', 'Admin', NULL, '2026-02-26 11:47:29', '2026-02-26 11:47:29'),
(3, 'hanna', 'm', 'more', '', 'hanna@gmail.com', 916458924, '', '$2y$10$vWf/m8kIsUf0VcTDKDWtfOJUIAIc7ceUhu.2RjRp5UM', 'Staff', NULL, '2026-02-26 15:23:07', '2026-02-26 15:23:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `list_of_payments`
--
ALTER TABLE `list_of_payments`
  ADD PRIMARY KEY (`lp_id`),
  ADD KEY `school_year_id` (`lp_sys_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `student_id` (`parent_stud_id`),
  ADD KEY `parent_teach_id` (`parent_teach_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `list_payment_id` (`payment_lp_id`),
  ADD KEY `payment_stud_id` (`payment_stud_id`),
  ADD KEY `payment_parent_id` (`payment_parent_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`sy_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `teacher_id` (`stud_teach_id`),
  ADD KEY `sy_section_id` (`stud_sys_id`);

--
-- Indexes for table `sy_section`
--
ALTER TABLE `sy_section`
  ADD PRIMARY KEY (`sys_id`),
  ADD KEY `school_year_id` (`sys_sy_id`),
  ADD KEY `section_id` (`sys_sec_id`),
  ADD KEY `grade_id` (`sys_grade_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teach_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `list_of_payments`
--
ALTER TABLE `list_of_payments`
  MODIFY `lp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `sy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sy_section`
--
ALTER TABLE `sy_section`
  MODIFY `sys_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `list_of_payments`
--
ALTER TABLE `list_of_payments`
  ADD CONSTRAINT `list_of_payments_ibfk_1` FOREIGN KEY (`lp_sys_id`) REFERENCES `school_year` (`sy_id`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`parent_stud_id`) REFERENCES `student` (`stud_id`),
  ADD CONSTRAINT `parent_ibfk_2` FOREIGN KEY (`parent_teach_id`) REFERENCES `teacher` (`teach_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`payment_lp_id`) REFERENCES `list_of_payments` (`lp_id`),
  ADD CONSTRAINT `payment_ibfk_5` FOREIGN KEY (`payment_stud_id`) REFERENCES `student` (`stud_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_6` FOREIGN KEY (`payment_parent_id`) REFERENCES `parent` (`parent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`stud_teach_id`) REFERENCES `teacher` (`teach_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`stud_sys_id`) REFERENCES `sy_section` (`sys_id`);

--
-- Constraints for table `sy_section`
--
ALTER TABLE `sy_section`
  ADD CONSTRAINT `sy_section_ibfk_1` FOREIGN KEY (`sys_sy_id`) REFERENCES `school_year` (`sy_id`),
  ADD CONSTRAINT `sy_section_ibfk_2` FOREIGN KEY (`sys_sec_id`) REFERENCES `section` (`sec_id`),
  ADD CONSTRAINT `sy_section_ibfk_3` FOREIGN KEY (`sys_grade_id`) REFERENCES `grade` (`grade_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
