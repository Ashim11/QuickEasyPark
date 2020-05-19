-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 11:31 PM
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
-- Database: `car_parking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_type`
--

CREATE TABLE `branch_type` (
  `bt_id` int(11) NOT NULL,
  `bt_hod` varchar(255) NOT NULL,
  `bt_name` varchar(255) NOT NULL,
  `bt_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_type`
--

INSERT INTO `branch_type` (`bt_id`, `bt_hod`, `bt_name`, `bt_description`) VALUES
(1, '6', 'CSE', 'Test'),
(2, '', 'IT', ''),
(3, '9', 'ECE', 'Test'),
(4, '', 'EEE', ''),
(5, '', 'ETM', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Dublin'),
(2, 'Cork');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Ireland'),
(2, 'USA'),
(3, 'UK'),
(4, 'Brazil'),
(5, 'Nepal'),
(6, 'India'),
(7, 'Spain'),
(8, 'Poland'),
(9, 'Denmark'),
(10, 'Portugal');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_user` varchar(255) NOT NULL,
  `login_password` varchar(255) NOT NULL,
  `login_level` varchar(255) NOT NULL,
  `login_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user`, `login_password`, `login_level`, `login_date`) VALUES
(1, 'admin', 'test', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `parking_id` int(11) NOT NULL,
  `parking_space_id` varchar(255) NOT NULL,
  `parking_slot_number` varchar(255) NOT NULL,
  `parking_car_no` varchar(255) NOT NULL,
  `parking_intime` varchar(255) NOT NULL,
  `parking_outtime` varchar(255) DEFAULT NULL,
  `parking_entry_date` varchar(255) NOT NULL,
  `parking_exit_date` varchar(255) DEFAULT NULL,
  `parking_email` text NOT NULL,
  `parking_phonenumber` int(12) NOT NULL,
  `parking_charges` varchar(255) DEFAULT NULL,
  `parking_status` varchar(255) DEFAULT '1',
  `parking_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`parking_id`, `parking_space_id`, `parking_slot_number`, `parking_car_no`, `parking_intime`, `parking_outtime`, `parking_entry_date`, `parking_exit_date`, `parking_email`, `parking_phonenumber`, `parking_charges`, `parking_status`, `parking_description`) VALUES
(2, '2', '8', '1234', '12:19', '23:67', '19 April,2020', '19 April,2016', '', 0, '122', '1', ''),
(3, '2', '6', '5678', '12:19', '', '10 April,2020', '', '', 0, '', '1', ''),
(8, '2', '2', '12', '18:00', '', '25 April,2020', '', '', 0, '', '1', ''),
(10, '2', '3', '21', '12:00', '14:00', '28 April,2020', '28 April,2020', '', 0, '10', '1', ''),
(14, '2', '9', '101', '20.00', '21:00', '8 May,2020', '8 May,2020', 'manasa@gmail.com', 899673015, '12', '1', ''),
(16, '3', '3', '4312', '21:15', '22:00', '13 May,2020', '13 May,2020', 'manasa@gmail.com', 899673015, '12', '1', ''),
(19, '5', '1', '99', '17:00', '18:00', '13 May,202', '13 May,2020', 'ashimgurung433@gmail.com', 899673015, '01', '1', ''),
(20, '4', '3', '222', '18:00', '19:00', '14 May,2020', '14 May,2020', 'ashimgurung433@gmail.com', 899673015, '10', '1', ''),
(21, '4', '2', '123', '19:30', '20:30', '15 May,2020', '15 May,2020', 'manasa@gmail.com', 899673015, '2.70', '1', ''),
(22, '2', '1', '02', '1:00', '2:00', '16 May,2020', '16 May,2020', 'manasa@gmail.com', 899673015, '12', '1', ''),
(23, '2', '4', '1222', '1:00', '2:00', '16 May,2020', '16 May,2020', 'manasa@gmail.com', 899673015, '2.70', '1', ''),
(24, '2', '5', 'qw', '1:00', '2:00', '16 May,2020', '16 May,2020', 'manasa@gmail.com', 899673015, '2.70', '1', ''),
(25, '2', '7', '322', '1:00', '2:00', '16 May,2020', '16 May,2020', 'ashimgurung433@gmail.com', 899673015, '2.70', '1', ''),
(26, '2', '10', '2112', '20:00', '22:00', '18 May,2020', '18 May,2020', 'manasa@gmail.com', 899673015, '11', '1', ''),
(27, '2', '13', '212212', '21:00', '22:00', '19 May,2020', '19 May,2020', 'peter@gmail', 9089080, '12', '1', ''),
(28, '6', '1', '211212', '21:00', '22:00', '19 May,2020', '19 May,2020', 'rohit@gmail.com', 9879696, '10', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Super Admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `space`
--

CREATE TABLE `space` (
  `space_id` int(11) NOT NULL,
  `space_title` varchar(255) NOT NULL,
  `space_total_parkings` varchar(255) NOT NULL,
  `space_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `space`
--

INSERT INTO `space` (`space_id`, `space_title`, `space_total_parkings`, `space_description`) VALUES
(2, 'First Floor Parking', '200', 'First Floor Parking Space'),
(3, 'Basement Parking Space', '120', 'Basement Parking Space'),
(4, 'Second Floor Parking', '250', 'Second Floor Parking'),
(5, 'Outer Parking', '50', 'Outer Parking Space'),
(6, 'Third Floor Parking', '200', '200 Slots');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'D1'),
(2, 'D2'),
(3, 'D3'),
(4, 'D4'),
(5, 'D5'),
(6, 'D6'),
(7, 'D7'),
(8, 'D8'),
(9, 'D9'),
(10, 'D10');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Sedan'),
(2, 'Hatchback '),
(3, 'SUV'),
(4, 'MUV');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_image`) VALUES
(4, '1', 'admin', 'test', 'Ashim Gurung', 'House no : 44', 'Rathmines', '1', '1', '2', 'ashim.gurung@gmail.com', '0899674035', '', '12 january, 2013', 'IMG_5739.JPG'),
(6, '2', 'cse_hod', 'test', 'Atul Kumar', 'House no : 225', 'South circular Road, Dublin 8', '1', '2', '1', 'atul@gmail.com', '0899342712', '', '12 january, 2013', 'IMG_5739.JPG'),
(7, '3', 'faculty', 'test', 'Sahas Rana', 'House no : 768', 'Lower Rathmines, Dublin 6', '2', '1', '2', 'sahas@gmail.com', '0899676634', '', '26 December,2015', 'IMG_5746.JPG'),
(8, '3', 'suman', 'test', 'Suman Singh', 'House no : 768', 'North Circular Road, Dublin 7', '1', '2', '1', 'suman@gmail.com', '0899453625', '', '13 January,1961', 'IMG_5748.jpg'),
(9, '2', 'ece_hod', 'test', 'Peter Mark', 'House no : 768', 'Dame Street, Dublin 2', '1', '1', '1', 'peter@gmail.com', '0899563456', '', '12 january, 2013', 'IMG_5740.jpg'),
(10, '3', 'manasa', 'test', 'Manasa', 'House 221', 'Ballsbridge, Dublin 4', '2', '2', '1', 'manasa@gmail.com', '0899777411', '', '18 January,1968', 'IMG_5746.jpg'),
(11, '2', 'greg', 'test', 'Greg', '21 Dame Street', 'Dublin 1', '1', '1', '1', 'gsouth@yahoo.com', '0899432342', '', '12/05/1980', ''),
(12, '2', 'grgashim', 'test', 'Ashim Gurung', '40 lower rathmines ', 'dublin 6', '1', '6', '1', 'ashimgurung433@gmail.com', '0899673015', '', '17 may 1994', ''),
(13, '2', 'peter', 'test1', 'Peter', '34sdas', 'wefwe', '2', '2', '1', 'peter@gmail.com', '0889879978', '', '08--08-1996', ''),
(14, '2', 'rohan', 'test', 'rohan', '42 grove park', 'dublin 6', '1', '6', '1', 'rohan@gmail.com', '86897686867', '', '237575-232', ''),
(15, '2', 'rohit', 'test', 'rohit', '42 grove park', 'dublin 6', '1', '6', '1', 'rohit@gmail.com', '9879696', '', '976gsds', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`parking_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `space`
--
ALTER TABLE `space`
  ADD PRIMARY KEY (`space_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `parking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `space`
--
ALTER TABLE `space`
  MODIFY `space_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
