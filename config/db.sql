-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Nov 2022 um 13:06
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `it-ems`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(512) NOT NULL,
  `amount` int(11) NOT NULL,
  `color` varchar(128) NOT NULL,
  `brand` varchar(128) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `amount`, `color`, `brand`, `img`) VALUES
(3, 'Stift', 'Info', 5, 'Blau', 'fffefesdf', 'dfsdf'),
(4, 'Stift', 'Info', 5, 'Blau', 'fffefesdf', 'dfsdf'),
(5, 'Blatt', 'Info', 5, 'Blau', 'fffefesdf', 'dfsdf'),
(6, 'Laptop', 'Info', 5, 'Blau', 'fffefesdf', 'dfsdf'),
(7, 'PC', 'Info', 5, 'Blau', 'fffefesdf', 'dfsdf'),
(8, 'Maus', 'Info', 5, 'Blau', 'fffefesdf', 'dfsdf');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
