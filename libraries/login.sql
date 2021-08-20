-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 09:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `submittime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user_id`, `subject`, `submittime`) VALUES
(1, 'Bismillah, alhamdulillah, allahu akbar, la illaha illah allah muhammadur rasoululallah.', '2020-10-18 16:19:05'),
(1, 'Bismillah, alhamdulillah, allahu akbar, la illaha illah allah muhammadur rasoululallah.', '2020-10-18 16:20:58'),
(1, 'abcd', '2020-10-18 16:21:42'),
(1, 'abcd', '2020-10-18 16:21:42'),
(1, 'bismillahi arahmani araheem', '2020-10-18 16:25:05'),
(5, 'bismillahi arahmani araheem\r\n', '2020-10-18 16:26:00'),
(1, 'Alhamdullilah\r\n', '2020-10-18 16:54:44'),
(1, 'Alhamdullilah\r\n', '2020-10-18 16:54:48'),
(1, 'Alhamdullilah\r\n', '2020-10-18 16:56:18'),
(5, 'Alhamdulillah', '2020-10-18 16:57:00'),
(5, 'allahu akbar', '2020-10-18 16:57:53'),
(5, 'allahu akbar', '2020-10-18 17:10:24'),
(5, 'true ameen', '2020-10-18 17:10:37'),
(5, 'true ameen', '2020-10-18 17:10:37'),
(5, 'true ameen', '2020-10-18 17:11:27'),
(5, 'true ameen', '2020-10-18 17:12:23'),
(2, 'alhamdulillah', '2020-10-18 17:23:41'),
(2, 'cheese but only on pizza please\r\n', '2020-10-18 17:29:53'),
(2, 'cheese but only on pizza please\r\n', '2020-10-18 17:33:39'),
(6, 'hey reem how was your day today', '2020-10-18 18:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password_hash`, `user_email`) VALUES
(1, 'momo1', '$2y$10$KsW8kqRbgpeS1Kixua8zYOnupQsKJVpOCS7o0rVBJ7FVn6c1MdCam', 'mohamed.l.eltayeb@gmail.com'),
(2, 'mohamedeltayeb', '$2y$10$JxhhexJNif6I75s2jdXI9.AIJ/52khY/z6Ec6tWZzNFz6IfhImipa', 'moheltbusiness@gmail.com'),
(3, 'momoaccount3', '$2y$10$vLyALmta5EC9P.ez/TSQFeUbp5MXDLLvELqWTFpCzc6oTIzkIt3my', 'dafaquack@gmail.com'),
(4, 'account4', '$2y$10$t5L/ABU.tqt0Ls3Q.nY5he0tlRuouXBZ2tXakjrARvGTLqyrsuAxW', 'anonymousaskteam@gmail.com'),
(5, 'account5', '$2y$10$4y7tYTVOBlfw7ko4i4qsJOEnr71cqdH3tek769B5YClESAX8PlgTG', 'trapmoneybenny@gmail.com'),
(6, 'reemelsiddig', '$2y$10$YSP8.IQGYrvUIPMjKrx/SOwuCSCG6FHyt.h9nW8eCJekhq5/Y03jW', 'reemelsiddig@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
