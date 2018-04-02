-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2017 at 04:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetFullNameAndClass` (IN `course` VARCHAR(255))  BEGIN 

    IF course = 'ALL'
      THEN 
        SET @str = ' WHERE 1';
      ELSE
        SET @str = CONCAT (' WHERE c.course = ', QUOTE(course));
    END IF;

    SET @query = CONCAT ('SELECT s.regno as RegNo, c.course as Course FROM studentdb AS s INNER JOIN marksdb AS c ON s.regno = c.rollno ', @str);

    PREPARE stmt FROM @query;
    EXECUTE stmt;

    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `SEM` int(5) NOT NULL,
  `CLASS_TITLE` varchar(25) NOT NULL,
  `NO_OF_STUDENTS` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`SEM`, `CLASS_TITLE`, `NO_OF_STUDENTS`) VALUES
(5, 'IT', 26),
(6, 'IT', 3),
(7, 'IT', 9),
(4, 'IT', 5),
(3, 'IT', 6),
(2, 'IT', 3),
(1, 'IT', 4),
(8, 'IT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `username` varchar(32) NOT NULL,
  `profile` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`username`, `profile`) VALUES
('Shruti', 'Advanced Database management system and applications'),
('Shruti', 'Database management system');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL,
  `profession` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `profession`) VALUES
('10it102', '10it102', 'student'),
('11it101', '11it101', 'student'),
('11it102', '11it102', 'student'),
('11it103', '11it103', 'student'),
('11it104', '11it104', 'student'),
('11it105', '11it105', 'student'),
('11it106', '11it106', 'student'),
('11it107', '11it107', 'student'),
('12it101', '12it101', 'student'),
('12it102', '12it102', 'student'),
('12it103', '12it103', 'student'),
('14co101', '14co101', 'student'),
('14co102', '14co102', 'student'),
('14co103', '14co103', 'student'),
('14co104', '14co104', 'student'),
('14co105', '14co105', 'student'),
('14it101', '14it101', 'student'),
('14it102', '14it102', 'student'),
('14it103', '14it103', 'student'),
('14it104', '14it104', 'student'),
('14it105', '14it105', 'student'),
('14it106', '14it106', 'student'),
('14it107', '14it107', 'student'),
('14it108', '14it108', 'student'),
('14it109', '14it109', 'student'),
('14it110', '14it110', 'student'),
('14it111', '14it111', 'student'),
('14it112', '14it112', 'student'),
('14it113', '14it113', 'student'),
('14it114', '14it114', 'student'),
('14it115', '14it115', 'student'),
('14it116', '14it116', 'student'),
('14it117', '14it117', 'student'),
('14it118', '14it118', 'student'),
('14it119', '14it119', 'student'),
('14it120', '14it120', 'student'),
('14it126', '14it126', 'student'),
('14it167', '14it167', 'student'),
('14it212', '14it212', 'student'),
('14it232', '14it232', 'student'),
('14it245', '14it245', 'student'),
('15it101', '15it101', 'student'),
('15it102', '15it102', 'student'),
('15it103', '15it103', 'student'),
('15it104', '15it104', 'student'),
('15it105', '15it105', 'student'),
('15it106', '15it106', 'student'),
('16it101', '16it101', 'student'),
('16it102', '16it102', 'student'),
('17it101', '17it101', 'student'),
('17it102', '17it102', 'student'),
('17it103', '17it103', 'student'),
('17it104', '17it104', 'student'),
('admin', 'admin', 'admin'),
('kajal', 'kajal', 'teacher'),
('shruti', 'shruti', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `marksdb`
--

CREATE TABLE `marksdb` (
  `rollno` varchar(20) NOT NULL,
  `marks` int(10) NOT NULL,
  `course` varchar(20) NOT NULL,
  `exam` varchar(20) NOT NULL,
  `weightage` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marksdb`
--

INSERT INTO `marksdb` (`rollno`, `marks`, `course`, `exam`, `weightage`) VALUES
('14it101', 35, 'DBMS', 'mid', 50),
('14it102', 29, 'DBMS', 'mid', 50),
('14it103', 37, 'DBMS', 'mid', 50),
('14it104', 18, 'DBMS', 'mid', 50),
('14it105', 29, 'DBMS', 'mid', 50),
('14it106', 39, 'DBMS', 'mid', 50),
('14it107', 40, 'DBMS', 'mid', 50),
('14it108', 28, 'DBMS', 'mid', 50),
('14it109', 34, 'DBMS', 'mid', 50),
('14it110', 28, 'DBMS', 'mid', 50),
('14it111', 19, 'DBMS', 'mid', 50),
('14it112', 37, 'DBMS', 'mid', 50),
('14it113', 35, 'DBMS', 'mid', 50),
('14it114', 45, 'DBMS', 'mid', 50),
('14it115', 39, 'DBMS', 'mid', 50),
('14it116', 40, 'DBMS', 'mid', 50),
('14it117', 39, 'DBMS', 'mid', 50),
('14it118', 35, 'DBMS', 'mid', 50),
('14it119', 33, 'DBMS', 'mid', 50),
('14it120', 18, 'DBMS', 'mid', 50),
('14it126', 41, 'DBMS', 'mid', 50),
('14it212', 47, 'DBMS', 'mid', 50),
('14it232', 40, 'DBMS', 'mid', 50),
('14it245', 46, 'DBMS', 'mid', 50),
('13it120', 45, 'CN', 'end', 50),
('13it102', 47, 'CN', 'end', 50),
('13it103', 20, 'CN', 'end', 50),
('13it104', 28, 'CN', 'end', 50),
('13it105', 21, 'CN', 'end', 50),
('13it106', 15, 'CN', 'end', 50),
('13it107', 42, 'CN', 'end', 50),
('13it108', 58, 'CN', 'end', 50),
('13it109', 38, 'CN', 'end', 50),
('13it110', 14, 'CN', 'end', 50),
('13it111', 28, 'CN', 'end', 50),
('13it112', 35, 'CN', 'end', 50),
('13it113', 34, 'CN', 'end', 50),
('13it114', 21, 'CN', 'end', 50),
('13it115', 15, 'CN', 'end', 50),
('13it116', 4, 'CN', 'end', 50),
('13it117', 12, 'CN', 'end', 50),
('13it118', 14, 'CN', 'end', 50),
('13it119', 4, 'CN', 'end', 50),
('13it120', 47, 'CN', 'end', 50),
('12it101', 50, 'IT', 'end', 100),
('12it102', 92, 'IT', 'end', 100),
('12it103', 81, 'IT', 'end', 100),
('14co101', 12, 'OS', 'quiz2', 25),
('14co102', 17, 'OS', 'quiz2', 25),
('14co103', 20, 'OS', 'quiz2', 25),
('14co104', 22, 'OS', 'quiz2', 25),
('14co105', 24, 'OS', 'quiz2', 25),
('14it101', 20, 'DBMS', 'project', 25),
('14it102', 17, 'DBMS', 'project', 25),
('14it103', 19, 'DBMS', 'project', 25),
('14it104', 22, 'DBMS', 'project', 25),
('14it105', 20, 'DBMS', 'project', 25),
('14it106', 18, 'DBMS', 'project', 25),
('14it107', 20, 'DBMS', 'project', 25),
('14it108', 15, 'DBMS', 'project', 25),
('14it109', 18, 'DBMS', 'project', 25),
('14it110', 21, 'DBMS', 'project', 25),
('14it111', 20, 'DBMS', 'project', 25),
('14it112', 19, 'DBMS', 'project', 25),
('14it113', 20, 'DBMS', 'project', 25),
('14it114', 23, 'DBMS', 'project', 25),
('14it115', 19, 'DBMS', 'project', 25),
('14it116', 20, 'DBMS', 'project', 25),
('14it117', 18, 'DBMS', 'project', 25),
('14it118', 20, 'DBMS', 'project', 25),
('14it119', 21, 'DBMS', 'project', 25),
('14it120', 22, 'DBMS', 'project', 25),
('14it126', 24, 'DBMS', 'project', 25),
('14it212', 24, 'DBMS', 'project', 25),
('14it232', 24, 'DBMS', 'project', 25),
('14it245', 24, 'DBMS', 'project', 25),
('14it101', 17, 'ACD', 'assgn', 30),
('14it102', 22, 'ACD', 'assgn', 30),
('14it103', 14, 'ACD', 'assgn', 30),
('14it104', 28, 'ACD', 'assgn', 30),
('14it105', 17, 'ACD', 'assgn', 30),
('14it106', 9, 'ACD', 'assgn', 30),
('14it107', 18, 'ACD', 'assgn', 30),
('14it108', 25, 'ACD', 'assgn', 30),
('14it109', 19, 'ACD', 'assgn', 30),
('14it110', 20, 'ACD', 'assgn', 30),
('14it111', 27, 'ACD', 'assgn', 30),
('14it112', 11, 'ACD', 'assgn', 30),
('14it113', 8, 'ACD', 'assgn', 30),
('14it114', 20, 'ACD', 'assgn', 30),
('14it115', 11, 'ACD', 'assgn', 30),
('14it116', 19, 'ACD', 'assgn', 30),
('14it117', 27, 'ACD', 'assgn', 30),
('14it118', 30, 'ACD', 'assgn', 30),
('14it119', 11, 'ACD', 'assgn', 30),
('14it120', 7, 'ACD', 'assgn', 30),
('14it101', 18, 'DBMS', 'Assignment', 25),
('14it102', 25, 'DBMS', 'Assignment', 25),
('14it103', 21, 'DBMS', 'Assignment', 25),
('14it104', 26, 'DBMS', 'Assignment', 25),
('14it105', 14, 'DBMS', 'Assignment', 25),
('14it106', 15, 'DBMS', 'Assignment', 25),
('14it107', 20, 'DBMS', 'Assignment', 25),
('14it108', 18, 'DBMS', 'Assignment', 25),
('14it109', 19, 'DBMS', 'Assignment', 25),
('14it110', 14, 'DBMS', 'Assignment', 25),
('14it111', 15, 'DBMS', 'Assignment', 25),
('14it112', 14, 'DBMS', 'Assignment', 25),
('14it113', 17, 'DBMS', 'Assignment', 25),
('14it114', 21, 'DBMS', 'Assignment', 25),
('14it115', 21, 'DBMS', 'Assignment', 25),
('14it116', 20, 'DBMS', 'Assignment', 25),
('14it117', 8, 'DBMS', 'Assignment', 25),
('14it118', 14, 'DBMS', 'Assignment', 25),
('14it119', 4, 'DBMS', 'Assignment', 25),
('14it120', 22, 'DBMS', 'Assignment', 25),
('14it126', 23, 'DBMS', 'Assignment', 25),
('14it212', 24, 'DBMS', 'Assignment', 25),
('14it232', 23, 'DBMS', 'Assignment', 25),
('14it245', 23, 'DBMS', 'Assignment', 25),
('13co101', 18, 'CN', 'Midsem', 25),
('13co102', 25, 'CN', 'Midsem', 25),
('13co103', 21, 'CN', 'Midsem', 25),
('13co104', 26, 'CN', 'Midsem', 25),
('13co105', 14, 'CN', 'Midsem', 25),
('13co106', 15, 'CN', 'Midsem', 25),
('13co107', 20, 'CN', 'Midsem', 25),
('13co108', 18, 'CN', 'Midsem', 25),
('13co109', 19, 'CN', 'Midsem', 25),
('13co110', 14, 'CN', 'Midsem', 25),
('13co111', 15, 'CN', 'Midsem', 25),
('13co112', 14, 'CN', 'Midsem', 25),
('13co113', 17, 'CN', 'Midsem', 25),
('13co114', 21, 'CN', 'Midsem', 25),
('13co115', 21, 'CN', 'Midsem', 25),
('13co116', 20, 'CN', 'Midsem', 25),
('13co117', 8, 'CN', 'Midsem', 25),
('13co118', 14, 'CN', 'Midsem', 25),
('13co119', 4, 'CN', 'Midsem', 25),
('13co120', 22, 'CN', 'Midsem', 25),
('14it126', 36, 'ACD', 'mid', 50),
('14it126', 25, 'DBMS', 'mid', 30),
('14it126', 45, 'DBMS', 'mid', 50),
('14it126', 45, 'wta', 'mid', 50),
('14it126,,25', 0, 'DBMS', 'Quiz1', 25),
('14it145,,20', 0, 'DBMS', 'Quiz1', 25),
('14it212,,50', 0, 'DBMS', 'Quiz1', 25),
('14it126,,25', 0, 'ADBMS', 'Midsem', 50),
('14it145,,20', 0, 'ADBMS', 'Midsem', 50),
('14it212,,50', 0, 'ADBMS', 'Midsem', 50);

-- --------------------------------------------------------

--
-- Table structure for table `studentdb`
--

CREATE TABLE `studentdb` (
  `name` varchar(20) NOT NULL,
  `regno` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `sem` int(10) NOT NULL,
  `path` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdb`
--

INSERT INTO `studentdb` (`name`, `regno`, `gender`, `email`, `sem`, `path`) VALUES
('14it101', '14it101', 'male', '14it101@nitk.com', 5, '13co101.jpg'),
('14it102', '14it102', 'male', '14it102@nitk.com', 5, ''),
('14it103', '14it103', 'male', '14it103@nitk.com', 5, ''),
('14it104', '14it104', 'male', '14it104@nitk.com', 5, ''),
('14it105', '14it105', 'male', '14it105@nitk.com', 5, ''),
('14it106', '14it106', 'male', '14it106@nitk.com', 5, ''),
('14it107', '14it107', 'male', '14it107@nitk.com', 5, ''),
('14it108', '14it108', 'male', '14it108@nitk.com', 5, ''),
('14it109', '14it109', 'male', '14it109@nitk.com', 5, ''),
('14it110', '14it110', 'male', '14it110@nitk.com', 5, ''),
('14it111', '14it111', 'male', '14it111@nitk.com', 5, ''),
('14it112', '14it112', 'male', '14it112@nitk.com', 5, ''),
('14it113', '14it113', 'male', '14it113@nitk.com', 5, ''),
('14it114', '14it114', 'male', '14it114@nitk.com', 5, ''),
('14it115', '14it115', 'male', '14it115@nitk.com', 5, ''),
('14it116', '14it116', 'male', '14it116@nitk.com', 5, ''),
('14it117', '14it117', 'male', '14it117@nitk.com', 5, ''),
('14it118', '14it118', 'male', '14it118@nitk.com', 5, ''),
('14it119', '14it119', 'male', '14it119@nitk.com', 5, ''),
('14it120', '14it120', 'male', '14it120@nitk.com', 5, ''),
('14it126', '14it126', 'female', '14it126@nitk.com', 5, '14IT126.jpg'),
('14it212', '14it212', 'female', '14it212@nitk.com', 5, ''),
('14it232', '14it232', 'female', '14it232@nitk.com', 5, ''),
('14it245', '14it245', 'female', '14it245@nitk.com', 5, ''),
('11it101', '11it101', 'male', '11it101@nitk.com', 7, ''),
('11it102', '11it102', 'male', '11it102@nitk.com', 7, ''),
('11it103', '11it103', 'male', '11it103@nitk.com', 7, ''),
('11it104', '11it104', 'male', '11it104@nitk.com', 7, ''),
('11it105', '11it105', 'male', '11it105@nitk.com', 7, ''),
('11it106', '11it106', 'male', '11it106@nitk.com', 7, ''),
('11it107', '11it107', 'male', '11it107@nitk.com', 7, ''),
('15it101', '15it101', 'male', '15it101@nitk.com', 3, ''),
('15it102', '15it102', 'male', '15it102@nitk.com', 3, ''),
('15it103', '15it103', 'male', '15it103@nitk.com', 3, ''),
('15it104', '15it104', 'male', '15it104@nitk.com', 3, ''),
('15it105', '15it105', 'male', '15it105@nitk.com', 3, ''),
('15it106', '15it106', 'male', '15it106@nitk.com', 3, ''),
('14co101', '14co101', 'male', '14co101@nitk.com', 4, ''),
('14co102', '14co102', 'male', '14co102@nitk.com', 4, ''),
('14co103', '14co103', 'male', '14co103@nitk.com', 4, ''),
('14co104', '14co104', 'male', '14co104@nitk.com', 4, ''),
('14co105', '14co105', 'male', '14co105@nitk.com', 4, ''),
('17it101', '17it101', 'male', '17it101@nitk.com', 1, ''),
('17it102', '17it102', 'male', '17it102@nitk.com', 1, ''),
('17it103', '17it103', 'male', '17it103@nitk.com', 1, ''),
('17it104', '17it104', 'male', '17it104@nitk.com', 1, ''),
('12it101', '12it101', 'male', '12it101@nitk.com', 6, ''),
('12it102', '12it102', 'male', '12it102@nitk.com', 6, ''),
('12it103', '12it103', 'male', '12it103@nitk.com', 6, ''),
('16it101', '16it101', 'male', '16it101@nitk.com', 2, ''),
('16it102', '16it102', 'male', '16it102@nitk.com', 2, ''),
('10it102', '10it102', 'male', '10it102@nitk.com', 8, ''),
('14it167', '14it167', 'male', '14it167@nitk.com', 7, ''),
('seeta', '16it232', 'female', 'sheeta@gmail.com', 2, 'seeta.jpg');

--
-- Triggers `studentdb`
--
DELIMITER $$
CREATE TRIGGER `AFTER_INS_ENROLLMENT` AFTER INSERT ON `studentdb` FOR EACH ROW BEGIN
     UPDATE CLASS SET NO_OF_STUDENTS = NO_OF_STUDENTS + 1 WHERE SEM = NEW.SEM;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `summarks`
--
CREATE TABLE `summarks` (
`rollno` varchar(20)
,`course` varchar(20)
,`total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `summarks1`
--
CREATE TABLE `summarks1` (
`rollno` varchar(20)
,`course` varchar(20)
,`total` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Table structure for table `teacherdb`
--

CREATE TABLE `teacherdb` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `course` varchar(20) NOT NULL,
  `sem` int(10) NOT NULL,
  `Path` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherdb`
--

INSERT INTO `teacherdb` (`name`, `email`, `username`, `gender`, `course`, `sem`, `Path`) VALUES
('shruti', 'shruti@nitk.com', 'shruti', 'female', 'DBMS', 5, 'shruti.jpg'),
('shruti', 'shruti@nitk.com', 'shruti', 'female', 'ADBMS', 7, 'shruti.jpg'),
('kajal', 'kajal@nitk.com', 'kajal', 'female', 'ACD', 5, 'kajal.jpg'),
('sangeetha', 'sangeetha@nitk.com', 'sangeetha', 'female', 'DCS', 5, 'sangeetha.jpg'),
('ashwitha', 'ashwitha@nitk.com', 'ashwitha', 'female', 'WTA', 5, 'ashwitha.jpg'),
('geetha', 'geetha@nitk.com', 'geetha', 'female', 'PC', 5, 'geetha.jpg'),
('sowmya', 'sowmya@nitk.com', 'sowmya', 'female', 'AWTA', 5, 'sowmya.jpg'),
('dinesh', 'dinesh@nitk.com', 'dinesh', 'male', 'SWT', 5, 'dinesh.jpg'),
('pradyoth', 'pradyoth@nitk.com', 'pradyoth', 'male', 'economics', 5, 'pradyoth.jpg');

-- --------------------------------------------------------

--
-- Structure for view `summarks`
--
DROP TABLE IF EXISTS `summarks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `summarks`  AS  select `m`.`rollno` AS `rollno`,`m`.`course` AS `course`,sum(`m`.`marks`) AS `total` from (`marksdb` `m` join `teacherdb` `t`) where ((`t`.`course` = `m`.`course`) and (`t`.`username` = 'mohit')) group by `m`.`course`,`m`.`rollno` ;

-- --------------------------------------------------------

--
-- Structure for view `summarks1`
--
DROP TABLE IF EXISTS `summarks1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `summarks1`  AS  select `m`.`rollno` AS `rollno`,`m`.`course` AS `course`,sum(`m`.`marks`) AS `total` from (`marksdb` `m` join `teacherdb` `t`) where ((`t`.`course` = `m`.`course`) and (`t`.`username` = 'shruti')) group by `m`.`course`,`m`.`rollno` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
