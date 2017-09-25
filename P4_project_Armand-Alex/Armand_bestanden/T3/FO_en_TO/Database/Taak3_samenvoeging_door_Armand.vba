-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 jun 2017 om 11:24
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

-- Door Armand
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_over_de_rhein`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `hijstesten`
--

-- Door Armand
CREATE TABLE `hijstesten` (
  `opdrachtnummer` int(11) NOT NULL,
  `volgnummer` int(11) NOT NULL,
  `Datum_Opgesteld` datetime NOT NULL,
  `Hoofdgiek_Lengte` double NOT NULL,
  `Mecht_Sectie_Gieklengte` double NOT NULL,
  `Hulpgiek_Giekhoek` double NOT NULL,
  `Zwenkhoek` double NOT NULL,
  `Eigen_Massa_Ballast` double NOT NULL,
  `Toelaatbare_Bedrijfslast` double NOT NULL,
  `LMB_In_Werking` double NOT NULL,
  `Proeflast` double NOT NULL,
  `Akkoord` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Gegevens worden geëxporteerd voor tabel `hijstesten`
--

INSERT INTO `hijstesten` (`opdrachtnummer`, `volgnummer`, `Datum_Opgesteld`, `Hoofdgiek_Lengte`, `Mecht_Sectie_Gieklengte`, `Hulpgiek_Giekhoek`, `Zwenkhoek`, `Eigen_Massa_Ballast`, `Toelaatbare_Bedrijfslast`, `LMB_In_Werking`, `Proeflast`, `Akkoord`) VALUES
(1, 1, '2017-05-14 16:07:12', 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, '2017-05-14 16:07:12', 2, 2, 2, 2, 2, 2, 2, 2, 2),
(3, 3, '2017-05-14 16:07:12', 3, 3, 3, 3, 3, 3, 3, 3, 3),
(4, 4, '2017-05-14 16:07:12', 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `kabelchecklisten`
--

CREATE TABLE `kabelchecklisten` (
  `KabelID` int(11) NOT NULL,
  `Opdrachtnummer` int(11) NOT NULL,
  `Draadbreuk_6D` int(11) NOT NULL,
  `Draadbreuk_30D` int(11) NOT NULL,
  `Beschadiging_buitenzijde` int(11) NOT NULL,
  `Beschadiging_Roest_Corrosie` int(11) NOT NULL,
  `Verminderde_Kabeldiameter` int(11) NOT NULL,
  `Positie_Meetpunten` int(11) NOT NULL,
  `Beschadiging_Totaal` int(11) NOT NULL,
  `Type_Beschadiging_Roest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `kabelchecklisten`
--

INSERT INTO `kabelchecklisten` (`KabelID`, `Opdrachtnummer`, `Draadbreuk_6D`, `Draadbreuk_30D`, `Beschadiging_buitenzijde`, `Beschadiging_Roest_Corrosie`, `Verminderde_Kabeldiameter`, `Positie_Meetpunten`, `Beschadiging_Totaal`, `Type_Beschadiging_Roest`) VALUES
(1, 1, 1, 11, 1, 1, 1, 1, 1, 9),
(2, 1, 1, 24, 5, 6, 1, 1, 4, 9),
(3, 2, 2, 22, 2, 2, 2, 2, 2, 9),
(4, 2, 9, 23, 8, 2, 2, 5, 4, 9),
(5, 3, 3, 31, 3, 3, 3, 3, 3, 9),
(6, 4, 4, 44, 4, 4, 4, 4, 4, 9),
(7, 4, 1, 44, 2, 8, 5, 4, 9, 9),
(8, 4, 3, 24, 1, 3, 5, 7, 9, 2),
(9, 4, 5, 43, 2, 8, 5, 2, 8, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opdrachten`
--

CREATE TABLE `opdrachten` (
  `Opdrachtnummer` int(11) NOT NULL,
  `Werkinstuctie` varchar(500) NOT NULL,
  `Datum_uitvoering` date NOT NULL,
  `Kabelleverancier` varchar(80) NOT NULL,
  `Waarnemingen` varchar(300) NOT NULL,
  `Handtekening` longblob NOT NULL,
  `Aantal_bedrijfsuren` decimal(8,2) NOT NULL,
  `Afleg_Redenen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `opdrachten`
--

INSERT INTO `opdrachten` (`Opdrachtnummer`, `Werkinstuctie`, `Datum_uitvoering`, `Kabelleverancier`, `Waarnemingen`, `Handtekening`, `Aantal_bedrijfsuren`, `Afleg_Redenen`) VALUES
(1, 'W_instr 1', '2017-05-16', 'Kabelleverancier 1', 'waarneming 1', 0x48616e6474656b656e696e672031, '5.20', 'Afleg_Redenen 1'),
(2, 'W_instr 2', '2017-05-16', 'Kabelleverancier 2', 'waarneming 2', 0x48616e6474656b656e696e672032, '5.20', 'Afleg_Redenen 2'),
(3, 'W_instr 3', '2017-05-16', 'Kabelleverancier 3', 'waarneming 3', 0x48616e6474656b656e696e672033, '5.20', 'Afleg_Redenen 3'),
(4, 'W_instr 4', '2017-05-16', 'Kabelleverancier 4', 'waarneming 4', 0x48616e6474656b656e696e672034, '5.20', 'Afleg_Redenen 4');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `hijstesten`
--
ALTER TABLE `hijstesten`
  ADD PRIMARY KEY (`opdrachtnummer`,`volgnummer`),
  ADD UNIQUE KEY `opdrachtnummer_UNIQUE` (`opdrachtnummer`);

--
-- Indexen voor tabel `kabelchecklisten`
--
ALTER TABLE `kabelchecklisten`
  ADD PRIMARY KEY (`KabelID`),
  ADD KEY `Opdrachtnummer` (`Opdrachtnummer`);

--
-- Indexen voor tabel `opdrachten`
--
ALTER TABLE `opdrachten`
  ADD PRIMARY KEY (`Opdrachtnummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `kabelchecklisten`
--
ALTER TABLE `kabelchecklisten`
  MODIFY `KabelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT voor een tabel `opdrachten`
--
ALTER TABLE `opdrachten`
  MODIFY `Opdrachtnummer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `kabelchecklisten`
--
ALTER TABLE `kabelchecklisten`
  ADD CONSTRAINT `kabelchecklisten_ibfk_1` FOREIGN KEY (`Opdrachtnummer`) REFERENCES `opdrachten` (`Opdrachtnummer`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
