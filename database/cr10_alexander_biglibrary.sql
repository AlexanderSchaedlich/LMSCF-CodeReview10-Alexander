-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Mrz 2020 um 09:49
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_alexander_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `cr10_alexander_biglibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_alexander_biglibrary`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `author`
--

CREATE TABLE `author` (
  `id` int(7) NOT NULL,
  `f_name` varchar(25) NOT NULL,
  `l_name` varchar(25) NOT NULL,
  `media_quantity` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `author`
--

INSERT INTO `author` (`id`, `f_name`, `l_name`, `media_quantity`) VALUES
(1, 'john', 'snow', 2),
(2, 'john', 'carter', 3),
(3, 'john', 'wick', 4),
(4, 'john', 'marston', 5),
(5, 'john', 'shaft', 6),
(6, 'john', 'king of England', 7),
(7, 'john', 'rambo', 8),
(8, 'john', 'McClane', 9),
(9, 'john', 'connor', 10),
(10, 'john', 'nash', 11);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fk_author` int(7) DEFAULT NULL,
  `ISBN` varchar(20) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `fk_publisher` int(7) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `availability` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `title`, `image`, `fk_author`, `ISBN`, `short_description`, `publish_date`, `fk_publisher`, `type`, `availability`) VALUES
(1, 'vernacular houses', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR66fgMgaev7rRY2lGsw9jA80MVZOKbK-YCGMktsc50Ue9814Sl', 1, 'fghj78', 'Historic England’s twenty listing selection guides help to define which historic\r\nbuildings are likely to meet the relevant tests for national designation and be included\r\non the National Heritage List for England.', '2020-01-01', 3, 'book', 1),
(2, 'rock me amadeus', 'https://www.servustv.com/tachyon/sites/4/2019/02/falco.jpg?fit=1142,1701', 2, 'kjgjh7657', 'music', '2020-01-02', 1, 'cd', 0),
(3, 'how to live on mars', 'https://images-na.ssl-images-amazon.com/images/I/8170nL6YqtL.jpg', 3, 'sg34', 'Practical oriented guide through the flora, fauna and geological structur of one of the most admirable planets in the solar system. Based on most serious scientific research.', '2020-01-03', 2, 'book', 1),
(4, 'how to live on mars', 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5f/Mars_Ice_Home_concept.jpg/1200px-Mars_Ice_Home_concept.jpg', 4, 'sg34', 'Practical oriented guide through the flora, fauna and geological structur of one of the most admirable planets in the solar system. Based on most serious scientific research.', '2020-01-03', 2, 'book', 1),
(5, 'how to live on mars', 'https://cdn.pixabay.com/photo/2012/11/28/09/08/mars-67522__480.jpg', 5, 'sg34', 'Practical oriented guide through the flora, fauna and geological structur of one of the most admirable planets in the solar system. Based on most serious scientific research.', '2020-01-03', 2, 'book', 1),
(6, 'how to live on mars', 'https://cdn.pixabay.com/photo/2012/01/09/10/31/mars-11613__480.jpg', 6, 'sg34', 'Practical oriented guide through the flora, fauna and geological structur of one of the most admirable planets in the solar system. Based on most serious scientific research.', '2020-01-03', 2, 'book', 1),
(7, 'how to live on mars', 'https://cdn.pixabay.com/photo/2011/12/13/14/30/mars-11012__480.jpg', 7, 'sg34', 'Practical oriented guide through the flora, fauna and geological structur of one of the most admirable planets in the solar system. Based on most serious scientific research.', '2020-01-03', 2, 'book', 1),
(9, 'how to live on mars', 'https://cdn.pixabay.com/photo/2012/01/09/10/21/mars-11608__480.jpg', 9, 'sg34', 'Practical oriented guide through the flora, fauna and geological structur of one of the most admirable planets in the solar system. Based on most serious scientific research.', '2020-01-05', 2, 'book', 1),
(10, 'how to live on mars', 'https://cdn.pixabay.com/photo/2012/01/09/10/17/mars-11604__480.jpg', 10, 'sg34', 'Practical oriented guide through the flora, fauna and geological structur of one of the most admirable planets in the solar system. Based on most serious scientific research.', '2020-02-07', 2, 'book', 0),
(11, 'wunderful story', 'https://cdn.pixabay.com/photo/2017/02/26/21/39/rose-2101475__480.jpg', 2, 'sfh3456', 'what a story!', '2020-03-04', 2, 'book', 0),
(14, 'interesting book', 'https://cdn.pixabay.com/photo/2015/12/19/20/32/paper-1100254__480.jpg', 3, 'sdg345t', 'very interesting', '2020-03-06', 3, 'book', 0),
(22, 'soul music', 'https://cdn.pixabay.com/photo/2018/09/13/16/54/cd-cover-3675245__480.jpg', 1, 'dhfg436', 'music', '2020-03-13', 3, 'cd', 0),
(23, 'banana stories', 'https://cdn.pixabay.com/photo/2015/03/14/19/45/suit-673697__480.jpg', 1, 'sf325', 'new stories', '2020-03-17', 3, 'book', 0),
(24, 'Apple Trees', 'https://cdn.pixabay.com/photo/2016/07/21/09/04/apple-1532055__480.jpg', 3, 'fdgh4356', 'How to cultivate apple trees', '2020-03-27', 1, 'book', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `publisher`
--

CREATE TABLE `publisher` (
  `id` int(7) NOT NULL,
  `name` varchar(50) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `publisher`
--

INSERT INTO `publisher` (`id`, `name`, `adress`, `size`) VALUES
(1, 'Kitchen Jokes', 'big street 1, 1111 london, united kingdom', 'medium'),
(2, 'Galaxy Science', 'small street 2, 2222 london, united kingdom', 'big'),
(3, 'Kentish Architecture', 'big street 3, 3333 maidstone, united kingdom', 'small');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_author` (`fk_author`),
  ADD KEY `fk_publisher` (`fk_publisher`);

--
-- Indizes für die Tabelle `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_ibfk_1` FOREIGN KEY (`fk_author`) REFERENCES `author` (`id`),
  ADD CONSTRAINT `media_ibfk_2` FOREIGN KEY (`fk_publisher`) REFERENCES `publisher` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
