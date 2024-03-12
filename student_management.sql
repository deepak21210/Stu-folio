-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2024 at 03:21 PM
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
-- Database: `student_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `rollno` int(11) NOT NULL,
  `sem1_per` int(11) NOT NULL,
  `sem1_attend` int(11) NOT NULL,
  `sem2_per` int(11) NOT NULL,
  `sem2_attend` int(11) NOT NULL,
  `sem3_per` int(11) NOT NULL,
  `sem3_attend` int(11) NOT NULL,
  `sem4_per` int(11) NOT NULL,
  `sem4_attend` int(11) NOT NULL,
  `sem5_per` int(11) NOT NULL,
  `sem5_attend` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`rollno`, `sem1_per`, `sem1_attend`, `sem2_per`, `sem2_attend`, `sem3_per`, `sem3_attend`, `sem4_per`, `sem4_attend`, `sem5_per`, `sem5_attend`, `image`) VALUES
(21201, 68, 90, 76, 98, 78, 89, 76, 87, 0, 0, 'http://slcs.in/uploads/images/student/21201.JPG'),
(21202, 58, 80, 76, 98, 78, 79, 76, 87, 0, 0, 'http://slcs.in/uploads/images/student/21202.JPG'),
(21204, 68, 90, 76, 98, 78, 89, 76, 87, 0, 0, 'http://slcs.in/uploads/images/student/21204.JPG'),
(21205, 68, 90, 76, 98, 78, 89, 76, 87, 0, 0, 'http://slcs.in/uploads/images/student/21205.JPG'),
(21206, 68, 90, 76, 98, 78, 89, 76, 87, 0, 0, 'http://slcs.in/uploads/images/student/21206.JPG'),
(21207, 68, 90, 86, 58, 78, 69, 86, 87, 0, 0, 'http://slcs.in/uploads/images/student/21207.JPG'),
(21208, 68, 90, 76, 98, 78, 89, 76, 87, 0, 0, 'http://slcs.in/uploads/images/student/21208.JPG'),
(21209, 68, 90, 76, 98, 78, 89, 76, 87, 0, 0, 'http://slcs.in/uploads/images/student/21209.JPG'),
(21210, 88, 90, 86, 98, 88, 89, 86, 87, 0, 0, 'http://slcs.in/uploads/images/student/21210.JPG'),
(21211, 89, 76, 67, 90, 87, 78, 98, 76, 0, 0, 'http://slcs.in/uploads/images/student/21211.JPG'),
(21213, 89, 76, 67, 90, 87, 78, 98, 76, 0, 0, 'http://slcs.in/uploads/images/student/21213.JPG'),
(21234, 89, 86, 93, 45, 60, 78, 98, 87, 0, 0, 'http://slcs.in/uploads/images/student/21234.JPG\r\n'),
(21226, 87, 9, 56, 87, 98, 56, 78, 76, 45, 78, '[BLOB - 64.0 KiB]');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `detail` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Image`, `title`, `link`, `detail`, `date`) VALUES
(81, '289.Alumns-INTERCTION-2.2.2021.jpg', 'Alumni Interaction', '', 'The Department of Marine Catering and Hotel Management organized an Alumni Interaction for the second year students (25 students) on 2.2.2024. Santhosh S is an alumnus of the department is presently working as Second Cook, OSM Marine time Ship Management, Chennai. They created awareness among the students on “General Steward Duties and Responsibilities of Merchant Ship”. They interacted with the juniors about the duties and responsibilities of a General Steward and the Documents required for joi', '2024-03-07'),
(82, 'yuva-club.jpg', 'Traditional Pongal festival', 'https://youtu.be/FQ9r21JRHBc?si=fW7YDk2cPW6x5JlE', 'The Southern Regional Office, Ministry of Tourism, Government of India (YUVA Tourism Club) conducted a traditional Pongal festival on 12.1.24 at Keelakuyilkudi, Madurai. In this celebration, 69 students from the MC&HM department actively participated. The students explored the demonstrations of traditional household utensils such as a stone grinder, mortar, pestle, winnowing fan, sieve, and rope cot. It was also featured with traditional games such as Thaiyam, Goli, Kittupul, and Pallanguzhi, as', '2024-03-07'),
(83, 'salesday.jpg', 'Mega Sales (Demo) Day', '', 'The Department of Animation in association with IIC organized the Event entitled “Innovative Ideas for Entrepreneurship through Mega Sales (Demo) Day – SLCS Santhai 2022” on 26.11.2022 at the College Premises. Dr.R.Sujatha, Principal –SLCS and Dr.M. Subramanian, Head-MBA were the Chief Guests for the event. The main objectives of the event are to impart the passion towards entrepreneurship among the young generation through innovation practices, as well as to identify and expose the students’ pr', '2024-03-07'),
(84, 'wFmfIfgCM20-HD.jpg', '30th Annual Day ', 'https://www.youtube.com/live/wFmfIfgCM20?si=hNgWJzC824gkXFKG', 'fbece feuhfe vewpuvhe wvhd dndh sonodsh 8qewfhcc hsaoc nwd wqufcj hdv', '2024-03-07'),
(85, '4.JPG', 'Deepak', '', 'kklk', '2024-03-07'),
(86, '', '', '', '', '2024-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `name` text NOT NULL,
  `rollno` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `phone` text NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`name`, `rollno`, `email`, `password`, `status`, `phone`, `image`) VALUES
('Anand', 21207, '21207@slcs.edu.in', 'd1c00b6ab194873063f089e9c2d5f5d7', 0, '---', 'http://slcs.in/uploads/images/student/21207.JPG'),
('Arul', 21208, '21208@slcs.edu.in', 'a460ce8fc899b463827b3a8003b27f88', 0, '---', 'http://slcs.in/uploads/images/student/21208.JPG'),
('Deepak', 21210, '21210@slcs.du.in', '6f9c0dd61bf65be952df95d5d9ee41c6', 0, '---', 'http://slcs.in/uploads/images/student/21210.JPG'),
('Dinesh Kumar', 21211, '21211@slcs.edu.in', 'd50d47a615487ce3fbc5903f28ccf36e', 1, '---', 'http://slcs.in/uploads/images/student/21211.JPG'),
('Ganesha Sumbramaniyam', 21213, '21213@slcs.edu.in', '28b7c9df2b32916f4b26d86b6f2065c7', 0, '---', 'http://slcs.in/uploads/images/student/21213.JPG'),
('Gokula Kannan', 21214, '21214@slcs.edu.in', '701cc97f63f87083e90df52137beb5cb', 0, '---', 'http://slcs.in/uploads/images/student/21214.JPG'),
('Hari Haran', 21217, '21217@slcs.edu.in', '0769e56eb5d72039f01530d705e971da', 0, '---', 'http://slcs.in/uploads/images/student/21217.JPG'),
('Nivash Krishna', 21226, '21226@gmail.com', '23b9481bb9dcf41b126b8429f35d958d', 0, '---', 'http://slcs.in/uploads/images/student/21226.JPG'),
('Vinoth kanna', 21234, '21234@slcs.edu.in', '2d38ca3f25f328745f58b8f1cbc909ed', 1, '---', 'http://slcs.in/uploads/images/student/21234.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `staff_signin`
--

CREATE TABLE `staff_signin` (
  `name` varchar(100) NOT NULL,
  `register_no` int(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_signin`
--

INSERT INTO `staff_signin` (`name`, `register_no`, `email`, `password`, `status`) VALUES
('staff', 11111, '0', '11111', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `Course_Name` varchar(100) NOT NULL,
  `Course_Code` varchar(100) NOT NULL,
  `Staffs` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`Course_Name`, `Course_Code`, `Staffs`, `semester`) VALUES
('General Tamil 1', '101', '----', 1),
('Communicative English 1', '102', '---', 1),
('Mathematical Operation', '103', '---', 1),
('Programming In C', '104', '---', 1),
('C Theory', '105', '---', 1),
('DPCO', '106', '---', 1),
('Value Education', '107', '---', 1),
('P.E.T', '108', '---', 1),
('General Tamil 2', '201', '---', 2),
('Communicative English 2', '202', '---', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `staff_signin`
--
ALTER TABLE `staff_signin`
  ADD PRIMARY KEY (`register_no`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Course_Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
