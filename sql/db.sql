-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2014 at 12:49 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bd_admin`
--

CREATE TABLE IF NOT EXISTS `bd_admin` (
`admin_id` int(11) NOT NULL,
  `admin_username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pwd` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bd_admin`
--

INSERT INTO `bd_admin` (`admin_id`, `admin_username`, `admin_pwd`, `admin_email`) VALUES
(1, 'admin', '9003d1df22eb4d3820015070385194c8  ', 'admin@orx.me');

-- --------------------------------------------------------

--
-- Table structure for table `bd_cate`
--

CREATE TABLE IF NOT EXISTS `bd_cate` (
`cate_id` int(4) NOT NULL,
  `cate_name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_order` int(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bd_cate`
--

INSERT INTO `bd_cate` (`cate_id`, `cate_name`, `cate_order`) VALUES
(1, '源码', 0),
(2, '软件', 0),
(3, '其他', 1),
(4, 'Others', 3),
(5, 'test', 9),
(6, 'ID', 0),
(7, 'Title', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bd_item`
--

CREATE TABLE IF NOT EXISTS `bd_item` (
`item_id` int(16) NOT NULL,
  `item_title` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_cate_id` int(4) NOT NULL,
  `item_url` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_size` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_count` int(16) NOT NULL,
  `item_date` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `bd_item`
--

INSERT INTO `bd_item` (`item_id`, `item_title`, `item_cate_id`, `item_url`, `item_size`, `item_text`, `item_count`, `item_date`) VALUES
(1, 'phpMyAdmin', 1, '#', '13Mb', 'phpMyAdmin最新版', 14, '2014-07-16'),
(2, 'Chrome 37 Dev', 1, '#', '33MB', 'Chrome 37 Dev', 6, '2014-07-16'),
(6, 'hello', 1, '#', '1.3MB', '', 1, '2014-09-01'),
(7, 'Other', 3, '#', '2.3G', '', 1, '2014-09-01'),
(8, 'Sand', 3, '#', '1.7G', 'Info', 1, '2014-09-01'),
(9, 'xx', 1, '#', '1.7G', '.....\r\nxxxx', 3, '2014-09-09'),
(10, 'New Item', 2, '#', '78MB', 'New Item\r\nInfo', 0, '2014-10-23');

-- --------------------------------------------------------

--
-- Table structure for table `bd_user`
--

CREATE TABLE IF NOT EXISTS `bd_user` (
`uid` int(11) NOT NULL,
  `user_name` varchar(32) NOT NULL,
  `user_pwd` varchar(32) NOT NULL,
  `user_email` varchar(32) NOT NULL,
  `weibo_uid` int(10) NOT NULL,
  `weibo_token` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bd_user`
--

INSERT INTO `bd_user` (`uid`, `user_name`, `user_pwd`, `user_email`, `weibo_uid`, `weibo_token`) VALUES
(1, 'user', '9003d1df22eb4d3820015070385194c8', 'user@user.com', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd_admin`
--
ALTER TABLE `bd_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bd_cate`
--
ALTER TABLE `bd_cate`
 ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `bd_item`
--
ALTER TABLE `bd_item`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `bd_user`
--
ALTER TABLE `bd_user`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bd_admin`
--
ALTER TABLE `bd_admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bd_cate`
--
ALTER TABLE `bd_cate`
MODIFY `cate_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bd_item`
--
ALTER TABLE `bd_item`
MODIFY `item_id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `bd_user`
--
ALTER TABLE `bd_user`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
