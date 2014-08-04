-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2014-07-31 10:28:55
-- 服务器版本： 5.5.34
-- PHP Version: 5.5.10

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
-- 表的结构 `bd_admin`
--

CREATE TABLE IF NOT EXISTS `bd_admin` (
`admin_id` int(11) NOT NULL,
  `admin_username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_pwd` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bd_admin`
--

INSERT INTO `bd_admin` (`admin_id`, `admin_username`, `admin_pwd`, `admin_email`) VALUES
(1, 'admin', '9003d1df22eb4d3820015070385194c8  ', 'admin@orx.me');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd_admin`
--
ALTER TABLE `bd_admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bd_admin`
--
ALTER TABLE `bd_admin`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
