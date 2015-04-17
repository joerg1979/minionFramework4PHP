-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Mrz 2015 um 15:03
-- Server Version: 5.5.34
-- PHP-Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `pagecheck`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userproject_id` int(11) NOT NULL,
  `domain` varchar(30) COLLATE utf8_bin NOT NULL,
  `url` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `useremail` varchar(50) COLLATE utf8_bin NOT NULL,
  `userpassword` varchar(25) COLLATE utf8_bin NOT NULL,
  `userproject_id` int(11) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `vorname` varchar(30) COLLATE utf8_bin NOT NULL,
  `nachname` varchar(30) COLLATE utf8_bin NOT NULL,
  `strasse` varchar(30) COLLATE utf8_bin NOT NULL,
  `plz` varchar(5) COLLATE utf8_bin NOT NULL,
  `ort` varchar(30) COLLATE utf8_bin NOT NULL,
  `Land` varchar(30) COLLATE utf8_bin NOT NULL,
  `telefon` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`useremail`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `useremail`, `userpassword`, `userproject_id`, `gender`, `vorname`, `nachname`, `strasse`, `plz`, `ort`, `Land`, `telefon`) VALUES
(1, 'js-edv', 'js_edv@yahoo.de', '0511640073', 1, 1, 'Jörg', 'Sundmacher', 'Ahlemer Str. 12', '30451', 'Hannover', 'Deutschland', '051137381965'),
(2, 'karo-online', 'karo-online@gmx.de', 'pw-karo-pw', 2, 0, 'Karolina', 'Makowska', 'Ahlemer Str. 23', '30451', 'Hannover', 'Deutschland', '01578 7171544');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
