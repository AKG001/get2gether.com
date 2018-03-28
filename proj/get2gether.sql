-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2015 at 08:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `get2gether`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `attach_id` varchar(11) NOT NULL,
  `attached` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachments`
--

INSERT INTO `attachments` (`attach_id`, `attached`, `post_id`) VALUES
('akshat', '1437212133449719-bigthumbnail.jpg', 1),
('akshat', '1437212153edi_image.png', 2),
('akshat', '1437212187449719-bigthumbnail.jpg', 2),
('akshat', '1437212245449719-bigthumbnail.jpg', 0),
('akshat', '1437213119edi_image.png', 1437213119),
('akshat', '1437213146449719-bigthumbnail.jpg', 1437213146),
('akshat', '1437213187449719-bigthumbnail.jpg', 1437213187),
('akshat', '1437213187edi_image.png', 1437213187),
('akshat', '1437213187fram.jpg', 1437213187),
('akshat', '1437213187frame.png', 1437213187),
('akshat', '1437213265449719-bigthumbnail.jpg', 1437213264),
('akshat', 'fuck you bitches', 1437213187),
('akshat', '143822239410501772_726873957424063_538140213487092397_n.jpg', 1438222394),
('akshat', '143822242410801981_308742349334173_6364845824051420253_n.jpg', 1438222424);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` varchar(11) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_by`, `comment`, `time`) VALUES
('1437213119', 'yugrockz', '    a', '2015-07-21 01:43:41'),
('1437213146', 'yugrockz', '    rr', '2015-07-21 01:43:51'),
('1437213264', 'yugrockz', '    fnkbfc', '2015-07-21 01:43:57'),
('1437213264', 'yugrockz', '    njbn', '2015-07-21 01:45:29'),
('1437213187', 'yugrockz', '    tttt', '2015-07-21 01:45:37'),
('1437213146', 'yugrockz', '   nvc ', '2015-07-21 01:45:48'),
('1437213264', 'yugrockz', '    aaaaaaa', '2015-07-21 01:51:50'),
('1437213264', 'yugjeet', '    aha....!!', '2015-07-21 16:38:16'),
('1437213264', 'yugjeet', '    hvjgjxnc', '2015-07-21 16:38:40'),
('1437213187', 'yugjeet', 'ahah..!!    ', '2015-07-21 16:38:55'),
('1437213119', 'yugrockz', '    yoooooo..', '2015-07-21 16:39:49'),
('1437213119', 'yugrockz', '    cool...', '2015-07-21 19:59:23'),
('1437213187', 'yugjeet', '    ygygy.....()!', '2015-07-21 21:21:41'),
('1437213146', 'yugrockz', 'hhhhhhh.......', '2015-07-22 04:26:02'),
('1437213146', 'yugrockz', 'What would you like to have buddy........!!', '2015-07-22 16:25:10'),
('1437213119', 'yugrockz', 'Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....Add a comment....', '2015-07-22 16:39:25'),
('1437213187', 'yugrockz', 'yoyoyoyo..!! yo baby', '2015-07-22 16:51:12'),
('1437213119', 'yugrockz', 'hhooo', '2015-07-23 00:43:28'),
('1437213119', 'yugrockz', 'fjhblc', '2015-07-23 21:05:58'),
('1437213187', 'yugrockz', 'wertyuio', '2015-07-23 21:06:09'),
('1437213119', 'yugrockz', 'jjjjjjjjjjjjjjjjjjj', '2015-07-23 21:51:10'),
('1437213264', 'yugrockz', 'eeeeeeeeeeeeee', '2015-07-23 22:52:12'),
('1437213119', 'yugrockz', 'dfghj', '2015-07-23 23:54:34'),
('1437213264', 'yugjeet', 'asdf', '2015-07-30 07:50:57'),
('1438222424', 'yugjeet', 'jbvjbfv', '2015-07-30 07:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE IF NOT EXISTS `friend_request` (
  `send_by` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL,
  `request_time` varchar(255) NOT NULL,
  `response_time` varchar(255) NOT NULL,
  `read_or_not` int(1) NOT NULL DEFAULT '0',
  `accept` int(1) NOT NULL DEFAULT '0',
  `bonding` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`send_by`, `received_by`, `request_time`, `response_time`, `read_or_not`, `accept`, `bonding`) VALUES
('akshat', 'yugjeet', 'Tuesday 14th of July 2015 08:00:27 PM', 'Tuesday 14th of July 2015 08:11:35 PM', 0, 1, 10),
('yugjeet', 'yugrockz', 'Tuesday 14th of July 2015 08:13:01 PM', 'Tuesday 14th of July 2015 08:13:36 PM', 0, 1, 5),
('yugrockz', 'akshat', 'Tuesday 14th of July 2015 08:15:15 PM', 'Tuesday 14th of July 2015 08:15:56 PM', 0, 1, 15),
('newaccount', 'yugjeet', 'Friday 17th of July 2015 01:26:29 PM', 'Wednesday 29th of July 2015 11:01:40 AM', 0, 1, 0),
('newaccount', 'yugrockz', 'Friday 17th of July 2015 01:26:55 PM', 'Sunday 19th of July 2015 12:33:38 PM', 0, 1, 3),
('akshat', 'yugjeet', 'Tuesday 14th of July 2015 08:00:27 PM', 'Tuesday 14th of July 2015 08:11:35 PM', 0, 1, 10),
('yugjeet', 'yugrockz', 'Tuesday 14th of July 2015 08:13:01 PM', 'Tuesday 14th of July 2015 08:13:36 PM', 0, 1, 5),
('yugrockz', 'akshat', 'Tuesday 14th of July 2015 08:15:15 PM', 'Tuesday 14th of July 2015 08:15:56 PM', 0, 1, 15),
('newaccount', 'yugjeet', 'Friday 17th of July 2015 01:26:29 PM', 'Wednesday 29th of July 2015 11:01:40 AM', 0, 1, 0),
('newaccount', 'yugrockz', 'Friday 17th of July 2015 01:26:55 PM', 'Sunday 19th of July 2015 12:33:38 PM', 0, 1, 3),
('akshat', 'yugjeet', 'Tuesday 14th of July 2015 08:00:27 PM', 'Tuesday 14th of July 2015 08:11:35 PM', 0, 1, 10),
('yugjeet', 'yugrockz', 'Tuesday 14th of July 2015 08:13:01 PM', 'Tuesday 14th of July 2015 08:13:36 PM', 0, 1, 5),
('yugrockz', 'akshat', 'Tuesday 14th of July 2015 08:15:15 PM', 'Tuesday 14th of July 2015 08:15:56 PM', 0, 1, 15),
('newaccount', 'yugjeet', 'Friday 17th of July 2015 01:26:29 PM', 'Wednesday 29th of July 2015 11:01:40 AM', 0, 1, 0),
('newaccount', 'yugrockz', 'Friday 17th of July 2015 01:26:55 PM', 'Sunday 19th of July 2015 12:33:38 PM', 0, 1, 3),
('akshat', 'yugjeet', 'Tuesday 14th of July 2015 08:00:27 PM', 'Tuesday 14th of July 2015 08:11:35 PM', 0, 1, 10),
('yugjeet', 'yugrockz', 'Tuesday 14th of July 2015 08:13:01 PM', 'Tuesday 14th of July 2015 08:13:36 PM', 0, 1, 5),
('yugrockz', 'akshat', 'Tuesday 14th of July 2015 08:15:15 PM', 'Tuesday 14th of July 2015 08:15:56 PM', 0, 1, 15),
('newaccount', 'yugjeet', 'Friday 17th of July 2015 01:26:29 PM', 'Wednesday 29th of July 2015 11:01:40 AM', 0, 1, 0),
('newaccount', 'yugrockz', 'Friday 17th of July 2015 01:26:55 PM', 'Sunday 19th of July 2015 12:33:38 PM', 0, 1, 3),
('akshat', 'yugjeet', 'Tuesday 14th of July 2015 08:00:27 PM', 'Tuesday 14th of July 2015 08:11:35 PM', 0, 1, 10),
('yugjeet', 'yugrockz', 'Tuesday 14th of July 2015 08:13:01 PM', 'Tuesday 14th of July 2015 08:13:36 PM', 0, 1, 5),
('yugrockz', 'akshat', 'Tuesday 14th of July 2015 08:15:15 PM', 'Tuesday 14th of July 2015 08:15:56 PM', 0, 1, 15),
('newaccount', 'yugjeet', 'Friday 17th of July 2015 01:26:29 PM', 'Wednesday 29th of July 2015 11:01:40 AM', 0, 1, 0),
('newaccount', 'yugrockz', 'Friday 17th of July 2015 01:26:55 PM', 'Sunday 19th of July 2015 12:33:38 PM', 0, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `gcomments`
--

CREATE TABLE IF NOT EXISTS `gcomments` (
  `gpst_id` varchar(11) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `comment` varchar(3000) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gcomments`
--

INSERT INTO `gcomments` (`gpst_id`, `comment_by`, `comment`, `time`) VALUES
('1438083314', 'akshat', 'jhgfd', '2015-07-30 11:09:46'),
('1438076498', 'akshat', 'eeeeeeeeeeeeee', '2015-07-30 11:09:57'),
('1438076739', 'akshat', 'vvvvvvvvvvvvvvvvv', '2015-07-30 11:10:01'),
('1438076498', 'yugjeet', 'fbbvfbvf', '2015-07-30 11:42:23');

-- --------------------------------------------------------

--
-- Table structure for table `gp_attach`
--

CREATE TABLE IF NOT EXISTS `gp_attach` (
  `gpst_id` varchar(11) NOT NULL,
  `attach` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_attach`
--

INSERT INTO `gp_attach` (`gpst_id`, `attach`, `time`) VALUES
('1438076498', '143807649910501772_726873957424063_538140213487092397_n.jpg', '2015-07-28 15:11:39'),
('1438076739', '143807673910301049_832595050159476_6764547831992775794_n.jpg', '2015-07-28 15:15:39'),
('1438076739', '143807673910501772_726873957424063_538140213487092397_n.jpg', '2015-07-28 15:15:39'),
('1438076739', '143807673910801981_308742349334173_6364845824051420253_n.jpg', '2015-07-28 15:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `gp_member`
--

CREATE TABLE IF NOT EXISTS `gp_member` (
  `gp_id` int(11) NOT NULL,
  `member` varchar(255) NOT NULL,
  `time` int(255) NOT NULL,
  `Admin` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_member`
--

INSERT INTO `gp_member` (`gp_id`, `member`, `time`, `Admin`) VALUES
(5, 'akshat', 0, 0),
(5, 'yugjeet', 0, 0),
(11, 'hh', 2147483647, 1),
(12, '', 2147483647, 1),
(13, '', 2147483647, 1),
(14, '', 2147483647, 1),
(15, '', 2147483647, 1),
(16, '', 2147483647, 1),
(17, '', 2147483647, 1),
(18, '', 2147483647, 1),
(19, '', 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gp_post`
--

CREATE TABLE IF NOT EXISTS `gp_post` (
  `gp_id` varchar(11) NOT NULL,
  `gpst_by` varchar(255) NOT NULL,
  `gpst_desc` varchar(2000) NOT NULL,
  `time` varchar(255) NOT NULL,
  `gpst_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gp_post`
--

INSERT INTO `gp_post` (`gp_id`, `gpst_by`, `gpst_desc`, `time`, `gpst_id`) VALUES
('5', 'akshat', 'vjfb', '2015-07-28 15:11:38', '1438076498'),
('5', 'akshat', '', '2015-07-28 15:15:39', '1438076739'),
('5', 'akshat', 'bbbbbbb', '2015-07-28 17:05:14', '1438083314');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`gp_id` int(11) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `gcreator` varchar(255) NOT NULL,
  `gdesc` varchar(2000) NOT NULL,
  `gcover` varchar(255) NOT NULL,
  `vt` varchar(255) NOT NULL,
  `vp` varchar(255) NOT NULL,
  `join` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`gp_id`, `gname`, `gcreator`, `gdesc`, `gcover`, `vt`, `vp`, `join`, `time`) VALUES
(5, 'my first', 'akshat', 'bbbbbbbbbbbbbb', '143772301510501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-24 13:00:15'),
(8, 'bnbb', 'hh', '', 'gp_default.jpg', 'Public', 'Public', 'Public', '2015-07-24 13:02:13'),
(9, 'jcvds', 'hh', '', 'gp_default.jpeg', 'Public', 'Public', 'Public', '2015-07-24 13:19:58'),
(10, 'jcvdsss', 'hh', '', 'gp_default.jpeg', 'Public', 'Public', 'Public', '2015-07-24 13:20:21'),
(11, 'coolest', 'hh', 'nothing to say yet', '143786292110501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 03:52:01'),
(12, 'the cool one', '', 'no words need to express the awesomeness of this group..!', '143786300910501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 03:53:29'),
(13, 'the cool on', '', 'no words need to express the awesomeness of this group..!', '143786309810501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 03:54:58'),
(14, 'the cool o', '', 'no words need to express the awesomeness of this group..!', '143786320110501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 03:56:41'),
(15, 'the cool g', '', 'no words need to express the awesomeness of this group..!', '143786324610501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 03:57:26'),
(16, 'the cool gj', '', 'no words need to express the awesomeness of this group..!', '143786327410501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 03:57:54'),
(17, 'the cool gjnn', '', 'no words need to express the awesomeness of this group..!', '143786334510501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 03:59:05'),
(18, 'the cool gjnnmm', '', 'no words need to express the awesomeness of this group..!', '143786350510501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 04:01:45'),
(19, 'the cool gjnnmmm ', '', 'no words need to express the awesomeness of this group..!', '143786382710501772_726873957424063_538140213487092397_n.jpg', 'Public', 'Public', 'Public', '2015-07-26 04:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `post_id` varchar(255) NOT NULL,
  `liked_by` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`post_id`, `liked_by`, `time`) VALUES
('1437213264', 'yugrockz', '2015-07-23 12:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`key_message` int(11) NOT NULL,
  `send_by` varchar(255) NOT NULL,
  `received_by` varchar(255) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `time` varchar(255) NOT NULL,
  `read_or_not` int(1) NOT NULL DEFAULT '0',
  `sql_bit` int(1) NOT NULL DEFAULT '0',
  `msg_id` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`key_message`, `send_by`, `received_by`, `content`, `time`, `read_or_not`, `sql_bit`, `msg_id`) VALUES
(8, 'yugrockz', 'yugrockz', 'are you there\r\n', '2015 Jul,22 05:37:55 PM', 0, 0, 'yugrockz.yugrockz'),
(7, 'yugrockz', 'yugrockz', 'whats up\r\n', '2015 Jul,22 05:37:32 PM', 0, 0, 'yugrockz.yugrockz'),
(6, 'yugrockz', 'yugjeet', 'jjjjs', '2015 Jul,22 05:12:56 PM', 1, 0, 'yugrockz.yugjeet'),
(5, 'yugrockz', 'yugjeet', 'jjjjs', '2015 Jul,22 05:12:11 PM', 1, 0, 'yugrockz.yugjeet'),
(4, 'yugrockz', 'yugjeet', 'jjjjs', '2015 Jul,22 05:08:50 PM', 1, 0, 'yugrockz.yugjeet'),
(2, 'yugrockz', 'newaccount', 'whats up', '2015 Jul,22 04:26:21 PM', 0, 0, 'yugrockz.newaccount'),
(1, 'yugrockz', 'newaccount', 'Hello Kushagra', '2015 Jul,22 04:26:13 PM', 0, 0, 'yugrockz.newaccount'),
(9, 'yugrockz', 'yugrockz', 'are you there\r\n', '2015 Jul,22 05:38:44 PM', 0, 0, 'yugrockz.yugrockz'),
(10, 'yugrockz', 'yugjeet', 'now you see', '2015 Jul,22 05:38:57 PM', 1, 0, 'yugrockz.yugjeet'),
(11, 'yugrockz', 'yugjeet', 'hello', '2015 Jul,22 05:39:18 PM', 1, 0, 'yugrockz.yugjeet'),
(12, 'yugrockz', 'yugrockz', 'Hello', '2015 Jul,22 05:39:29 PM', 0, 0, 'yugrockz.yugrockz'),
(13, 'yugrockz', 'yugrockz', 'Hello', '2015 Jul,22 05:40:04 PM', 0, 0, 'yugrockz.yugrockz'),
(14, 'yugrockz', 'yugrockz', 'Hello', '2015 Jul,22 05:40:53 PM', 0, 0, 'yugrockz.yugrockz'),
(15, 'yugrockz', 'yugrockz', 'Hello', '2015 Jul,22 05:41:33 PM', 0, 0, 'yugrockz.yugrockz'),
(16, 'yugrockz', 'yugrockz', 'Hello', '2015 Jul,22 05:51:42 PM', 0, 0, 'yugrockz.yugrockz'),
(17, 'yugrockz', 'aksht', 'no >>\r\n', '2015 Jul,22 05:51:58 PM', 0, 0, 'yugrockz.aksht'),
(18, 'yugrockz', 'aksht', 'no >>\r\n', '2015 Jul,22 05:54:46 PM', 0, 0, 'yugrockz.aksht'),
(19, 'yugrockz', 'aksht', 'no >>\r\n', '2015 Jul,22 05:55:47 PM', 0, 0, 'yugrockz.aksht'),
(20, 'yugrockz', 'aksht', 'no >>\r\n', '2015 Jul,22 05:56:27 PM', 0, 0, 'yugrockz.aksht'),
(21, 'akshat', 'yugjeet', 'hello', '2015 Jul,22 06:10:48 PM', 1, 0, 'yugjeet.akshat'),
(22, 'akshat', 'yugrockz', 'whats up\r\n', '2015 Jul,22 06:11:20 PM', 1, 0, 'yugrockz.akshat'),
(23, 'akshat', 'ygrockz', 'working\r\n', '2015 Jul,22 06:11:35 PM', 0, 0, 'ygrockz.akshat'),
(24, 'akshat', 'yugjeet', 'nooo', '2015 Jul,22 06:11:49 PM', 1, 0, 'yugjeet.akshat'),
(25, 'yugrockz', 'akshat', 'nothing', '2015 Jul,22 07:47:06 PM', 1, 0, 'yugrockz.akshat'),
(26, 'akshat', 'yugrockz', 'oh good', '2015 Jul,22 07:47:58 PM', 1, 0, 'yugrockz.akshat'),
(27, 'yugrockz', 'akshat', 'so nyc', '2015 Jul,22 07:48:09 PM', 1, 0, 'yugrockz.akshat'),
(28, 'yugrockz', 'newaccount', 'nchccjsjjjsjsjsjs', '2015 Jul,22 07:49:21 PM', 0, 0, 'yugrockz.newaccount'),
(29, 'yugrockz', 'newaccount', 'jnjjdjdhdhhd', '2015 Jul,22 07:49:27 PM', 0, 0, 'yugrockz.newaccount'),
(30, 'yugrockz', 'newaccount', 'dhdhdhdd', '2015 Jul,22 07:49:30 PM', 0, 0, 'yugrockz.newaccount'),
(31, 'yugrockz', 'newaccount', 'hdhdhddhdhdhdhdhdhdhhdhdhdhdshshshshshsh', '2015 Jul,22 07:49:45 PM', 0, 0, 'yugrockz.newaccount'),
(32, 'yugrockz', 'newaccount', 'all good ??', '2015 Jul,22 08:10:04 PM', 0, 0, 'yugrockz.newaccount'),
(33, 'yugrockz', 'yugrockz', 'jfhc', '2015 Jul,22 09:29:59 PM', 0, 0, 'yugrockz.yugrockz'),
(34, 'akshat', 'yugrockz', 'hello', '2015 Jul,22 09:33:38 PM', 1, 0, 'yugrockz.akshat'),
(35, 'yugrockz', 'akshat', 'ha what ??', '2015 Jul,22 09:34:01 PM', 1, 0, 'yugrockz.akshat'),
(36, 'yugrockz', 'akshat', '123', '2015 Jul,22 09:44:13 PM', 1, 0, 'yugrockz.akshat'),
(37, 'yugrockz', 'akshat', 'hello', '2015 Jul,22 09:45:37 PM', 1, 0, 'yugrockz.akshat'),
(38, 'yugrockz', 'akshat', 'cjcj', '2015 Jul,22 09:49:44 PM', 1, 0, 'yugrockz.akshat'),
(39, 'yugrockz', 'akshat', 'now ?', '2015 Jul,22 10:00:19 PM', 1, 0, 'yugrockz.akshat'),
(40, 'yugrockz', 'yugrockz', '125', '2015 Jul,22 10:08:34 PM', 0, 0, 'yugrockz.yugrockz'),
(41, 'yugrockz', 'akshat', 'so now', '2015 Jul,22 10:22:07 PM', 1, 0, 'yugrockz.akshat'),
(42, 'yugrockz', 'newaccount', 'ghjj', '2015 Jul,23 10:31:46 AM', 0, 0, 'yugrockz.newaccount'),
(43, 'yugrockz', 'yugjeet', 'xjsjs', '2015 Jul,23 06:55:23 PM', 1, 0, 'yugrockz.yugjeet'),
(44, 'yugjeet', 'akshat', 'heelo', '2015 Jul,26 12:27:24 AM', 1, 0, 'yugjeet.akshat'),
(45, 'yugjeet', 'yugrockz', 'hey', '2015 Jul,26 12:27:30 AM', 1, 0, 'yugrockz.yugjeet'),
(46, 'yugjeet', 'yugrockz', 'whatsapp', '2015 Jul,26 12:27:37 AM', 1, 0, 'yugrockz.yugjeet'),
(47, 'yugjeet', 'yugrockz', '??', '2015 Jul,26 12:27:38 AM', 1, 0, 'yugrockz.yugjeet'),
(48, 'yugjeet', 'yugrockz', 'give me your no.?', '2015 Jul,26 12:27:47 AM', 1, 0, 'yugrockz.yugjeet'),
(49, 'yugrockz', 'yugjeet', 'no', '2015 Jul,26 10:32:04 AM', 1, 0, 'yugrockz.yugjeet'),
(50, 'yugrockz', 'yugjeet', 'drt', '2015 Jul,26 04:47:35 PM', 1, 0, 'yugrockz.yugjeet'),
(51, 'yugrockz', 'akshat', 'awesome', '2015 Jul,29 11:29:12 AM', 1, 0, 'yugrockz.akshat'),
(52, 'yugrockz', 'yugjeet', 'jsjs', '2015 Jul,29 11:30:44 AM', 1, 0, 'yugrockz.yugjeet'),
(53, 'yugrockz', 'newaccount', 'whats up', '2015 Jul,29 11:48:03 AM', 0, 0, 'yugrockz.newaccount'),
(54, 'yugrockz', 'newaccount', 'hello', '2015 Jul,29 11:49:43 AM', 0, 0, 'yugrockz.newaccount'),
(55, 'yugrockz', 'akshat', 'hello', '2015 Jul,29 11:54:07 AM', 1, 0, 'yugrockz.akshat'),
(56, 'yugrockz', 'newaccount', 'asd', '2015 Jul,29 12:01:38 PM', 0, 0, 'yugrockz.newaccount'),
(57, 'yugrockz', 'newaccount', 'sssss', '2015 Jul,29 12:03:52 PM', 0, 0, 'yugrockz.newaccount'),
(58, 'yugrockz', 'newaccount', 'sssjjjj', '2015 Jul,29 12:06:11 PM', 0, 0, 'yugrockz.newaccount'),
(59, 'akshat', 'yugrockz', 'sab thik ??', '2015 Jul,29 12:16:18 PM', 1, 0, 'yugrockz.akshat'),
(60, 'yugrockz', 'yugjeet', 'hh', '2015 Jul,29 12:17:33 PM', 1, 0, 'yugrockz.yugjeet'),
(61, 'yugrockz', 'akshat', 'lag to rha h]', '2015 Jul,29 12:18:14 PM', 1, 0, 'yugrockz.akshat'),
(62, 'akshat', 'yugrockz', 'hain ??', '2015 Jul,29 12:18:47 PM', 1, 0, 'yugrockz.akshat'),
(63, 'yugrockz', 'akshat', 'jjj', '2015 Jul,29 12:19:09 PM', 1, 0, 'yugrockz.akshat'),
(64, 'akshat', 'yugrockz', '123', '2015 Jul,29 12:20:02 PM', 1, 0, 'yugrockz.akshat'),
(65, 'yugrockz', 'akshat', 'sdf', '2015 Jul,29 12:21:59 PM', 1, 0, 'yugrockz.akshat'),
(66, 'akshat', 'yugrockz', 'ddd', '2015 Jul,29 12:22:11 PM', 1, 0, 'yugrockz.akshat'),
(67, 'yugrockz', 'akshat', 'there red', '2015 Jul,30 12:06:23 AM', 1, 0, 'yugrockz.akshat'),
(68, 'yugrockz', 'akshat', 'yeah', '2015 Jul,30 12:06:48 AM', 1, 0, 'yugrockz.akshat'),
(69, 'akshat', 'yugrockz', 'whats ososo', '2015 Jul,30 12:08:43 AM', 1, 0, 'yugrockz.akshat'),
(70, 'akshat', 'yugrockz', 'helllooo', '2015 Jul,30 12:09:15 AM', 1, 0, 'yugrockz.akshat'),
(71, 'akshat', 'yugrockz', 'reply mee', '2015 Jul,30 12:09:22 AM', 1, 0, 'yugrockz.akshat'),
(72, 'yugrockz', 'akshat', 'hmmm', '2015 Jul,30 12:26:07 AM', 1, 0, 'yugrockz.akshat');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `note_for` varchar(255) NOT NULL,
  `note_by` varchar(255) NOT NULL,
  `id` varchar(255) NOT NULL,
  `note` varchar(3000) NOT NULL,
  `time` varchar(255) NOT NULL,
  `show_note` int(1) NOT NULL,
  `read` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`note_for`, `note_by`, `id`, `note`, `time`, `show_note`, `read`) VALUES
('yugrockz', 'akshat', '5', 'akshat invited you to join this group my first <br/><a href=not_act.php?a=1&id=1437948692&gid=5>Join Group</a><a href=not_act.php?a=0&id=1437948692>Not Now</a>', '2015-07-27 03:41:32', 1, '0'),
('123 yugrockz', 'akshat', '5', 'akshat invited you to join this group my first <br/><a href=not_act.php?a=1&id=1438233356&gid=5>Join Group</a><a href=not_act.php?a=0&id=1438233356>Not Now</a>', '2015-07-30 10:45:56', 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `post_description` varchar(10000) NOT NULL,
  `visibility` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_by`, `post_description`, `visibility`, `time`) VALUES
(1437213119, 'akshat', '', 'Public', '2015-07-18 15:21:59'),
(1437213146, 'akshat', '', 'Public', '2015-07-18 15:22:26'),
(1437213187, 'akshat', '', 'Public', '2015-07-18 15:23:07'),
(1437213264, 'akshat', 'hi you all', 'Friends', '2015-07-18 15:24:24'),
(1438222394, 'akshat', 'werttttt', 'Public', '2015-07-30 07:43:14'),
(1438222424, 'akshat', '', 'Friends', '2015-07-30 07:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`uid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_image` varchar(200) DEFAULT NULL,
  `profile_image_small` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`user_key` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass_word` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `high_school` varchar(255) NOT NULL,
  `inter_school` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `pic` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `deactive` int(11) NOT NULL DEFAULT '0',
  `full_name_link` varchar(255) NOT NULL,
  `join_date` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_key`, `user_name`, `pass_word`, `email`, `birth_date`, `high_school`, `inter_school`, `college`, `branch`, `year`, `pic`, `first_name`, `last_name`, `gender`, `country`, `state`, `city`, `relationship`, `mobile_no`, `status`, `deactive`, `full_name_link`, `join_date`, `slogan`) VALUES
(1, 'akshat', 'c03df7d5eaf420896ca9893263580d4a', 'akshat@gmail.com', '0000-00-00', '', '', '', '', 0, 'smallakshat1438179747.jpg', 'Akshat', 'Garg', 'Male', 'india', 'ha', '12', 'Single', '9876543210', 0, 0, '<a href="profile.php?q=akshat">Akshat Garg</a>', 'Jan 07, 2014', ''),
(2, 'yugjeet', 'c03df7d5eaf420896ca9893263580d4a', 'ysysharma63@gmail.com', '0000-00-00', '', '', '', '', 0, 'smallyugjeet1438179628.jpg', 'yugjeet', 'sharma', 'Male', 'india', 'haryana', 'sirsa', 'Single', '9512345680', 0, 0, '<a href="profile.php?q=yugjeet">Yugjeet Sharma</a>', 'Mar 08, 2014', ''),
(3, 'yugrockz', 'c03df7d5eaf420896ca9893263580d4a', 'yugrommckz@gmail.com', '1994-05-26', 'Kendriya Vidyalaya No.1 Sirsa', 'Kendriya Vidyalaya No.2 Sirsa', 'Zakir Hussain College Of engineering', 'Computer Science', 2017, 'smallyugrockz1438179533.jpg', '123', 'yugrockz', '   Male', '  India', 'Haryana  ', 'Sirsa                ', '  Single', '8500313336                          ', 1, 0, '<a href=profile.php?q=yugrockz>123 yugrockz</a>', 'Apr 09, 2015', 'you think you know me'),
(4, 'newaccount', 'c03df7d5eaf420896ca9893263580d4a', 'ysysharma63@gmail.com', '2015-07-14', '', '', '', '', 0, 'smallnewaccount1438179933.jpg', 'Kushagr', 'Aggrawal', 'Male', 'India', 'Haryana', 'Hisar', 'In a Relationship', '9632587410', 0, 0, '<a href="profile.php?q=newaccount">Kushagar Aggarwal</a>', 'Jan 27, 2014', ''),
(5, 'yugrockznn', 'c03df7d5eaf420896ca9893263580d4a', 'ysysharma63@gmail.com', '2015-07-14', 'fgh', '21', 'ksksk', 'ksssii', 1980, '143794277110-Mercedes-Benz-F-015-Luxury-in-Motion-1180x436.jpg', 'hello', 'lasy', 'Male', 'india', 'haryana', 'pdh', 'Single', '9287456331', 1, 0, '', '', ''),
(6, 'aksss78', 'c03df7d5eaf420896ca9893263580d4a', 'aks@gmail.com', '2015-07-24', '', '', '', '', 0, '1438238366', 'aaa', 'aaaaaaa', 'Male', 'India', 'UP', 'Aligarh', 'Single', '9876543210', 1, 0, '', '', ''),
(7, 'qwi123456', 'c03df7d5eaf420896ca9893263580d4a', 'a@hh.com', '2015-07-25', '', '', '', '', 0, '1438238554', 'aaa', 'aaaaaaa', 'Male', 'India', 'UP', 'Aligarh', 'Single', '9876543210', 1, 0, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
 ADD FULLTEXT KEY `send_by` (`send_by`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`gp_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`key_message`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`user_key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `gp_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `key_message` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_key` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
