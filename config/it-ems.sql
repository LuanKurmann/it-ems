-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Dez 2022 um 12:34
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
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `amount`, `color`, `brand`, `image`) VALUES
(9, 'headset', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Ste', 10, 'Dark', 'Sony', 'headset'),
(10, 'mouse', 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Ste', 3, 'blue', 'spacerX', 'mouse');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `name`, `email`) VALUES
(5, 'Lehme', 'f48756e8530ecf11d4a6a6b6650483d6cea6161d28c59bb9d13ad38f2e97c408', 'Luca', 'Lehmann', 'luca04.lehmann@live.de'),
(6, 'admin', '08c91ead5638619a4081f1d5e1f0662053dda90fb07c091f8931a1ebcf170fab', 'admin', 'gibb', 'admin.gibb@gibb.ch'),
(7, 'asdasd', 'd0d57bf71df88538ec4eda0acffed86bc8e90cd14ab07236534c482a06c94452', 'asdasd', 'asdasdasd', 'asdasd@asd.chg'),
(8, 'asdasdasddas', '58c15b96dbea4946a64c9feb72c17de4e5787d3cf7df4be86d712aa0f11da619', 'ofdsfodf', 'kdgk', 'fdsf@sad.chdssd'),
(9, 'luca04.lehmann@live.de', 'c9fbd0ab2d0bf495d7d733fad63baeb0875a0bfb66242bea09c1fada0ef515da', 'asdasd', 'asdasdasd', 'luca04.lehmann@live.de'),
(10, 'katara', '0a448bb8e47c17a2a538fd6dfade0de8adf4a85f96e7e4a1b57d67c9ff4db5ba', 'katara', 'sdsss', 'lsdasl@dss.chg'),
(11, 'asdasdasdasd', 'c9fbd0ab2d0bf495d7d733fad63baeb0875a0bfb66242bea09c1fada0ef515da', 'asdasd2', 'dasdasd', 'asd.adc@dasd.ch'),
(12, 'gdsigfjsdffjsdkfj', 'c9fbd0ab2d0bf495d7d733fad63baeb0875a0bfb66242bea09c1fada0ef515da', 'sdfsdflsuidfius', 'saidfusdifuisfujisdh', 'sdfhsdgfhs@dfsf.hzioh');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
