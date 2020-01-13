-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 06, 2019 at 07:07 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE IF NOT EXISTS `tbl_comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_post_id` int(11) NOT NULL,
  `comment_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  KEY `FK_commenter` (`fk_user_id`),
  KEY `FK_comment_of_post` (`fk_post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`ID`, `comment`, `fk_user_id`, `fk_post_id`, `comment_date`) VALUES
(1, 'Games are not good for health!', 9, 11, '2019-09-05 11:46:05'),
(9, 'Hello!!!!!!', 19, 11, '2019-09-05 17:11:28'),
(10, 'Well i dont like it.....', 9, 2, '2019-09-06 06:42:05'),
(11, 'No, You are not!', 9, 10, '2019-09-06 06:42:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

DROP TABLE IF EXISTS `tbl_posts`;
CREATE TABLE IF NOT EXISTS `tbl_posts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_userid` (`fk_user_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`ID`, `fk_user_id`, `title`, `description`) VALUES
(1, 9, 'Hate Noodles', 'I hate noodles because, it is not easy to eat.'),
(2, 9, 'Love Pasta', 'I Love pasta because it tastes so good, even after get my clothes stained.'),
(9, 9, 'My Life\'s a disaster', 'My Life\'s is a disaster beacuse it suck at programming'),
(10, 9, 'Good Boy', 'I am a Good Boy'),
(11, 19, 'Games', 'I love games, My Favorite game is Call of Duty 4!'),
(12, 19, 'Akuma', 'Beware of Akuma!'),
(14, 20, 'Helllo!', 'Hello Every One!\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phoneno` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`ID`, `username`, `email`, `pass`, `country`, `phoneno`) VALUES
(1, 'Ahmed', 'ahd_hajamaja@hmail.com', '123', 'Afghanistan', '92161456'),
(7, 'amir', 'amr@mail.com', '789', 'Pakistan', '92456789'),
(8, 'arif', 'arf@gmail.com', 'abc', 'Afghanistan', '93789456'),
(9, 'junaid', 'jdm@gmail.com', '741', 'Canada', '+1333789456'),
(15, 'usama', 'usama@gmail.com', '753', 'Pakistan', '+921234567'),
(16, 'jamshed', 'jmd@jmail.com', '159', 'Pakistan', '+9245671356'),
(18, 'sama', 'sama@samail.com', '963', 'Pakistan', '+92123456'),
(19, 'Usama Taj', 'usama@email.com', '123', 'Pakistan', '+923338865446'),
(20, 'Haroon', 'hrn@mail.com', 'hrn', 'Pakistan', '+92123456789');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `FK_comment_of_post` FOREIGN KEY (`fk_post_id`) REFERENCES `tbl_posts` (`ID`),
  ADD CONSTRAINT `FK_commenter` FOREIGN KEY (`fk_user_id`) REFERENCES `tbl_users` (`ID`);

--
-- Constraints for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD CONSTRAINT `tbl_posts_ibfk_1` FOREIGN KEY (`fk_user_id`) REFERENCES `tbl_users` (`ID`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
