-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Gegenereerd op: 02 jun 2017 om 07:20
-- Serverversie: 5.5.54-0+deb8u1
-- PHP-versie: 5.6.30-0+deb8u1

.SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
.SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `over_de_rhein_akram_kaan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Hijstesten_2`
--

CREATE TABLE IF NOT EXISTS `Hijstesten_2` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Hijstesten_2`
--

INSERT INTO `Hijstesten_2` (`opdrachtnummer`, `volgnummer`, `Datum_Opgesteld`, `Hoofdgiek_Lengte`, `Mecht_Sectie_Gieklengte`, `Hulpgiek_Giekhoek`, `Zwenkhoek`, `Eigen_Massa_Ballast`, `Toelaatbare_Bedrijfslast`, `LMB_In_Werking`, `Proeflast`, `Akkoord`) VALUES
(1, 1, '2017-05-14 16:07:12', 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, '2017-05-14 16:07:12', 2, 2, 2, 2, 2, 2, 2, 2, 2),
(3, 3, '2017-05-14 16:07:12', 3, 3, 3, 3, 3, 3, 3, 3, 3),
(4, 4, '2017-05-14 16:07:12', 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Kabelchecklisten_3`
--

CREATE TABLE IF NOT EXISTS `Kabelchecklisten_3` (
  `Opdrachtnummer` int(11) NOT NULL,
  `KabelID` int(11) NOT NULL,
  `Breuk_6D` int(11) NOT NULL,
  `Breuk_30D` int(11) NOT NULL,
  `Beschadiging_Buitenzijde` int(11) NOT NULL,
  `Beschadiging_Roest_Corrosie` int(11) NOT NULL,
  `Verminderde_Kabeldiameter` int(11) NOT NULL,
  `Positie_Meetpunten` int(11) NOT NULL,
  `Beschadiging_Totaal` int(11) NOT NULL,
  `Type_Beschadiging_Roestvorming` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Kabelchecklisten_3`
--

INSERT INTO `Kabelchecklisten_3` (`Opdrachtnummer`, `KabelID`, `Breuk_6D`, `Breuk_30D`, `Beschadiging_Buitenzijde`, `Beschadiging_Roest_Corrosie`, `Verminderde_Kabeldiameter`, `Positie_Meetpunten`, `Beschadiging_Totaal`, `Type_Beschadiging_Roestvorming`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(3, 3, 3, 3, 3, 3, 3, 3, 3, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Opdrachten_1`
--

CREATE TABLE IF NOT EXISTS `Opdrachten_1` (
`Opdrachtnummer` int(11) NOT NULL,
  `Werkinstructie` varchar(500) NOT NULL,
  `Datum_Uitvoering` datetime NOT NULL,
  `Kabelleverancier` varchar(250) NOT NULL,
  `Waarnemingen` varchar(500) NOT NULL,
  `Handtekeningen` varchar(256) NOT NULL,
  `Aantal_Bedrijfsuren` int(11) NOT NULL,
  `Afleg_Redenen` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Opdrachten_1`
--

INSERT INTO `Opdrachten_1` (`Opdrachtnummer`, `Werkinstructie`, `Datum_Uitvoering`, `Kabelleverancier`, `Waarnemingen`, `Handtekeningen`, `Aantal_Bedrijfsuren`, `Afleg_Redenen`) VALUES
(1, 'Werkinstructie 1', '2017-05-14 13:20:45', 'Leverancier1', 'Waarneming 1', 'Handtekening1', 11, 'Aflegreden 1'),
(2, 'Werkinstructie 2', '2017-05-14 13:20:45', 'Leverancier2', 'Waarneming 2', 'Handtekening2', 22, 'Aflegreden 2'),
(3, 'Werkinstructie 3', '2017-05-14 13:20:45', 'Leverancier3', 'Waarneming 3', 'Handtekening3', 33, 'Aflegreden 3'),
(4, 'Werkinstructie 4', '2017-05-14 13:20:45', 'Leverancier4', 'Waarneming 4', 'Handtekening4', 44, 'Aflegreden 4');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Hijstesten_2`
--
ALTER TABLE `Hijstesten_2`
 ADD PRIMARY KEY (`opdrachtnummer`,`volgnummer`), ADD UNIQUE KEY `opdrachtnummer_UNIQUE` (`opdrachtnummer`);

--
-- Indexen voor tabel `Opdrachten_1`
--
ALTER TABLE `Opdrachten_1`
 ADD UNIQUE KEY `Opdrachtnummer` (`Opdrachtnummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Opdrachten_1`
--
ALTER TABLE `Opdrachten_1`
MODIFY `Opdrachtnummer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
