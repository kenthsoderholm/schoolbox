-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 28 mars 2013 kl 13:35
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `schoolbox`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `files`
--

CREATE TABLE `files` (
  `fileid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(200) DEFAULT NULL,
  `filesize` double NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `created` date DEFAULT NULL,
  PRIMARY KEY (`fileid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumpning av Data i tabell `files`
--

INSERT INTO `files` (`fileid`, `filename`, `filesize`, `userid`, `created`) VALUES
(13, '4010012-internet-html-code--technology-black-background.jpg', 81022, 1, '2013-03-25'),
(14, 'Le0016-607.jpg', 101533, 1, '2013-03-25'),
(15, 'IMG_0085.jpg', 988038, 1, '2013-03-25'),
(16, 'IMG_0084.jpg', 912388, 1, '2013-03-25'),
(17, 'IMG_0085.jpg', 988038, 2, '2013-03-25'),
(18, 'Le0016-607.jpg', 101533, 1, '2013-03-26'),
(20, 'DSC_0120.JPG', 382612, 1, '2013-03-26'),
(21, 'DSC_0120.JPG', 382612, 3, '2013-03-26'),
(22, 'DSC_0119.JPG', 304432, 3, '2013-03-26'),
(23, 'DSC_0113.JPG', 1958854, 1, '2013-03-26'),
(24, 'Ants.jpg', 1281353, 1, '2013-03-26'),
(25, 'DSC_0156.JPG', 419412, 1, '2013-03-26'),
(26, 'DSC_0155.JPG', 378618, 1, '2013-03-28'),
(27, '063ff8ef73434a7015664355964ef2cc.jpg', 441833, 1, '2013-03-28'),
(28, '063ff8ef73434a7015664355964ef2cc.jpg', 441833, 8, '2013-03-28');

-- --------------------------------------------------------

--
-- Tabellstruktur `users`
--

CREATE TABLE `users` (
  `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(80) DEFAULT NULL,
  `lastname` varchar(80) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `schoolname` varchar(200) DEFAULT NULL,
  `active` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `storageused` float DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumpning av Data i tabell `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `password`, `schoolname`, `active`, `created`, `storageused`) VALUES
(1, 'Oliwer', 'Hels&eacute;n', 'oliwer@schoolbox.se', '58245824', 'Teknikh&ouml;gskolan', '2013-03-27 10:45:23', '2013-03-20 11:27:33', 6.72072),
(2, 'Martin', 'Nilsson', 'martin@schoolbox.se', 'martin', 'Teknikh&ouml;gskolan', '2013-03-20 11:38:15', '2013-03-20 11:38:15', 0.942266),
(3, 'Kenth', 'S&ouml;derholm', 'kenth.south@gmail.com', 'kenth', 'Teknikh&ouml;gskolan', '2013-03-20 11:46:09', '2013-03-20 11:46:09', 0.655216),
(4, 'Kalle', 'Anka', 'kalle.anka@live.com', 'kalle', 'Ankeborg High', '2013-03-21 08:03:50', '2013-03-21 08:03:50', 0),
(5, 'Anna', 'Anla', 'hej@hej.se', '12', 'jj', '2013-03-25 13:07:55', '2013-03-25 13:07:55', 0),
(7, 'as', 'asas', 'as', 'as', 'as', '2013-03-28 09:33:07', '2013-03-28 09:33:07', 0),
(8, 'Benji', 'Berget', 'berget@schoolbox.se', 'kalle', 'Lowschool', '2013-03-28 10:35:12', '2013-03-28 10:35:12', 0.421365);

-- --------------------------------------------------------

--
-- Tabellstruktur `usersXfiles`
--

CREATE TABLE `usersXfiles` (
  `userfilesid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `filesid` int(11) DEFAULT NULL,
  PRIMARY KEY (`userfilesid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
