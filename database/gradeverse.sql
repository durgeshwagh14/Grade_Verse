-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2025 at 10:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gradeverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `updationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'kkwadmin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2022-09-04 10:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `tblclasses`
--

CREATE TABLE `tblclasses` (
  `id` int(11) NOT NULL,
  `ClassName` varchar(80) DEFAULT NULL,
  `ClassNameNumeric` int(4) DEFAULT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclasses`
--

INSERT INTO `tblclasses` (`id`, `ClassName`, `ClassNameNumeric`, `Section`, `CreationDate`, `UpdationDate`) VALUES
(64, 'FY-Bsc(Computer Science)', 1, 'A', '2025-03-19 09:46:26', NULL),
(65, 'FY-Bsc(Computer Science)  SEM-II', 2, 'A', '2025-03-19 09:46:37', NULL),
(66, 'SY-Bsc(Computer Science)', 3, 'A', '2025-03-19 09:46:47', NULL),
(67, 'SY-Bsc(Computer Science) SEM-II', 4, 'A', '2025-03-19 09:46:54', NULL),
(68, 'TY-Bsc(Computer Science)', 5, 'A', '2025-03-19 09:47:03', NULL),
(69, 'TY-Bsc(Computer Science) SEM-II', 6, 'A', '2025-03-19 09:47:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotice`
--

CREATE TABLE `tblnotice` (
  `id` int(11) NOT NULL,
  `noticeTitle` varchar(255) DEFAULT NULL,
  `noticeDetails` mediumtext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnotice`
--

INSERT INTO `tblnotice` (`id`, `noticeTitle`, `noticeDetails`, `postingDate`) VALUES
(4, 'Invitation to Farewell Party for TYBCS Students', 'Dear Students and Faculty,\r\n\r\nWe are excited to invite you to a memorable Farewell Party in honor of our TYBCS students as they embark on a new journey beyond college life. Join us as we celebrate the achievements, friendships, and unforgettable moments shared during their time at our institution.\r\n\r\nDate: 18th March 2025\r\nTime: 5:00 PM onwards\r\nVenue: College Auditorium\r\n\r\nLet’s come together to bid farewell and create lasting memories. There will be food, music, and fun activities to make this event special. Your presence will mean a lot to our graduating students!', '2025-03-19 15:55:48'),
(5, 'TYBCS Last Semister Exams Begin on April 9, 2025! ', 'The TYBCS exams at Savitribai Phule Pune University are scheduled to start on April 9, 2025. Make sure to prepare well and check for any updates or specific details regarding the exam schedule as the date approaches. Good luck! ### Reminder: TYBCS Exams Starting Soon\r\n\r\nAttention TYBCS Students,\r\n\r\nThis is a friendly reminder that your exams at Savitribai Phule Pune University will commence on April 9, 2025. Please ensure that you are well-prepared and have all necessary materials ready for the exam day.\r\n\r\nStay updated with any announcements from the college regarding the exam schedule and guidelines. Wishing you all the best in your preparations!', '2025-03-19 15:58:35'),
(6, 'TYBCS Practical Exams Start on March 25, 2025', 'Dear TYBCS Students,\r\n\r\nThis is to inform you that the Practical Exams for the TYBCS program will commence on March 25, 2025. Please ensure that you are prepared and have all necessary materials and equipment ready for your practical assessments.\r\n\r\nMake sure to check the schedule for your specific exam timings and locations. We wish you the best of luck in your practical exams!\r\n\r\nBest regards,\r\nK.K.Wagh Arts Commarce & Computer Science Collage K.Nagar,Ranwad\r\n[Department Of Computer Science]', '2025-03-19 16:00:46'),
(7, ' FYBCS Internal Results Declared!', 'Dear FYBCS Students,\r\n\r\nWe are pleased to announce that the internal results for the FYBCS program have been declared. You can check your results by visiting the college website or the designated notice board.\r\n\r\nPlease take a moment to review your performance and reach out to your respective faculty members if you have any questions or concerns regarding your results.\r\n\r\nCongratulations to all for your hard work and dedication!\r\n\r\nBest regards,\r\nDepartment Of Computer Science', '2025-03-19 16:03:46'),
(8, 'SYBCS Semester II Result Declaration', 'Dear SYBCS Students,\r\n\r\nWe are excited to inform you that the results for the SYBCS Semester II examinations have been declared. Please check the college website or the notice board for your results and further details.\r\n\r\nBest of luck! ### Important Update: SYBCS Semester II Results Available\r\n\r\nDear Students,\r\n\r\nThe results for the SYBCS Semester II examinations are now officially available. You can access your results through the college\'s official website or by visiting the notice board.\r\n\r\nIf you have any inquiries or require clarification regarding your results, please do not hesitate to contact your faculty members.\r\n\r\nWishing you all the best in your academic journey!\r\n\r\nSincerely,\r\nDepartment Of Computer Science', '2025-03-19 16:05:01'),
(9, 'K.K Wagh Collage K.Nager Annual Function', 'K.K Wagh Collage K.Nager Annual Function declare', '2025-03-20 05:53:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `id` int(11) NOT NULL,
  `StudentId` int(11) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`id`, `StudentId`, `ClassId`, `SubjectId`, `marks`, `PostingDate`, `UpdationDate`) VALUES
(1, 1, 1, 2, 89, '2022-09-04 08:41:18', NULL),
(2, 1, 1, 3, 87, '2022-09-04 08:41:18', NULL),
(3, 1, 1, 5, 66, '2022-09-04 08:41:18', NULL),
(4, 1, 1, 1, 78, '2022-09-04 08:41:18', NULL),
(5, 1, 1, 4, 90, '2022-09-04 08:41:18', NULL),
(6, 3, 1, 2, 80, '2022-09-04 09:56:54', NULL),
(7, 3, 1, 3, 66, '2022-09-04 09:56:54', NULL),
(8, 3, 1, 5, 87, '2022-09-04 09:56:54', NULL),
(9, 3, 1, 1, 76, '2022-09-04 09:56:54', NULL),
(10, 3, 1, 4, 55, '2022-09-04 09:56:54', NULL),
(11, 4, 69, 18, 15, '2025-03-19 10:12:35', NULL),
(12, 4, 69, 16, 20, '2025-03-19 10:12:36', NULL),
(13, 4, 69, 17, 19, '2025-03-19 10:12:36', NULL),
(14, 4, 69, 13, 18, '2025-03-19 10:12:36', NULL),
(15, 4, 69, 14, 19, '2025-03-19 10:12:36', NULL),
(16, 4, 69, 19, 20, '2025-03-19 10:12:36', NULL),
(17, 4, 69, 15, 16, '2025-03-19 10:12:36', NULL),
(18, 13, 69, 18, 19, '2025-03-19 10:58:20', NULL),
(19, 13, 69, 16, 18, '2025-03-19 10:58:21', NULL),
(20, 13, 69, 17, 20, '2025-03-19 10:58:21', NULL),
(21, 13, 69, 13, 19, '2025-03-19 10:58:21', NULL),
(22, 13, 69, 14, 20, '2025-03-19 10:58:21', NULL),
(23, 13, 69, 19, 20, '2025-03-19 10:58:21', NULL),
(24, 13, 69, 15, 18, '2025-03-19 10:58:21', NULL),
(25, 5, 69, 18, 19, '2025-03-20 05:52:12', NULL),
(26, 5, 69, 16, 20, '2025-03-20 05:52:13', NULL),
(27, 5, 69, 17, 18, '2025-03-20 05:52:13', NULL),
(28, 5, 69, 13, 15, '2025-03-20 05:52:13', NULL),
(29, 5, 69, 14, 20, '2025-03-20 05:52:13', NULL),
(30, 5, 69, 19, 18, '2025-03-20 05:52:13', NULL),
(31, 5, 69, 15, 20, '2025-03-20 05:52:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `StudentId` int(11) NOT NULL,
  `StudentName` varchar(100) DEFAULT NULL,
  `RollId` varchar(100) DEFAULT NULL,
  `StudentEmail` varchar(100) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `DOB` varchar(100) DEFAULT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL,
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`StudentId`, `StudentName`, `RollId`, `StudentEmail`, `Gender`, `DOB`, `ClassId`, `RegDate`, `UpdationDate`, `Status`) VALUES
(1, 'Abantika Suresh Ahire', '1', 'abantikaahire@gmail.com', 'Female', '1991-09-06', 1, '2022-09-04 08:38:05', NULL, 1),
(2, 'Satish nana Kale', '2', 'satishkale@gmail.com', 'Male', '1992-08-31', 1, '2022-09-04 08:38:32', NULL, 1),
(3, 'Sushant Gopal Varma', '3', 'sushant@gmail.com', 'Male', '1998-09-02', 1, '2022-09-04 09:56:15', NULL, 1),
(4, 'Sagar Babaji Pagar', '40', 'Sagar@gmail.com', 'Male', '2004-05-22', 69, '2025-03-19 09:56:16', NULL, 1),
(5, 'Durgesh Santosh Wagh', '73', 'durgeshwagh@gmail.com', 'Male', '2004-05-14', 69, '2025-03-19 10:00:14', NULL, 1),
(6, 'Adesh Anandrao Wagh', '72', 'adesh@gmail.com', 'Male', '2004-03-20', 69, '2025-03-19 10:01:07', NULL, 1),
(7, 'Sakshi Kiran Wagh', '74', 'sakshi@gmail.com', 'Female', '', 69, '2025-03-19 10:01:42', NULL, 1),
(8, 'Roshan Sampat Ushir', '70', 'roshan@gmail.com', 'Male', '', 69, '2025-03-19 10:02:33', NULL, 1),
(9, 'Gaurav Sanjay Wadhavane', '71', 'gaurav@gmail.com', 'Male', '', 69, '2025-03-19 10:03:34', NULL, 1),
(10, 'Aditya Ashok Pagar', '38', 'aditya@gmail.com', 'Male', '', 69, '2025-03-19 10:04:58', NULL, 1),
(11, 'Rushiprasad bhausaheb Pagar', '39', 'rushi@gmail.com', 'Male', '', 69, '2025-03-19 10:05:48', NULL, 1),
(12, 'Tejas Sanjya Pagar', '41', 'tejas@gmail.com', 'Male', '', 69, '2025-03-19 10:06:22', NULL, 1),
(13, 'Tejas Ramdas Gholap', '16', 'tejas@gmial.com', 'Male', '', 69, '2025-03-19 10:56:33', NULL, 1),
(14, 'Vinaya Kilas Ghanghav', '15', 'vinaya@gmail.com', 'Male', '', 69, '2025-03-19 10:57:42', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjectcombination`
--

CREATE TABLE `tblsubjectcombination` (
  `id` int(11) NOT NULL,
  `ClassId` int(11) DEFAULT NULL,
  `SubjectId` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `Updationdate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsubjectcombination`
--

INSERT INTO `tblsubjectcombination` (`id`, `ClassId`, `SubjectId`, `status`, `CreationDate`, `Updationdate`) VALUES
(1, 1, 1, 1, '2022-09-04 08:37:16', NULL),
(2, 1, 2, 1, '2022-09-04 08:40:16', NULL),
(3, 1, 3, 1, '2022-09-04 08:40:25', NULL),
(4, 1, 4, 1, '2022-09-04 08:40:32', NULL),
(5, 1, 5, 1, '2022-09-04 08:40:40', NULL),
(6, 63, 6, 1, '2022-09-04 09:55:40', NULL),
(7, 64, 7, 1, '2025-03-19 09:52:45', NULL),
(8, 64, 8, 1, '2025-03-19 09:52:53', NULL),
(9, 64, 9, 1, '2025-03-19 09:52:58', NULL),
(10, 64, 10, 1, '2025-03-19 09:53:04', NULL),
(11, 64, 11, 1, '2025-03-19 09:53:10', NULL),
(12, 64, 12, 1, '2025-03-19 09:53:16', NULL),
(13, 69, 13, 1, '2025-03-19 10:09:35', NULL),
(14, 69, 14, 1, '2025-03-19 10:09:43', NULL),
(15, 69, 15, 1, '2025-03-19 10:09:49', NULL),
(16, 69, 16, 1, '2025-03-19 10:09:57', NULL),
(17, 69, 17, 1, '2025-03-19 10:10:03', NULL),
(18, 69, 18, 1, '2025-03-19 10:10:16', NULL),
(19, 69, 19, 1, '2025-03-19 10:10:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `id` int(11) NOT NULL,
  `SubjectName` varchar(100) NOT NULL,
  `SubjectCode` varchar(100) DEFAULT NULL,
  `Creationdate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`id`, `SubjectName`, `SubjectCode`, `Creationdate`, `UpdationDate`) VALUES
(7, 'Problem Solving using Computer and ‘C’ Programming ', 'CS-111', '2025-03-19 09:49:44', NULL),
(8, 'Database Managment System', 'CS-112', '2025-03-19 09:50:00', NULL),
(9, 'Matrix Algebra', 'MTC-111', '2025-03-19 09:50:57', NULL),
(10, 'Discrete Mathematics', 'MTC-113', '2025-03-19 09:51:06', NULL),
(11, 'Semiconductor Device and Basic Electronic System', 'ELC-111', '2025-03-19 09:51:17', NULL),
(12, 'Principles of Digital Electronics', 'ELC-112', '2025-03-19 09:51:23', NULL),
(13, 'Operating Systems - II', 'CS-361 ', '2025-03-19 10:07:21', NULL),
(14, 'Software Testing', 'CS-362 ', '2025-03-19 10:07:34', NULL),
(15, 'Web Technologies – II', 'CS-363', '2025-03-19 10:07:56', NULL),
(16, 'Data Analytics', 'CS-364', '2025-03-19 10:08:16', NULL),
(17, 'Object Oriented Programming using Java - II', 'CS-365', '2025-03-19 10:08:35', NULL),
(18, 'Compiler Construction', 'CS-366 ', '2025-03-19 10:08:56', NULL),
(19, 'Software Testing Tools', 'CS-3610', '2025-03-19 10:09:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclasses`
--
ALTER TABLE `tblclasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblnotice`
--
ALTER TABLE `tblnotice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclasses`
--
ALTER TABLE `tblclasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tblnotice`
--
ALTER TABLE `tblnotice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblsubjectcombination`
--
ALTER TABLE `tblsubjectcombination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
