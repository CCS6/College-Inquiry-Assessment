-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 12:14 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cia`
--

-- --------------------------------------------------------

--
-- Table structure for table `answerkey`
--

CREATE TABLE `answerkey` (
  `collegeID` int(11) NOT NULL,
  `collegeNo` int(11) NOT NULL,
  `collegeName` text NOT NULL,
  `q1A1` int(11) NOT NULL,
  `q2A2` int(11) NOT NULL,
  `q3A3` int(11) NOT NULL,
  `q4A4` int(11) NOT NULL,
  `q5A5` int(11) NOT NULL,
  `q6A6` int(11) NOT NULL,
  `q7A7` int(11) NOT NULL,
  `q8A8` int(11) NOT NULL,
  `q9A9` int(11) NOT NULL,
  `q10A10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answerkey`
--

INSERT INTO `answerkey` (`collegeID`, `collegeNo`, `collegeName`, `q1A1`, `q2A2`, `q3A3`, `q4A4`, `q5A5`, `q6A6`, `q7A7`, `q8A8`, `q9A9`, `q10A10`) VALUES
(1001, 1, 'College of Agriculture', 0, 1, 2, 1, 0, 0, 1, 3, 2, 4),
(1002, 2, 'College Of Arts and Sciences', 1, 0, 4, 3, 4, 4, 4, 3, 2, 2),
(1003, 3, 'College of Business Administration', 4, 4, 4, 3, 3, 2, 0, 2, 3, 1),
(1004, 4, 'College of Computer Studies', 4, 0, 1, 1, 0, 3, 0, 1, 0, 0),
(1005, 5, 'College of Education', 1, 2, 4, 4, 3, 2, 1, 4, 3, 2),
(1006, 6, 'College of Engineering and Design', 3, 2, 1, 2, 0, 4, 0, 1, 2, 2),
(1007, 7, 'College of Mass Communication', 3, 0, 4, 4, 3, 0, 0, 2, 4, 1),
(1008, 8, 'College of Nursing', 3, 0, 4, 3, 3, 3, 4, 4, 3, 2),
(1009, 9, 'College of Performing and Visual Arts', 0, 1, 4, 4, 2, 0, 0, 0, 4, 3),
(1010, 10, 'Divinity School', 0, 0, 4, 3, 3, 1, 1, 4, 4, 3),
(1011, 11, 'Institute of Clinical Laboratory Sciences', 4, 0, 3, 2, 2, 3, 4, 4, 2, 0),
(1012, 12, 'Institute of Rehabilitative Sciences', 2, 1, 2, 2, 1, 2, 4, 4, 3, 3),
(1013, 13, 'School of Public Affairs and Governance', 3, 4, 4, 2, 3, 2, 0, 3, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `collegeNo` int(11) NOT NULL,
  `collegeID` int(11) NOT NULL,
  `collegeName` text NOT NULL,
  `collegeAboutInfo` text NOT NULL,
  `collegeDean` text NOT NULL,
  `collegeEmail` text NOT NULL,
  `collegePhoneNumber` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`collegeNo`, `collegeID`, `collegeName`, `collegeAboutInfo`, `collegeDean`, `collegeEmail`, `collegePhoneNumber`) VALUES
(1, 123, 'College of Agriculture', 'The College of Agriculture emphasizes academic preparation with extensive community practice for leadership in rural Philippines. Courses are geared to understanding our society and to developing skills needed for making agricultural communities productive and financially viable. Silliman University College of Agriculture is an ACAP (Association of Colleges of Agriculture in the Philippines) charter member.\r\nThe College offers degree programs in Bachelor of Science in Agriculture (majors in Animal Science and Agronomy), Bachelor of Science in Agricultural Business and Master in Applied Science (M.App.Sci.) in Systems Agriculture. The Bachelor of Science programs are PAASCU accredited (level II).\r\nThrough a 10-year development program under the sponsorship of the International Development Program that ended in June 1994, a new thrust in learning and teaching agriculture was developed. The initial step was sending all the members of the faculty for either Special Study Program, Masteral or Ph.D. studies in Australia. The Alternative Approach, a new curricular approach that emphasizes experiential learning and systems thinking and practice is now being implemented at Silliman University College of Agriculture.\r\nThe College of Agriculture utilizes an alternative approach to teaching and learning agriculture which emphasizes competency and issue-based learning.\r\nThe competencies expected of a problem solver, and systems manager. It is envisioned that graduates with such competencies can cope with real world prob Federal Republic of Germany with a grant of $90,000. The College has modern lecture rooms and indoor laboratories for animal and plant sciences built in 1977 Another building unit composed of lecture rooms, a laboratory, a library and offices was built in 1980 through the joint support of the Evangelical Central Agency and the Coconut Federation of the Philippines (COCOFED). In addition, it has eight cottages for seniors and juniors constructed at a cost of P1.2 million donated by the COCOFED.', 'Dean: Chona Fontelo Javier', 'Email: aggies@su.edu.ph', 'Phone: 035 4225654');

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `degreeNo` int(11) NOT NULL,
  `degreeName` text NOT NULL,
  `degreeJobs` text NOT NULL,
  `collegeNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `q1` text NOT NULL,
  `q2` text NOT NULL,
  `q3` text NOT NULL,
  `q4` text NOT NULL,
  `q5` text NOT NULL,
  `q6` text NOT NULL,
  `q7` text NOT NULL,
  `q8` text NOT NULL,
  `q9` text NOT NULL,
  `q10` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `acctNo` int(11) NOT NULL,
  `type` text NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`acctNo`, `type`, `firstName`, `lastName`, `username`, `password`) VALUES
(1, 'admin', 'Charles', 'Carino', 'charlesvcarino', 'ee26bed8a2062297dbe8ee28f8644963'),
(2, 'admin', 'Seth', 'Cornelio', 'test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `userans`
--

CREATE TABLE `userans` (
  `acctNo` int(11) NOT NULL,
  `q1Ans` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answerkey`
--
ALTER TABLE `answerkey`
  ADD PRIMARY KEY (`collegeNo`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`collegeNo`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`degreeNo`),
  ADD KEY `collegeNo` (`collegeNo`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`acctNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answerkey`
--
ALTER TABLE `answerkey`
  MODIFY `collegeNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `collegeNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `degreeNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `acctNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `degrees`
--
ALTER TABLE `degrees`
  ADD CONSTRAINT `degrees_ibfk_1` FOREIGN KEY (`collegeNo`) REFERENCES `colleges` (`collegeNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
