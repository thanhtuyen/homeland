-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 17, 2014 at 06:35 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homeland`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `tieude` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `priority` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_type` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `tieude`, `priority`, `parent_id`, `menu_type`, `del_flag`, `create_user`, `updated_user`, `create_date`, `updated_date`) VALUES
(1, 'Test', 'Kiểm tra', 1, 0, 1, 0, 1, NULL, 1402993336, NULL),
(2, 'Nature', 'Thiên nhiên', 0, 0, 2, 0, 1, NULL, 1402995603, NULL),
(3, 'An Vind land', 'Huyện An Vĩnh', 0, 2, 4, 0, 1, NULL, 1402995644, NULL),
(4, 'Vinh Hai land', 'Vĩnh Hải', 0, 1, 3, 0, 1, NULL, 1402997899, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `culture`
--

CREATE TABLE IF NOT EXISTS `culture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `culture`
--


-- --------------------------------------------------------

--
-- Table structure for table `economy`
--

CREATE TABLE IF NOT EXISTS `economy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `economy`
--


-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `food`
--


-- --------------------------------------------------------

--
-- Table structure for table `historical`
--

CREATE TABLE IF NOT EXISTS `historical` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `historical`
--


-- --------------------------------------------------------

--
-- Table structure for table `natures`
--

CREATE TABLE IF NOT EXISTS `natures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `natures`
--


-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `people`
--


-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE IF NOT EXISTS `specialties` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `specialties`
--


-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE IF NOT EXISTS `travel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `tieude` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `is_public` int(11) NOT NULL DEFAULT '1',
  `category_id` int(11) DEFAULT NULL,
  `del_flag` int(11) NOT NULL DEFAULT '0',
  `feature_flag` int(11) NOT NULL DEFAULT '0',
  `create_user` int(11) NOT NULL,
  `updated_user` int(11) DEFAULT NULL,
  `create_date` int(11) NOT NULL,
  `updated_date` int(11) DEFAULT NULL,
  `image` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `travel`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
