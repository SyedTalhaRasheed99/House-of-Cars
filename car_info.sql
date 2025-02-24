-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 05, 2019 at 07:48 PM
-- Server version: 5.7.23
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_model`
--

DROP TABLE IF EXISTS `cars_model`;
CREATE TABLE IF NOT EXISTS `cars_model` (
  `car_id` int(11) NOT NULL AUTO_INCREMENT,
  `image` longblob,
  `car_name` varchar(250) NOT NULL,
  `car_model` varchar(250) NOT NULL,
  `price` text,
  `man_by` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`car_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars_model`
--

INSERT INTO `cars_model` (`car_id`, `image`, `car_name`, `car_model`, `price`, `man_by`, `created_at`, `updated_at`) VALUES
(4, 0x75706c6f6164732f746f796f74612d636f726f6c6c612d616c7469732e6a7067, 'Toyota Corolla Altis Grande CVT-i 1.8', '2019', 'PKR 3,298,900', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(3, 0x75706c6f6164732f6c657875732d6e782d662d73706f72742d696e746572696f722d6c75787572696f75732d6361722d776562736974652d6865616465722e6a7067, 'Toyota Corolla XSE CVT ', 'Pro2019', '$22-605', 'XLI', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(5, 0x75706c6f6164732f746f796f74612d636f726f6c6c612e6a7067, 'Toyota Corolla XSE CVT ', '2019', '$22-605', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(6, 0x75706c6f6164732f686f6e64612d63697669632e6a7067, 'Toyota Corolla Altis VL CVT', '2019', 'PKR 20.19 Lac', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(7, 0x75706c6f6164732f686f6e64612d636974792e6a7067, 'Toyota Corolla 1.6L Sport 1.6', '2019', 'AED 96,600', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(8, 0x75706c6f6164732f63756c7475732e6a7067, 'Toyota Corolla 2.0 VVT-i Hybrid', '2019', 'ï¿½27-985', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(9, 0x75706c6f6164732f63756c7475732e6a7067, 'United Bravo', '2019', 'PKR 9.0 lakh', 'United', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(10, 0x75706c6f6164732f63313661376130333433636435333230386133666464316533366337616133332e6a7067, 'KIA Grand Carnival', '2019', 'PKR 58.0 lakh', 'KIA', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(11, 0x75706c6f6164732f627261766f2e6a7067, 'Hyundai Santa Fe GLS', '2019', 'PKR 18,500,000', 'Hyundai', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(12, 0x75706c6f6164732f424d572e6a7067, 'FAW V2', '2019', 'PKR 12.9 lakh', 'FAW', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(13, 0x75706c6f6164732f627261766f2e6a7067, 'Honda Civic', '2019', 'PKR 37.0 lakh', 'Honda', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(14, 0x75706c6f6164732f686f6e64612d63697669632d323030372d31373039383632342d352e6a7067, 'Toyota Corolla Altis 1.6L', '2019', '3,700,000 Tk', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(15, 0x75706c6f6164732f676c692e6a7067, 'Toyota Corolla Altis 2.0V', '2019', 'MYR 138,000', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(16, 0x75706c6f6164732f626d775f7864726976655f3035302e6a7067, 'Toyota Corolla Altis 1.6 G AT', '2019', 'Philippine peso 1,053,000', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(17, 0x75706c6f6164732f53545f32303138303630395f4354464153543039415544495f343034363333342e6a7067, 'Toyota Corolla Touring Sports 2.0', '2019', '37,730 ï¿½ EUR', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(18, 0x75706c6f6164732f627261766f2e6a7067, 'Toyota Corolla 2.0', '2019', 'SAR 119,850', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(19, 0x75706c6f6164732f4c4e445f4d5931365f303031305f563030312e6a7067, 'Toyota Corolla 2019 Automatic 2.0L', '2019', '6,000 KWD', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(20, 0x75706c6f6164732f6879627269642e6a7067, 'Toyota Corolla 2.0', '2019', 'QAR 74,000', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39'),
(21, 0x75706c6f6164732f686f6e64612d636974792e6a7067, 'Toyota Corolla Automatic 1.6', '2019', '467,000 EGP', 'Toyota', '2019-05-02 19:41:39', '2019-05-02 19:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(250) NOT NULL,
  `cus_phone` text NOT NULL,
  `cus_gmail` varchar(250) NOT NULL,
  `cus_address` varchar(250) NOT NULL,
  `cus_age` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `gmail` varchar(252) NOT NULL,
  `message` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`feed_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `name`, `gmail`, `message`, `created_at`, `updated_at`) VALUES
(2, 'ali', 'ali@gmail.com', 'ali', '2019-04-28 18:26:02', '2019-04-28 18:26:02'),
(3, 'efeeret', 'dsfdsfdf', '', '2019-04-28 19:17:46', '2019-04-28 19:17:46'),
(4, 'bdjhdfkj', 'vkdsjshk', '', '2019-04-28 19:21:09', '2019-04-28 19:21:09'),
(5, 'fgfdkjhk', 'kgeghk', '', '2019-04-28 19:21:48', '2019-04-28 19:21:48'),
(6, '', '', '', '2019-04-28 19:22:29', '2019-04-28 19:22:29'),
(7, '', '', '', '2019-04-29 18:20:17', '2019-04-29 18:20:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `password`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(4, 'ali', 'akbar', 'ali12', 'ali@gmail.com', '+92-307-7586398', '2019-04-17 18:03:38', '2019-04-17 18:03:38'),
(2, 'admin', 'bhatti', 'admin12', 'admin@gmail.com', '+92-307-7558773', '2019-04-17 16:26:43', '2019-04-17 16:26:43'),
(5, 'dumy', 'dumy', 'dumy12', 'dumy@gmail.com', '+92-307-7586128', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(6, 'Aman', 'Shafique', '123', 'Aman@gmail.com', '+92-311-6560923', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(7, 'Talha', 'Rasool', '123', 'Talha@gmail.com', '+92-300-955003', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(8, 'Talha', 'Rasheed', '123', 'Rasheed@hotmail.com', '+92-316-7560876', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(9, 'Talha', 'Sajjad', '123', 'TalhaS@live.com', '+92-333-7878786', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(10, 'Rana', 'Akram', '123', 'Rana@gmail.com', '+92-300-7653899', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(11, 'Zubair', 'Sibtain', '123', 'Zubair@gmail.com', '+92-335-8975478', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(12, 'Ali', 'Ahmed', '123', 'Ali@outlook.com', '+92-323-8994534', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(13, 'Shaheen ', 'Afridi', '123', 'Afridi@gmail.com', '+92-311-6571236', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(14, 'Sarfaraz', 'Ahmed', '123', 'Sarfaraz@gmail.com', '+92-311-8954327', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(15, 'Sohail', 'Akhter', '123', 'SA@gmail.com', '+92-333-9229978', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(16, 'Waseem', 'Badami', '123', 'Waseem@live.com', '+92-300-5555676', '2019-04-22 08:41:47', '2019-04-22 08:41:47'),
(17, 'Junaid', 'Jamshed', '123', 'J.@outlook.com', '+92-322-4445566', '2019-04-22 08:41:47', '2019-04-22 08:41:47');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
