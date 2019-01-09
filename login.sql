-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 06:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `reg_id` int(10) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`reg_id`, `firstname`, `lastname`, `contact`, `username`, `email`, `password`, `cpassword`) VALUES
(3, 'Sujan', 'Bhatta', '9845217840', 'admin', 'sujanbhatta249@gmail.com', 'Admin123', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `image` longblob NOT NULL,
  `tutor` varchar(200) NOT NULL,
  `about` varchar(500) NOT NULL,
  `price` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `coursename`, `image`, `tutor`, `about`, `price`, `duration`) VALUES
(10, 'IELTS Preperation Class', 0x636f757273655f696d6167652f313532353532333237362e6a7067, 'Suman Thapa', ' IELTS courses at CEI offer a stimulating learning experience. Outside the classroom at CEI, thereâ€™s plenty of support by way of a library and lab along with prompt and effective advice whenever you have a question. Even in the comfort of your home, CEI supports you with its e-library and e-testing center. There are several reasons to study IELTS at CEI and here are a few of the foremost.', 'Rs.10000', '3 Months'),
(12, 'Nursing Preparation Class', 0x636f757273655f696d6167652f313532353532333835312e6a7067, 'Mina Khan', ' Nursing has become a noble and highly challenging profession. Today it has become necessary to pass the competitive entrance exam to get admission in the nursing college because of the maximum demand of this field, and entrance preparation has become almost compulsory for everyone who likes to join staff nurses colleges.', 'Rs.20000', '6 Months'),
(13, 'Diploma in Computer Hardware', 0x636f757273655f696d6167652f313532353532333937332e6a7067, 'Sujan Bhatta', '  Many concepts, techniques, and terminologies are taught in computer hardware courses. Students will learn to build computers, troubleshoot hardware and software problems, networking, safety in the workplace, and basic electronics related to computer hardware ', 'Rs.25000', '6 Months'),
(14, 'Diploma in Software Enginnering', 0x636f757273655f696d6167652f313532353532343134312e6a706567, 'Vaskar Ojha', ' You will learn software engineering principles that are applicable to the breadth of large-scale software systems. The course explores topics such as agile development, REST and Async programming, software specification, design, refactoring, information security, and more.', 'Rs.25000', '8 Months'),
(15, 'Diploma in Network Enginnering', 0x636f757273655f696d6167652f313532353539323539392e6a7067, 'Manoj Sharma', 'We offer one of the most inclusive courses for Hardware and Networking training in Nepal. The trainees will understand the theoretical as well as practical implications of hardware and networking knowledge during the training. After the successful completion of training the deserving trainees will be offered with placement opportunities. ', 'Rs.10000', '6 Months'),
(16, 'Advanced Java Training', 0x636f757273655f696d6167652f313532353539323732392e706e67, 'Bigan Bhandari', ' Java training course is one of the prime IT training courses in Nepal that has been designed for beginner programmers, programming enthusiasts and all the emerging Java developers looking to gain highest level of proficiency in Java programming language. Considering the global popularity of Java as a professional IT training course Broadway has designed a world-class training curriculum to provide career focused training and produce globally competent Java programmers.', 'Rs.25000', '6 Months'),
(17, 'RHCE Training', 0x636f757273655f696d6167652f313532353539323837392e706e67, 'Roman Tamang', ' We are one of the trusted institutes to offer international standard Red Hat Certified (RHCE) training in Nepal. Red Hat Certified Engineer is one of the popular certification courses for networking professionals operating Red Hat Operating System. The course aims to impart technical skills on networking engineers to manage Red Hat Linux System. ', 'Rs.30000', '8 Months'),
(18, 'SQL DBA Training', 0x636f757273655f696d6167652f313532353539333030392e6a7067, 'Dibyatara Shakya', ' As Database Administrators play a significant role in IT companies their global demand is ever increasing. Thus, we have designed special training courses for individuals willing to pursue SQL DBA training in Nepal. The SQL DBA training aims to groom the database management skills of database administrators, SQL Developers, Database Engineers and so on.', 'Rs.40000', '8 Months');

-- --------------------------------------------------------

--
-- Table structure for table `courselog`
--

CREATE TABLE `courselog` (
  `c_id` int(5) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `qual` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courselog`
--

INSERT INTO `courselog` (`c_id`, `coursename`, `firstname`, `lastname`, `email`, `phone`, `username`, `address`, `qual`, `status`) VALUES
(5, 'IELTS Preperation Class', 'Manoj', 'Sharma', 'manoj@gmail.com', '9856345678', 'manoj', 'baglung ', 'Bachelor', 0),
(6, 'Diploma in Software Enginnering', 'Sujan', 'Bhatta', 'sujan249@gmail.com', '9845217840', 'sujan', 'Chitwan', 'Bachelor', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(5) NOT NULL,
  `eventname` varchar(250) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(10) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `eventname`, `description`, `date`, `time`, `image`) VALUES
(44, 'UK Educational Fair', ' Here you can come and attend the event and can get the chance to meet the UK University representative', '05/23/2018', '12:00 AM', 0x6576656e745f696d6167652f313532363730333432352e6a7067),
(45, 'USA Educational Fair', ' Here you can come and attend the event and can get the chance to meet the USA University representative', '05/23/2018', '12:00 AM', 0x6576656e745f696d6167652f313532363730333435312e6a7067),
(46, 'Indian Educational Fair', ' Here you can come and attend the event and can get the chance to meet the Indian University representative', '05/30/2018', '12:00 AM', 0x6576656e745f696d6167652f313532363730333438312e6a7067),
(47, 'Australian Educational Fair', ' Here you can come and attend the event and can get the chance to meet the Australian University representative', '05/29/2018', '12:00 AM', 0x6576656e745f696d6167652f313532363730333530382e706e67);

-- --------------------------------------------------------

--
-- Table structure for table `eventlog`
--

CREATE TABLE `eventlog` (
  `e_id` int(5) NOT NULL,
  `eventname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(5) NOT NULL,
  `image` longblob NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `image`, `about`) VALUES
(14, 0x67616c6c6572795f696d6167652f313532353631383437332e6a7067, ' Cultural dance program organize in our institute in the occasion of saraswoti puja'),
(15, 0x67616c6c6572795f696d6167652f313532353631383534382e6a7067, ' Program organize in our event hall'),
(16, 0x67616c6c6572795f696d6167652f313532353631383630352e6a7067, 'Student using the computer lab of our institute'),
(17, 0x67616c6c6572795f696d6167652f313532353631383635302e6a7067, 'Student attending the debate program which is organize in our institute'),
(18, 0x67616c6c6572795f696d6167652f313532353631383637372e6a7067, 'Library for the student of our institute'),
(19, 0x67616c6c6572795f696d6167652f313532353631383731352e6a7067, 'Student playing in the game zone of our institute'),
(20, 0x67616c6c6572795f696d6167652f313532353631383932342e6a7067, 'Tutor of our institute helping the student in their work'),
(21, 0x67616c6c6572795f696d6167652f313532353631393132392e6a7067, ' Front desk for helping student of our institute'),
(22, 0x67616c6c6572795f696d6167652f313532353631393234322e6a7067, 'Student giving the presentation in-front of tutor');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(5) NOT NULL,
  `firstname` varchar(244) NOT NULL,
  `lastname` varchar(244) NOT NULL,
  `address` varchar(244) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `firstname`, `lastname`, `address`, `contact`, `username`, `email`, `password`, `cpassword`) VALUES
(43, 'Sujan', 'Bhatta', 'Chitwan', '9845217840', 'user', 'sujan249@gmail.com', '6edf26f6e0badff12fca32b16db38bf2', '6edf26f6e0badff12fca32b16db38bf2');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(5) NOT NULL,
  `image` longblob NOT NULL,
  `name` varchar(240) NOT NULL,
  `about` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `image`, `name`, `about`) VALUES
(15, 0x7465616d5f696d6167652f313532353335303633392e6a7067, 'James Wood', 'Managing Director'),
(16, 0x7465616d5f696d6167652f313532353138353636322e6a7067, 'Martin Guptil', 'Chief Executive Officer'),
(17, 0x7465616d5f696d6167652f313532353138353731342e6a7067, 'David Warner', 'Chairman'),
(18, 0x7465616d5f696d6167652f313532353138353739372e6a7067, 'Kevin Obron', 'Administrative Officer'),
(19, 0x7465616d5f696d6167652f313532363537323936372e6a7067, 'Sujan Bhatta', 'Network Architect');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(259) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` int(5) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`test_id`, `username`, `name`, `message`, `status`, `image`) VALUES
(2, 'sujan', 'Sujan Bhatta', ' 	I am fully satisfy with the service which chitwan education institute is providing to the student from last 10 years.', 1, 0x746573745f696d6167652f313532353539343233312e6a7067),
(3, 'manoj', 'Manoj Sharma', 'I am happy with the services which this insitute is providing to the student', 1, 0x746573745f696d6167652f313532353539353335342e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `courselog`
--
ALTER TABLE `courselog`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `eventlog`
--
ALTER TABLE `eventlog`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`test_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `reg_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `courselog`
--
ALTER TABLE `courselog`
  MODIFY `c_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `eventlog`
--
ALTER TABLE `eventlog`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
