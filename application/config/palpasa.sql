-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2013 at 01:46 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `palpasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `ALBUM_ID` int(5) NOT NULL AUTO_INCREMENT,
  `ALBUM_NAME` char(50) NOT NULL,
  `ARTIST_ID` int(11) NOT NULL,
  `YEAR` char(10) NOT NULL,
  PRIMARY KEY (`ALBUM_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=304 ;

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
  `ARTIST_ID` int(9) NOT NULL AUTO_INCREMENT,
  `ARTIST_NAME` char(50) NOT NULL,
  `ABOUT` text NOT NULL,
  PRIMARY KEY (`ARTIST_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=202 ;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `GENRE_ID` int(2) NOT NULL,
  `GENRE_NAME` char(30) NOT NULL,
  PRIMARY KEY (`GENRE_ID`),
  UNIQUE KEY `GENRE_NAME` (`GENRE_NAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `ARTIST_ID` int(9) NOT NULL,
  `IMG_LOCATION` text NOT NULL,
  PRIMARY KEY (`ARTIST_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `USER_ID` char(60) NOT NULL,
  `STATION_ID` varchar(60) NOT NULL,
  `SONG_ID` int(11) NOT NULL,
  `LIKE_VAL` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sim_artists`
--

CREATE TABLE IF NOT EXISTS `sim_artists` (
  `ARTIST1` char(50) NOT NULL,
  `ARTIST2` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `song`
--

CREATE TABLE IF NOT EXISTS `song` (
  `SONG_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LOCATION` text NOT NULL,
  `ARTIST_ID` int(11) NOT NULL,
  `SONG_NAME` char(142) NOT NULL,
  `Genre` char(20) NOT NULL,
  `ALBUM_ID` int(5) NOT NULL,
  `LYRICS` longtext NOT NULL,
  PRIMARY KEY (`SONG_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1138 ;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE IF NOT EXISTS `station` (
  `STATION_ID` int(9) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(9) NOT NULL,
  `STATION_NAME` varchar(60) NOT NULL,
  `STATION_TYPE` varchar(7) NOT NULL,
  `TYPE_ID` int(9) NOT NULL,
  PRIMARY KEY (`STATION_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `USER_ID` int(9) NOT NULL AUTO_INCREMENT,
  `EMAIL_ID` char(70) NOT NULL,
  `FIRST_NAME` char(60) NOT NULL,
  `LAST_NAME` char(60) NOT NULL,
  `PASSWORD` char(50) NOT NULL,
  `VERIFIED` char(1) NOT NULL DEFAULT 'N',
  `SYSTEM_USER` char(1) NOT NULL DEFAULT 'F',
  PRIMARY KEY (`USER_ID`),
  UNIQUE KEY `EMAIL` (`EMAIL_ID`),
  UNIQUE KEY `USER_ID` (`USER_ID`),
  KEY `USER_ID_2` (`USER_ID`),
  KEY `USER_ID_3` (`USER_ID`),
  KEY `EMAIL_ID` (`EMAIL_ID`),
  KEY `USER_ID_4` (`USER_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
