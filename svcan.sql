-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2015 at 02:27 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `svcan`
--
CREATE DATABASE IF NOT EXISTS `svcan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `svcan`;

-- --------------------------------------------------------

--
-- Table structure for table `svc_account`
--

CREATE TABLE IF NOT EXISTS `svc_account` (
  `idaccount` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id tai khoan',
  `username` varchar(30) NOT NULL COMMENT 'ten dang nhap',
  `password` varchar(30) NOT NULL COMMENT 'mat khau',
  `roles` int(3) NOT NULL COMMENT 'vai tro',
  `status` tinyint(1) NOT NULL COMMENT 'trang thai',
  PRIMARY KEY (`idaccount`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `svc_comment`
--

CREATE TABLE IF NOT EXISTS `svc_comment` (
  `idcomment` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id comment',
  `idaccount` int(255) NOT NULL COMMENT 'id tai khoan',
  `content` text NOT NULL COMMENT 'noi dung comment',
  `time` time NOT NULL COMMENT 'thoi gian comment',
  PRIMARY KEY (`idcomment`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `svc_employer`
--

CREATE TABLE IF NOT EXISTS `svc_employer` (
  `idrecruitment` int(255) NOT NULL AUTO_INCREMENT COMMENT 'id nha tuyen dung',
  `recruitmentname` varchar(200) NOT NULL COMMENT 'ten nha tuyen dung',
  `phone` tinytext NOT NULL COMMENT 'so dien thoai',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `link` varchar(100) NOT NULL COMMENT 'trang web',
  `introduction` longtext NOT NULL COMMENT 'gioi thieu cong ty/to chuc',
  PRIMARY KEY (`idrecruitment`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `svc_menu`
--

CREATE TABLE IF NOT EXISTS `svc_menu` (
  `idmenu` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `sequence` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  `link` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `parent_id` int(100) NOT NULL,
  PRIMARY KEY (`idmenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `svc_menu`
--

INSERT INTO `svc_menu` (`idmenu`, `name`, `sequence`, `status`, `link`, `level`, `parent_id`) VALUES
(59, 'Tin Mới', 2, 1, 'tinmoi', 1, 0),
(58, 'Đăng tin', 1, 1, 'dangtin', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `svc_post`
--

CREATE TABLE IF NOT EXISTS `svc_post` (
  `idpost` int(200) NOT NULL AUTO_INCREMENT,
  `recruitment` varchar(100) NOT NULL,
  `title` varchar(150) NOT NULL,
  `number` int(200) NOT NULL,
  `position` varchar(150) NOT NULL,
  `postdate` date NOT NULL,
  `outdate` date NOT NULL,
  `describer` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  `brief` tinytext NOT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
