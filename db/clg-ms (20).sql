-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2023 at 01:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clg-ms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignment_id` int(11) NOT NULL,
  `faculty_email` varchar(100) NOT NULL,
  `student_email` varchar(110) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `submition_date` date NOT NULL,
  `subject_name` varchar(110) NOT NULL,
  `student_status` varchar(100) NOT NULL,
  `assignment_upload` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `attendance_status` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `s_email` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `subject_id`, `department_id`, `semester`, `faculty_id`, `a_date`, `subject_name`, `attendance_status`, `student_id`, `s_email`) VALUES
(1, 1, 1, 'S1', 1, '2023-01-30', 'Introduction to Digital Electronics', 'Abscent', 1, 'athira@gmail.com'),
(2, 1, 1, 'S1', 1, '2023-01-30', 'Introduction to Digital Electronics', 'Present', 6, 'anjanavasu@gmail.com'),
(3, 1, 1, 'S1', 1, '2023-01-30', 'Introduction to Digital Electronics', 'Present', 7, 'alna@gmail.com'),
(4, 1, 1, 'S1', 1, '2023-01-30', 'Introduction to Digital Electronics', 'Present', 9, 'clinto@gmail.com'),
(5, 1, 1, 'S1', 1, '2023-01-02', 'Introduction to Digital Electronics', 'Abscent', 1, 'athira@gmail.com'),
(6, 1, 1, 'S1', 1, '2023-01-02', 'Introduction to Digital Electronics', 'Present', 6, 'anjanavasu@gmail.com'),
(7, 1, 1, 'S1', 1, '2023-01-02', 'Introduction to Digital Electronics', 'Present', 7, 'alna@gmail.com'),
(8, 1, 1, 'S1', 1, '2023-01-02', 'Introduction to Digital Electronics', 'Present', 9, 'clinto@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `dep_name` varchar(100) NOT NULL,
  `dep_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `dep_name`, `dep_image`) VALUES
(1, 'CSE', '1663821170.jpg'),
(5, 'ECE', '1672045386.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `faculty_dateofbirth` varchar(100) NOT NULL,
  `faculty_gender` varchar(100) NOT NULL,
  `faculty_address` varchar(100) NOT NULL,
  `faculty_phone` varchar(200) NOT NULL,
  `faculty_email` varchar(100) NOT NULL,
  `faculty_password` varchar(100) NOT NULL,
  `faculty_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `faculty_dateofbirth`, `faculty_gender`, `faculty_address`, `faculty_phone`, `faculty_email`, `faculty_password`, `faculty_image`) VALUES
(1, 'DIVYA M D', '05/08/1996', 'Female', 'ollur,thrissur', '9502584565', 'divya@gmail.com', 'lfdivya', '1667641334.jpg'),
(2, 'AJITHA C.K', '21/11/1987', 'Female', 'vellur house,ollur,  thrissur 680101', '8521593575', 'ajitha@gmail.com', 'LFajitha', '1667641921.jpg'),
(3, 'DINESAN M.V', '21/11/1983', 'Male', 'abc house,kannipayoor, wayanad 680901', '8521479631', 'dinesan@gmail.com', 'LFdinesan', '1667642074.jpg'),
(4, 'Serin C', '01/01/1990', 'Male', 'qwerty house,kanipayoor kunnamkulam thrissur 680503', '9513576548', 'serin@gmail.com', 'LFserin', '1670058438.jpg'),
(5, 'ANITHA', '05/08/1993', 'Female', 'GURUVAYOOR,THRISSUR', '9875236410', 'anitha@gmail.com', 'LFanitha', '1670058523.jpg'),
(6, 'DILJITH M.D', '05/08/1989', 'Male', 'zse house, changharamkulam,  malapuram dt  680201', '8521123456', 'diljith@gmail.com', 'LFdiljith', '1670058638.jpg'),
(7, 'SHAJI C', '05/08/1987', 'Male', 'nivigra house,ammadam,  thrissur 680101', '8521479631', 'shaji@gmail.com', 'LFshaji', '1670061804.jpg'),
(8, 'Swapna y', '05/08/1990', 'Female', 'zse house, changharamkulam,  malapuram dt  680201', '9513576548', 'swapna@gmail.com', 'LFswapna', '1670061874.jpg'),
(9, 'Shaju V.K', '05/08/1988', 'Male', 'njkdam house, ammadam,  thrissur 680101', '9513576548', 'shaju@gmail.com', 'LFshaju', '1671251348.jpg'),
(10, ' K P JEEJO', '05/08/1997', 'Male', 'abc house,kannipayoor, wayanad 680901', '2345678901', 'jeejo@gmail.com', '123', '1674456528.jpg'),
(11, 'ASWIN P VIJAYAN', '05/08/1997', 'Male', 'abc house,kannipayoor, wayanad 680901', '2345678901', 'aswin@gmail.com', '123', '1674456576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `holiday_id` int(11) NOT NULL,
  `reason` varchar(600) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`holiday_id`, `reason`, `from_date`, `to_date`) VALUES
(1, 'Maha Navami', '2022-10-05', '2022-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `internal_mark`
--

CREATE TABLE `internal_mark` (
  `internal_mark_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `faculty_email` varchar(200) NOT NULL,
  `subject_name` varchar(600) NOT NULL,
  `mark` varchar(600) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_email` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `internal_mark`
--

INSERT INTO `internal_mark` (`internal_mark_id`, `subject_id`, `department_id`, `semester`, `faculty_id`, `faculty_email`, `subject_name`, `mark`, `student_id`, `student_email`) VALUES
(1, 1, 1, 'S1', 1, 'divya@gmail.com', 'Introduction to Digital Electronics', '40', 1, 'athira@gmail.com'),
(2, 1, 1, 'S1', 1, 'divya@gmail.com', 'Introduction to Digital Electronics', '60', 6, 'anjanavasu@gmail.com'),
(3, 1, 1, 'S1', 1, 'divya@gmail.com', 'Introduction to Digital Electronics', '60', 7, 'alna@gmail.com'),
(4, 1, 1, 'S1', 1, 'divya@gmail.com', 'Introduction to Digital Electronics', '60', 9, 'clinto@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `recorded_class`
--

CREATE TABLE `recorded_class` (
  `recorded_class_id` int(11) NOT NULL,
  `faculty_email` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(500) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `module` varchar(100) NOT NULL,
  `topics` varchar(500) NOT NULL,
  `subject_name` varchar(500) NOT NULL,
  `recorded_class_upload` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semester_timetable`
--

CREATE TABLE `semester_timetable` (
  `sem_timetable_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `time_table_image` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `semester_timetable`
--

INSERT INTO `semester_timetable` (`sem_timetable_id`, `department_id`, `semester`, `time_table_image`) VALUES
(1, 1, 'S1', '1674127321.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `seminar_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_email` varchar(110) NOT NULL,
  `faculty_email` varchar(110) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `seminar_student_status` varchar(600) NOT NULL,
  `subject_name` varchar(600) NOT NULL,
  `submission_date` date NOT NULL,
  `seminar_topic` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `s_name` varchar(800) NOT NULL,
  `s_email` varchar(800) NOT NULL,
  `s_dob` varchar(800) NOT NULL,
  `s_phone` varchar(800) NOT NULL,
  `s_semester` varchar(800) NOT NULL,
  `s_address` varchar(800) NOT NULL,
  `register_no` varchar(800) NOT NULL,
  `department_id` int(11) NOT NULL,
  `s_image` varchar(800) NOT NULL,
  `parent_name` varchar(500) NOT NULL,
  `parent_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `s_name`, `s_email`, `s_dob`, `s_phone`, `s_semester`, `s_address`, `register_no`, `department_id`, `s_image`, `parent_name`, `parent_password`) VALUES
(1, 'ATHIRA M.S', 'athira@gmail.com', '05/08/1999', '9876543219', 'S1', 'qwerty House', 'LF19CS0001', 1, '1667673868.jpg', 'soumya', 'soumya'),
(5, 'Anju Antony', 'anju@gmail.com', '05/08/1997', '9513572584', 'S2', 'asd House, ollur,thrissur', 'LF20CS0002', 1, '1672050179.jpg', 'anjitha', 'anjitha'),
(6, 'Anjana Vasu', 'anjanavasu@gmail.com', '05/08/2000', '9513572584', 'S1', 'Chalakudy, thrissur 680101', 'LF19CS0002', 1, '1674468833.jpg', 'sangeeth', 'sangeeth'),
(7, 'Alna Shaju', 'alna@gmail.com', '05/08/2001', '9513572584', 'S1', 'Chalakudy, thrissur 680101', 'LF19CS0003', 1, '1674468891.jpg', 'sana', 'sana'),
(8, 'Chesma C', 'chesma@gmail.com', '05/08/2000', '9513572584', 'S2', 'Chalakudy, thrissur 680101', 'LF20CS0001', 1, '1674885634.jpg', 'binya', 'binya'),
(9, 'Clinto C', 'clinto@gmail.com', '05/08/1997', '9513572584', 'S1', 'manivigraham House, ollur,thrissur', 'LF19EC00001', 5, '1674887038.jpg', 'Blazy', 'blazy');

-- --------------------------------------------------------

--
-- Table structure for table `student_assignment_upload`
--

CREATE TABLE `student_assignment_upload` (
  `student_assignment_upload_id` int(11) NOT NULL,
  `student_email` varchar(110) NOT NULL,
  `faculty_email` varchar(110) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `submition_date` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `assignment_upload` varchar(600) NOT NULL,
  `assignment_mark` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_seminar`
--

CREATE TABLE `student_seminar` (
  `student_seminar_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `faculty_email` varchar(150) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `seminar_topic` varchar(11) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(600) NOT NULL,
  `submission_date` varchar(100) NOT NULL,
  `seminar_uploding` varchar(100) NOT NULL,
  `seminar_mark` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `department_id`, `semester`, `faculty_id`, `subject_image`) VALUES
(1, 'Introduction to Digital Electronics', 1, 'S1', 1, '1670059008.jpg'),
(2, 'Basics of Computer Science', 1, 'S1', 2, '1670059155.png'),
(3, 'Computer Organization Principles', 1, 'S2', 3, '1670059276.jpg'),
(4, 'Foundation course in Mathematics', 1, 'S2', 4, '1670059410.jpg'),
(5, 'Environmental Sciences', 1, 'S3', 5, '1670059503.png'),
(6, 'Introduction to Windows, its Features, Application', 1, 'S3', 6, '1670059569.jpg'),
(7, 'Database Management Systems', 1, 'S4', 7, '1670062228.jpg'),
(8, 'Discrete Mathematics', 1, 'S4', 8, '1670062326.png'),
(9, 'Introduction to Programming Concepts', 1, 'S2', 9, '1670062424.jpg'),
(13, 'Basic Electronics Engineering', 5, 'S1', 10, '1674456661.jpg'),
(14, 'Basic Electrical Engineering', 5, 'S2', 11, '1674456771.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `syllabus_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `module1` varchar(500) NOT NULL,
  `module2` varchar(500) NOT NULL,
  `module3` varchar(500) NOT NULL,
  `module4` varchar(500) NOT NULL,
  `module5` varchar(500) NOT NULL,
  `module1_update` varchar(600) NOT NULL,
  `module2_update` varchar(900) NOT NULL,
  `module3_update` varchar(900) NOT NULL,
  `module4_update` varchar(900) NOT NULL,
  `module5_update` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `syllabus`
--

INSERT INTO `syllabus` (`syllabus_id`, `subject_id`, `module1`, `module2`, `module3`, `module4`, `module5`, `module1_update`, `module2_update`, `module3_update`, `module4_update`, `module5_update`) VALUES
(4, 1, 'Number system and codes:Binary, octal, hexadecimal and decimal Number', 'Number system and codes:Binary, octal, hexadecimal and decimal Number', 'Number system and codes:Binary, octal, hexadecimal and decimal Number', 'Number system and codes:Binary, octal, hexadecimal and decimal Number', 'Number system and codes:Binary, octal, hexadecimal and decimal Number', 'Topics Covered', 'Topics Covered', 'Topics Covered', 'Topics Covered', 'Topics Covered');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `time_table_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `Exam_time` varchar(100) NOT NULL,
  `Exam_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`time_table_id`, `department_id`, `semester`, `subject_id`, `Exam_time`, `Exam_date`) VALUES
(1, 1, 'S1', 1, '9.00am - 12.30pm', '2023-02-10'),
(2, 1, 'S1', 2, '9.00am - 12.30pm', '2023-02-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indexes for table `internal_mark`
--
ALTER TABLE `internal_mark`
  ADD PRIMARY KEY (`internal_mark_id`);

--
-- Indexes for table `recorded_class`
--
ALTER TABLE `recorded_class`
  ADD PRIMARY KEY (`recorded_class_id`);

--
-- Indexes for table `semester_timetable`
--
ALTER TABLE `semester_timetable`
  ADD PRIMARY KEY (`sem_timetable_id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`seminar_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_assignment_upload`
--
ALTER TABLE `student_assignment_upload`
  ADD PRIMARY KEY (`student_assignment_upload_id`);

--
-- Indexes for table `student_seminar`
--
ALTER TABLE `student_seminar`
  ADD PRIMARY KEY (`student_seminar_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`syllabus_id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`time_table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `internal_mark`
--
ALTER TABLE `internal_mark`
  MODIFY `internal_mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recorded_class`
--
ALTER TABLE `recorded_class`
  MODIFY `recorded_class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `semester_timetable`
--
ALTER TABLE `semester_timetable`
  MODIFY `sem_timetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `seminar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_assignment_upload`
--
ALTER TABLE `student_assignment_upload`
  MODIFY `student_assignment_upload_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_seminar`
--
ALTER TABLE `student_seminar`
  MODIFY `student_seminar_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `syllabus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `time_table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
