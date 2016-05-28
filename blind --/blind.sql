-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2014 at 04:24 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blind`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'parag', 'parag'),
(2, 'sagar', 'sagar'),
(3, 'tanvi', 'tanvi');

-- --------------------------------------------------------

--
-- Table structure for table `exam_time`
--

CREATE TABLE IF NOT EXISTS `exam_time` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `time` int(20) NOT NULL,
  `warning_time` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `exam_time`
--

INSERT INTO `exam_time` (`id`, `time`, `warning_time`) VALUES
(1, 600, 300);

-- --------------------------------------------------------

--
-- Table structure for table `quantitive`
--

CREATE TABLE IF NOT EXISTS `quantitive` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `question` text,
  `option1` text,
  `option2` text,
  `option3` text,
  `option4` text,
  `trueans` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `quantitive`
--

INSERT INTO `quantitive` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `trueans`) VALUES
(1, 'What is default storage class of variables in C language?', 'extern', 'local', 'auto', 'global', 'auto'),
(2, 'Which of the following search algorithm requires a sorted array?', 'Linear search', 'Hash search', 'Binary search', 'All of these', 'Binary search'),
(3, 'In which linked list last node address is null?', 'Doubly linked list', 'Circular list', 'Singly linked list', 'None of the above', 'Singly linked list'),
(4, 'Which of the following data structure is linear type?', 'Strings', 'Queue', 'Lists', 'All of the above', 'All of the above'),
(5, 'Recursive functions are executed in a?', 'First In First Out Order', 'Load Balancing', 'Parallel Fashion', 'Last In First Out Order', 'Last In First Out Order'),
(6, 'Which one of the following is not a linear data structure?', 'Array', 'Binary Tree', 'Queue', 'Stack', 'Binary Tree'),
(7, 'What is function?', 'Function is a block of statements that perform some specific task.', 'Function is the fundamental modular unit. A function is usually designed to perform a specific task.', 'Function is a block of code that performs a specific task. It has a name and it is reusable', 'All the above', 'All the above'),
(8, 'What is the work of break keyword?', 'Halt execution of program', 'Restart execution of program', 'Exit from loop or switch statement', 'None of the avobe', 'Exit from loop or switch statement'),
(9, 'What is constant?', 'Constants have fixed values that do not change during the execution of a program', 'Constants have fixed values that change during the execution of a program', 'Constants have unknown values that may be change during the execution of a program', 'None of the above', 'Constants have fixed values that do not change during the execution of a program'),
(10, 'What is C Tokens?', 'The smallest individual units of c program', 'The basic element recognized by the compiler', 'The largest individual units of program', 'A & B Both', 'A & B Both');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`, `name`, `roll_no`, `email`, `phone`, `address`, `country`) VALUES
(1, 'parag', 'parag', 'parag', 1, 'parag@gmail.com', 2147483647, 'Mumbai', 'India'),
(2, 'sagar', 'sagar', 'sagar', 2, 'sagar@gmail.com', 12344, 'mumbai', 'india'),
(3, 'tanvi', 'tanvi', 'tanavi', 3, 'tanavi@gmail.com', 123, 'mumbai', 'india'),
(4, 's', 's', 's', 4, 'abc@gmail.com', 456, 'sccsc', 'csdcsdc'),
(9, 'avinash', 'avinash1', 'avinash', 5, 'fgh@gmail.com', 456, 'chicago', 'US');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
