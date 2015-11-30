-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2015 at 02:38 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scrum_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `IDPROJECT` int(11) NOT NULL AUTO_INCREMENT,
  `IDUSER` int(11) NOT NULL,
  `NAME` varchar(254) DEFAULT NULL,
  `NBCOLABORATORS` int(11) DEFAULT NULL,
  `STATUS` varchar(10) NOT NULL,
  `DESCRIPTION` varchar(254) DEFAULT NULL,
  PRIMARY KEY (`IDPROJECT`),
  KEY `AK_IDENTIFIANT_1` (`IDPROJECT`),
  KEY `FK_ASSOCIATIONUSERPROJECT` (`IDUSER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`IDPROJECT`, `IDUSER`, `NAME`, `NBCOLABORATORS`, `STATUS`, `DESCRIPTION`) VALUES
(25, 1, 'PDP', 4, 'DONE', 'M1'),
(30, 1, 'PED', 4, 'TODO', 'M2'),
(31, 1, 'MEAN', 3, 'TODO', 'WEB'),
(36, 9, 'PED', 1, 'TODO', 'M2'),
(37, 7, 'PDP', 4, 'DONE', 'MASTER1'),
(38, 11, 'PED', 4, 'TODO', 'MASTER2'),
(39, 14, 'CDP', 4, 'DONE', 'm1'),
(40, 14, 'PED', 1, 'TODO', 'M2');

-- --------------------------------------------------------

--
-- Table structure for table `sprint`
--

CREATE TABLE IF NOT EXISTS `sprint` (
  `IDSPRINT` int(11) NOT NULL AUTO_INCREMENT,
  `IDPROJECT` int(11) NOT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `SPRINT_ABSTRACT` varchar(100) NOT NULL,
  `DATEDEBUT` datetime DEFAULT NULL,
  `DATEFIN` datetime DEFAULT NULL,
  PRIMARY KEY (`IDSPRINT`),
  KEY `AK_IDENTIFIANT_1` (`IDSPRINT`),
  KEY `IDPROJECT` (`IDPROJECT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sprint`
--

INSERT INTO `sprint` (`IDSPRINT`, `IDPROJECT`, `NUMERO`, `SPRINT_ABSTRACT`, `DATEDEBUT`, `DATEFIN`) VALUES
(1, 37, 1, 'SPRINT1', NULL, NULL),
(12, 37, 5, 'SPRINT4', NULL, NULL),
(19, 38, 5, 'SPRINT1', NULL, NULL),
(20, 39, 5, 'SPRINT1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `IDTASK` int(11) NOT NULL AUTO_INCREMENT,
  `IDSPRINT` int(11) NOT NULL,
  `DESCRIPTION` varchar(11) DEFAULT NULL,
  `ETAT` varchar(11) DEFAULT NULL,
  `Cost_Man_Day` int(11) NOT NULL,
  PRIMARY KEY (`IDTASK`),
  KEY `AK_IDENTIFIANT_1` (`IDTASK`),
  KEY `FK_ASSOCIATIONTASKUSERSTORY` (`IDSPRINT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`IDTASK`, `IDSPRINT`, `DESCRIPTION`, `ETAT`, `Cost_Man_Day`) VALUES
(13, 19, 'T1', NULL, 2),
(14, 19, 't2', NULL, 3),
(15, 19, 't4', NULL, 5),
(16, 20, 'task1', 'DONE', 1),
(17, 20, 'task2', 'ON GOING', 2),
(18, 20, 'task3', 'ON GOING', 3),
(19, 20, 'task4', 'TODO', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `IDUSER` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) NOT NULL,
  `MAIL` varchar(254) DEFAULT NULL,
  `PASSWORD` text,
  `REGISTRATIONDATE` text,
  PRIMARY KEY (`IDUSER`),
  KEY `AK_IDENTIFIANT_1` (`IDUSER`),
  KEY `AK_IDENTIFIANT_2` (`IDUSER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDUSER`, `USERNAME`, `MAIL`, `PASSWORD`, `REGISTRATIONDATE`) VALUES
(1, '', 'm', 's', '2015-11-03 00:00:00'),
(2, 'salim', 'salim@s.fr', '22d7fe8c185003c98f97e5d6ced420c7', 'November,11 2015'),
(3, 'salim3', 'salim@s.fr', '006d2143154327a64d86a264aea225f3', 'November,11 2015'),
(4, 'salim3', 'm@s', '006d2143154327a64d86a264aea225f3', 'November,11 2015'),
(5, 'salim3', 'salim@s.fr', '006d2143154327a64d86a264aea225f3', 'November,12 2015'),
(6, 'test1', 'test@test', '006d2143154327a64d86a264aea225f3', 'November,12 2015'),
(7, 'test3', 'a@a', '8ad8757baa8564dc136c1e07507f4a98', 'November,12 2015'),
(8, 'm.salim92@hotmail.fr', 'm.salim92@hotmail.fr', '22d7fe8c185003c98f97e5d6ced420c7', 'November,13 2015'),
(9, 'salimmoudache', 'salim@gmail.com', '22d7fe8c185003c98f97e5d6ced420c7', 'November,16 2015'),
(10, 'salimmoudache', 'salim@gmail.com', '9b9bbd8d15d37ace5d6293942cfb0050', 'November,16 2015'),
(11, 'moudache', 'salim@gmail.com', '22d7fe8c185003c98f97e5d6ced420c7', 'November,25 2015'),
(12, 'salim', 'salim@g', '22d7fe8c185003c98f97e5d6ced420c7', 'November,26 2015'),
(13, 'test4', 'test4', '22d7fe8c185003c98f97e5d6ced420c7', 'November,26 2015'),
(14, 'test1234', 'TEST@G', '16d7a4fca7442dda3ad93c9a726597e4', 'November,30 2015');

-- --------------------------------------------------------

--
-- Table structure for table `userstory`
--

CREATE TABLE IF NOT EXISTS `userstory` (
  `IDUSERSTORY` int(11) NOT NULL AUTO_INCREMENT,
  `IDPROJECT` int(11) NOT NULL,
  `IDSPRINT` int(11) NOT NULL,
  `DESCRIPTION` varchar(254) DEFAULT NULL,
  `PRIORITY` int(11) DEFAULT NULL,
  `COST` int(11) DEFAULT NULL,
  `ETAT` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`IDUSERSTORY`),
  KEY `AK_IDENTIFIANT_1` (`IDUSERSTORY`),
  KEY `FK_ASSOCIATIONPROJETUSERSTORY` (`IDPROJECT`),
  KEY `FK_ASSOCIATIONUSERSTORYSPRINT` (`IDSPRINT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `userstory`
--

INSERT INTO `userstory` (`IDUSERSTORY`, `IDPROJECT`, `IDSPRINT`, `DESCRIPTION`, `PRIORITY`, `COST`, `ETAT`) VALUES
(6, 37, 1, 'us1', 5, 2, 'TODO'),
(7, 37, 1, 'us4', 1, 1, 'todo'),
(8, 39, 20, 'us1', 5, 7, 'DONE'),
(9, 39, 1, 'us5', 5, 5, 'TODO'),
(10, 39, 1, 'us6', 6, 6, 'TODO');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_ASSOCIATIONUSERPROJECT` FOREIGN KEY (`IDUSER`) REFERENCES `user` (`IDUSER`) ON DELETE CASCADE;

--
-- Constraints for table `sprint`
--
ALTER TABLE `sprint`
  ADD CONSTRAINT `sprint_ibfk_1` FOREIGN KEY (`IDPROJECT`) REFERENCES `project` (`IDPROJECT`) ON DELETE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `FK_ASSOCIATIONTASKUSERSTORY` FOREIGN KEY (`IDSPRINT`) REFERENCES `sprint` (`IDSPRINT`) ON DELETE CASCADE;

--
-- Constraints for table `userstory`
--
ALTER TABLE `userstory`
  ADD CONSTRAINT `FK_ASSOCIATIONPROJETUSERSTORY` FOREIGN KEY (`IDPROJECT`) REFERENCES `project` (`IDPROJECT`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_ASSOCIATIONUSERSTORYSPRINT` FOREIGN KEY (`IDSPRINT`) REFERENCES `sprint` (`IDSPRINT`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
