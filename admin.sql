-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2018 at 07:55 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `foss`
--

CREATE TABLE `foss` (
  `tutorial_no` int(20) NOT NULL,
  `tutorial_name` varchar(100) NOT NULL,
  `expected_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foss`
--

INSERT INTO `foss` (`tutorial_no`, `tutorial_name`, `expected_date`) VALUES
(1, 'Tutorial1', '0000-00-00 00:00:00'),
(2, 'Tutorial2', '0000-00-00 00:00:00'),
(3, 'Angularjs', '0000-00-00 00:00:00'),
(4, 'Reactjs', '0000-00-00 00:00:00'),
(5, 'Bootstrap', '0000-00-00 00:00:00'),
(6, 'Cakephp', '0000-00-00 00:00:00'),
(7, 'Laravel', '0000-00-00 00:00:00'),
(8, 'Zend', '0000-00-00 00:00:00'),
(9, 'Codeigniter', '0000-00-00 00:00:00'),
(10, 'Json', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subjects_selected` int(11) NOT NULL,
  `ammount` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `name`, `subjects_selected`, `ammount`, `time`) VALUES
(3, 7, 'sana', 5, 5000, '2018-04-04 17:50:46'),
(2, 6, 'zafir', 2, 2000, '2018-04-04 17:50:46'),
(4, 8, 'abc', 3, 3000, '2018-04-04 17:50:46'),
(5, 10, 'someone', 3, 3000, '2018-04-04 17:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_detail`
--

CREATE TABLE `tutorial_detail` (
  `submission_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `has_paid` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email`, `mobile`, `password`, `has_paid`) VALUES
(1, 'subho', 'subhojeetsaha69@gmail.com', '8765434567', 'asd', 0),
(3, 'Subhojeet', 'subhosaha453@gmail.com', '9569876543', 'awsd', 0),
(4, 'shweta jaiswal', 'jaisshweta2596@gmail.com', '9868655', '12345', 0),
(5, 'shweta jaiswal', 'jaisshweta2596@gmail.com', '9868655', '12345', 0),
(6, 'zafir', 'some@gmail.com', '9835660347', '12345', 1),
(7, 'sana', 'sana@gmail.com', '9835660347', '983566', 1),
(8, 'abc', 'abc@gmail.com', '6588995656', '123456789', 1),
(9, 'nasir', 'mdnasirzan@gmail.com', '9113375166', 'password', 0),
(10, 'someone', 'someone@gmail.com', '9898989865', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foss`
--
ALTER TABLE `foss`
  ADD PRIMARY KEY (`tutorial_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial_detail`
--
ALTER TABLE `tutorial_detail`
  ADD PRIMARY KEY (`submission_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foss`
--
ALTER TABLE `foss`
  MODIFY `tutorial_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tutorial_detail`
--
ALTER TABLE `tutorial_detail`
  MODIFY `submission_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
