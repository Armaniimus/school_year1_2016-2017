DROP DATABASE IF EXISTS project_MA_Twente;
CREATE DATABASE project_MA_Twente;
USE project_MA_Twente;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 mei 2017 om 19:43
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_ma_twente`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `configuraties`
--

CREATE TABLE `configuraties` (
  `cid` int(11) NOT NULL,
  `besturingssysteem` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `model` varchar(20) DEFAULT NULL,
  `proccessor` varchar(20) DEFAULT NULL,
  `werkgeheugen` varchar(20) DEFAULT NULL,
  `videokaart` varchar(20) DEFAULT NULL,
  `harddrive` varchar(20) DEFAULT NULL,
  `psu` varchar(20) DEFAULT NULL,
  `bouwjaar` date DEFAULT NULL,
  `licenties` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `configuraties`
--

INSERT INTO `configuraties` (`cid`, `besturingssysteem`, `type`, `model`, `proccessor`, `werkgeheugen`, `videokaart`, `harddrive`, `psu`, `bouwjaar`, `licenties`) VALUES
(162, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '2 GB', '512 GB', '500MB', NULL, '2014-11-29', NULL),
(163, 'Windows 10 Pro', 'DESKTOP', NULL, 'I5', '4 GB', '512 GB', '500 GB', NULL, '2014-12-20', NULL),
(164, 'Windows 10 Pro', 'DESKTOP', NULL, 'I5', '4 GB', '512 GB', '500 GB', NULL, '2014-12-20', NULL),
(165, NULL, 'LAPTOP', NULL, 'I7', '8 GB', NULL, '250 GB SSD', NULL, '2014-11-29', NULL),
(166, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(167, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(168, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(169, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(170, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(171, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(172, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(173, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(174, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(175, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(176, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(177, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(178, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', '1 GB', '2 TB', NULL, '2014-11-29', NULL),
(179, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', 'On Board', '2 TB', NULL, '2014-11-29', NULL),
(180, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '4 GB', 'On Board', '2 TB', NULL, '2014-11-29', NULL),
(181, NULL, 'LAPTOP', NULL, 'I7', '8 GB', NULL, '250 GB SSD', NULL, '2015-02-12', NULL),
(182, 'Windows 10 Pro', 'LAPTOP', NULL, 'I3', '4 GB', 'On Board', '320 GB', NULL, '2015-02-12', NULL),
(183, 'Windows 10 Pro', 'LAPTOP', NULL, 'I3', '4 GB', 'On Board', '320 GB', NULL, '2015-02-12', NULL),
(184, 'Windows 10 Pro', 'LAPTOP', NULL, 'I3', '4 GB', 'On Board', '320 GB', NULL, '2015-02-12', NULL),
(185, 'Windows 10 Pro', 'LAPTOP', NULL, 'I3', '4 GB', 'On Board', '320 GB', NULL, '2015-02-12', NULL),
(186, NULL, 'LAPTOP', NULL, 'I7', '8 GB', NULL, '250 GB SSD', NULL, '2015-02-12', NULL),
(187, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '4 GB', 'On Board', '640GB', NULL, '2015-05-07', NULL),
(188, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '4 GB', 'On Board', '640GB', NULL, '2015-05-07', NULL),
(189, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '4 GB', '2 GB', '120 GB SSD', NULL, '2015-06-12', NULL),
(190, 'Windows 10 Pro', 'DESKTOP', NULL, 'I5', '6 GB', '2 GB', '120 GB SSD + 1 TB', NULL, '2015-06-12', NULL),
(191, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '4 GB', '2 GB', '120 GB SSD', NULL, '2015-06-12', NULL),
(192, 'Windows 10 Pro', 'DESKTOP', NULL, 'I5', '6 GB', '2 GB', '120 GB SSD + 1 TB', NULL, '2015-06-12', NULL),
(193, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '4 GB', '2 GB', '120 GB SSD', NULL, '2015-06-12', NULL),
(194, 'Windows 10 Pro', 'DESKTOP', NULL, 'I5', '6 GB', '2 GB', '120 GB SSD + 1 TB', NULL, '2015-06-12', NULL),
(195, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '4 GB', '1 GB', '120 GB SSD', NULL, '2015-06-12', NULL),
(196, 'Windows 10 Pro', 'DESKTOP', NULL, 'I5', '6 GB', '1 GB', '120 GB SSD + 1 TB', NULL, '2015-06-12', NULL),
(197, 'Windows 10 Pro', 'DESKTOP', NULL, 'I3', '4 GB', '2 GB', '120 GB SSD', NULL, '2015-06-12', NULL),
(198, 'Windows 10 Pro', 'DESKTOP', NULL, 'I5', '6 GB', '2 GB', '120 GB SSD + 1 TB', NULL, '2015-06-12', NULL),
(199, 'Mac OSX', 'LAPTOP', NULL, 'I3', '4 GB', 'On Board', '128 GB SSD', NULL, '2015-10-10', NULL),
(200, 'Mac OSX', 'LAPTOP', NULL, 'I3', '4 GB', 'On Board', '128 GB SSD', NULL, '2015-10-10', NULL),
(201, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(202, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(203, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(204, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(205, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(206, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(207, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(208, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(209, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(210, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(211, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(212, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '8 GB', '2 GB', '120 GB SSD + 640GB', NULL, '2015-12-03', NULL),
(213, 'Windows 10 Pro', 'LAPTOP', NULL, 'I5', '6 GB', 'On Board', '500 GB', NULL, '2015-12-12', NULL),
(214, 'Windows 10 Pro', 'LAPTOP', NULL, 'I5', '6 GB', 'On Board', '500 GB', NULL, '2015-12-12', NULL),
(215, 'Windows 10 Pro', 'LAPTOP', NULL, 'I5', '6 GB', 'On Board', '500 GB', NULL, '2015-12-12', NULL),
(216, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '16 GB', '4 GB Videocard', '120 GB SSD +2TB', NULL, '2016-05-03', NULL),
(217, 'Windows 10 Pro', 'DESKTOP', NULL, 'I7', '16 GB', '2 GB', '120 GB SSD +2TB', NULL, '2016-05-03', NULL),
(218, 'Windows 10 Pro', 'LAPTOP', NULL, 'I7', '8 GB', '2 GB on board', '250 GB SSD', NULL, '2016-10-21', NULL),
(219, 'Windows 10 Pro', 'LAPTOP', NULL, 'I7', '8 GB', '2 GB on board', '250 GB SSD', NULL, '2016-10-21', NULL),
(220, 'Windows 10 Pro', 'LAPTOP', NULL, 'I7', '8 GB', '2 GB on board', '250 GB SSD', NULL, '2016-10-21', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gid` int(11) NOT NULL,
  `voorletter` char(1) DEFAULT NULL,
  `achternaam` varchar(20) DEFAULT NULL,
  `geslacht` varchar(5) DEFAULT NULL,
  `intern_telefoon_nummer` int(11) DEFAULT NULL,
  `afdeling` varchar(40) DEFAULT NULL,
  `postcode` char(6) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gid`, `voorletter`, `achternaam`, `geslacht`, `intern_telefoon_nummer`, `afdeling`, `postcode`, `email`) VALUES
(1, 'V', 'Campbell', 'Dhr', 254, 'CAD', '3214BV', 'vampbell@example.com'),
(2, 'S', 'Geerman', 'Dhr', 253, 'CAD', '3215BV', 'sgeerman@example.com'),
(3, 'S', 'Nahuys Van', 'Mvr', 252, 'CAD', '3216BV', 'Snahayus@example.com'),
(4, 'F', 'gcicek', 'Mvr', 235, 'Directie', '3217BV', 'Fcicek@example.com'),
(5, 'O', 'Neville', 'Dhr', 236, 'Directie', '3218BV', 'Oneville@example.com'),
(6, 'M', 'Oldeneel tot Oldenze', 'Mvr', 234, 'Directie', '3219BV', 'Moldeneeltotoldenzeel@example.com'),
(7, 'Z', ' Barney', 'Dhr', 250, 'Engeneering', '3220BV', 'Zbarney@example.com'),
(8, 'K', 'Ali', 'Mvr', 244, 'Engeneering', '3221BV', 'Kali@example.com'),
(9, 'Z', 'Bozkurt', 'Dhr', 239, 'Engeneering', '3222BV', 'Zbozkurt@example.com'),
(10, 'A', 'Conley', 'Mvr', 245, 'Engeneering', '3223BV', 'Aconley@example.com'),
(11, 'H', 'Grotenhuis van Onste', 'Mvr', 241, 'Engeneering', '3224BV', 'Hgrotenhuisvanonstein@example.com'),
(12, 'C', 'Hall', 'Dhr', 240, 'Engeneering', '3225BV', 'Chall@example.com'),
(13, 'M', 'Hugenpoth, Van', 'Mvr', 242, 'Engeneering', '3226BV', 'Mhugenpoth@example.com'),
(14, 'P', 'Koning', 'Dhr', 237, 'Engeneering', '3227BV', 'Pkoning@example.com'),
(15, 'B', 'Rochussen', 'Dhr', 247, 'Engeneering', '3228BV', 'Brochussen@example.com'),
(16, 'K', 'Schwartzenberg en Ho', 'Mvr', 246, 'Engeneering', '3229BV', 'KSchwartzenbergenhohenlansberg@example.com'),
(17, 'J', 'Wilder', 'Mvr', 249, 'Engeneering', '3230BV', 'Jwilder@example.com'),
(18, 'E', 'Yallin', 'Mvr', 248, 'Engeneering', '3231BV', 'Eyalcin@example.com'),
(19, 'J', 'Matse', 'Dhr', 290, 'Financiele Administratie', '3232BV', 'jmatse@example.com'),
(20, 'N', 'Kinschot, Van', 'Mvr', 290, 'Financiele Administratie', '3233BV', 'Nkinschot@example.com'),
(21, 'K', 'Nguyen', 'Mvr', 290, 'Financiele Administratie', '3234BV', 'Knguyen@example.com'),
(22, 'A', 'Girard de Mielet van', 'Dhr', 276, 'HRM', '3235BV', 'Agirarddemielet@example.com'),
(23, 'H', 'Aktas', 'Mvr', 278, 'ICT', '3236BV', 'Haktas@example.com'),
(24, 'S', 'Harrison', 'Dhr', 279, 'ICT', '3237BV', 'Sharrison@example.com'),
(25, 'V', 'Delen, Van', 'Mvr', 263, 'Onderzoek', '3238BV', 'Vdelen@example.com'),
(26, 'T', 'Galcher', 'Dhr', 264, 'Onderzoek', '3239BV', 'Tgulcher@example.com'),
(27, 'L', 'Leyden, Van', 'Mvr', 282, 'Onderzoek', '3240BV', 'Lleyden@example.com'),
(28, 'A', 'Posson, De', 'Dhr', 261, 'Onderzoek', '3241BV', 'Aposson@example.com'),
(29, 'M', 'Tahiri', 'Mvr', 265, 'Onderzoek', '3242BV', 'Mtahiri@example.com'),
(30, 'J', 'Thompson', 'Dhr', 266, 'Onderzoek', '3243BV', 'Jthompsons@example.com'),
(31, 'L', 'Vos van Steenwijk, D', 'Dhr', 281, 'Onderzoek', '3244BV', 'Lvosvansteemwijk@example.com'),
(32, 'E', 'Westreenen van Tiell', 'Dhr', 280, 'Onderzoek', '3245BV', 'Ewestreenenvantiellandt@example.com'),
(33, 'F', 'Erp, Van', 'Dhr', 260, 'Planning', '3246BV', 'Ferp@example.com'),
(34, 'J', 'Flugi van Aspermont', 'Mvr', 262, 'Planning', '3247BV', 'Jflugiaspermont@example.com'),
(35, 'V', 'Harrison', 'Dhr', 259, 'Project planning', '3248BV', 'Vharrison@example.com'),
(36, 'K', 'Malik', 'Mvr', 258, 'Project planning', '3249BV', 'Kmalik@example.com'),
(37, 'L', 'Sasse van Ysselt, Va', 'Dhr', 257, 'Project planning', '3250BV', 'Lsasseysselt@example.com'),
(38, 'M', 'Schinne, Van', 'Mvr', 251, 'Project planning', '3251BV', 'Mschinne@example.com'),
(39, 'T', 'Wolters', 'Mvr', 256, 'Project planning', '3252BV', 'Twolters@example.com'),
(40, 'R', 'Jansz.', 'Dhr', 277, 'Rapportage', '3253BV', 'Rjansz@example.com'),
(41, 'D', 'Bergh, Van Benthem v', 'Mvr', 268, 'Rapportage', '3254BV', 'Dbergbenthem@example.com'),
(42, 'O', 'Chamberlain', 'Dhr', 275, 'Rapportage', '3255BV', 'Ochambelein@example.com'),
(43, 'L', 'Hesselt van Dinter', 'Dhr', 267, 'Rapportage', '3256BV', 'Lhesseltvandinter@example.com'),
(44, 'D', 'Festetics de Tolna', 'Mvr', 243, 'Secretariaat', '3257BV', 'Dfesteticsdetolna@example.com'),
(45, 'S', 'Sandberg', 'Mvr', 238, 'Secretariaat', '3258BV', 'Ssandberg@example.com'),
(46, 'B', 'Wydenbruck, Von', 'Mvr', 255, 'Secretariaat', '3259BV', 'Bwydenbruckvon@example.com'),
(47, 'E', 'Aslan', 'Dhr', 270, 'Verkoop en Marketing', '3260BV', 'Easlan@example.com'),
(48, 'F', 'Suasso, Lopes', 'Mvr', 270, 'Verkoop en Marketing', '3261BV', 'Fsuassolopes@example.com'),
(49, 'J', 'Thompson', 'Mvr', 270, 'Verkoop en Marketing', '3262BV', 'Jthompson@example.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `incidenten`
--

CREATE TABLE `incidenten` (
  `iid` int(11) NOT NULL,
  `gebruikers_gid` int(11) DEFAULT NULL,
  `configuraties_cid` int(11) DEFAULT NULL,
  `KorteIncidentBeschrijving` varchar(90) DEFAULT NULL,
  `volledigeIncidentBeschrijving` varchar(600) DEFAULT NULL,
  `betrekkingOpAantalGebruikers` int(11) DEFAULT NULL,
  `afhandelTijd` decimal(5,2) DEFAULT NULL,
  `verantwoordelijke` varchar(40) DEFAULT NULL,
  `oorzaken` varchar(30) DEFAULT NULL,
  `oplossingen` varchar(400) DEFAULT NULL,
  `terugkoppeling` varchar(400) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `incidenten`
--

INSERT INTO `incidenten` (`iid`, `gebruikers_gid`, `configuraties_cid`, `KorteIncidentBeschrijving`, `volledigeIncidentBeschrijving`, `betrekkingOpAantalGebruikers`, `afhandelTijd`, `verantwoordelijke`, `oorzaken`, `oplossingen`, `terugkoppeling`, `status`) VALUES
(1, 0, 0, 'Nieuwe medewerker op projectplanning', 'Er is een nieuwe medewerkster aangenomen voor projectplanning. Haar naam is Fee Willemse. Ze begint volgende week maandag. Graag account aanmaken met dezelfde rechten als die van haar collega Sigrid van der Wiel.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Niet van toepassing', 'Gebruiker is aangemaakt.', 'Mail met login gegevens verzonden aan hoofd van afdeling.', 'NULL'),
(2, 0, 0, 'PC loopt soms vast', 'Detail informatie: Na een half uur werken met de pc wordt het scherm zwart en slaat de pc uit. Na 5 minuten kan de pc weer gebruikt worden, maar werkt dan nog ongeveer een kwartier voordat hij weer uitvalt.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'CPU-koeling zal vol met stof.', 'Pc schoongemaakt en getest. Probleem lijkt verholpen.', 'Pc terug geplaatst en aan gebruiker gemeld.', 'NULL'),
(3, 0, 0, 'Secretariaat zonder netwerk', 'Alle pcs van het secretariaat geven aan dat ze niet verbonden zijn met een netwerk.', 6, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Switch defect', 'Switch was defect. Deze is vervangen. Nieuwe switch is voorzien van de juiste configuratie-instellingen.', 'Bij afdeling langs gelopen om te vertellen dat het probleem verholpen is.', 'NULL'),
(4, 0, 0, 'Wachtwoord vergeten', 'Sarisa de Hoogt weet na vakantie haar wachtwoord niet meer.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Niet van toepassing', 'Wachtwoord gereset naar standaard waarden. Optie Change password at next logon aagezet.', 'Gebruiker gebeld met nieuw tijdelijk wachtwoord.', 'NULL'),
(5, 0, 0, 'PC start niet meer op', 'Bij het opstarten van de pc verschijnt de melding "Boot failure. Reboot en Select proper Boot device or Insert Boot Media in selected Boot device".', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Defecte harddisk', 'Hardisk vervangen en standaard image terug gezet.', 'Persoonlijk aan gebuiker doorgegeven dat pc weer werkt.', 'NULL'),
(6, 0, 0, 'Papier zit vast in printer', 'Printer geeft melding "Engine Error please contact administrator". Gebruikers printen nu op printer van financi?le administratie.', 15, '0000-00-00', 'Leverancier printer', 'Tandwiel defect', 'Bij leverancier aangemeld wordt binnen 4 werkdagen vervangen.', 'Gebruikers gemaild dat de printer binnen 4 werkdagen gerepareerd wordt door de leverancier.', 'NULL'),
(7, 0, 0, 'Java update melding', 'Op alle kantoorwerkplekken verschijnt dagelijks meerdere malen de melding dat JAVA geupdate moet worden.', 40, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Oude versie van JAVA was ge?ns', 'Via AD nieuwe versie van JAVA uitgerold.', 'Niet direct teruggemeld aan gebruikers.', 'NULL'),
(8, 0, 0, 'Netwerk is traag bij financiele administratie', 'Het benaderen van data vanaf de servers en vanaf het internet is traag. Het gaat wel, maar heel langzaam.', 4, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Configuratiefout in switch', 'Alle poorten op 1000 mbps full duplex gezet.', 'Oplossing aan afdelingshoofd gemeld.', 'NULL'),
(9, 0, 0, 'Geen oplag capaciteit meer op CAD-server', 'Er kunnen geen bestanden meer opgeslagen worden op de CAD-server. Het openen van bestanden gaat nog wel.', 6, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Geen capaciteit meer op virtue', 'Virtuele disken en partities vergroot.', 'Gemeld aan CAD-tekenaars dat er weer capaciteit is.', 'NULL'),
(10, 0, 0, 'Ontslagen medewerker CAD-afdeling', 'Evert de Vrind, een medewerker van de CAD-afdeling, is op staande voet ontslagen. Zijn account moet per direct afgelosten worden.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Account disabelen', 'Account gedisabeld.', 'Aan HRM doorgegeven dat account uitstaat.', 'NULL'),
(11, 0, 0, 'Verhuizen werkplek', 'Werkplek van secretariaat moet omgezet worden naar de afdeling HRM.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Niet van toepassing', 'Desktop verhuisd, nieuwe patch gemaakt en oude verwijderd. Patch documentatie is bijgewerkt.', 'Gebruiker ging direct op nieuwe plaats aan het werk.', 'NULL'),
(12, 0, 0, 'Voettekst op spreadsheet PDF', 'Gebruiker wilt PDF maken met spreadsheet. In die voettekst moet datum en versie vermeld worden.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Voetteksten in Excel', 'Gebruiker uitgelegd hoe voetteksten in Excel werken. En verteld van de werking van CutePDF. Enkele malen het hele proces gezamenlijk doorlopen. Gebruiker vindt dit lastig.', 'Niet van toepassing', 'NULL'),
(13, 0, 0, 'Netwerk plat. ', 'Netwerk lijkt in zijn geheel niet meer te werken. ', 80, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Patchfout', 'Patchfout heeft netwerkloop veroorzaakt.', 'Gemeld aan secretariaat. Die verzorgen communicatie naar rest van het bedrijf.', 'NULL'),
(14, 0, 0, 'Standaard printer', 'In verband met defecte printer wilt gebruiker dat prints automatisch uit de printer van HRM komen.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Andere standaard printer', 'Remote HRM printer ingesteld als standaard.', 'Niet van toepassing', 'NULL'),
(15, 0, 0, 'Administratie pakket niet toegangelijk', 'Gebruiker kan niet inloggen op administratiepakket.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Gebruiker aanmaken in administ', 'Gebuiker aangemaakt in administratiepakket. Gebruiker had nog geen account.', 'Aan hoofd van de afdeling gemeld dat de gebruiker kan inloggen.', 'NULL'),
(16, 0, 0, 'Vreemde paginas op internet', 'Bij opstarten internetbrowser worden advertenties getoond. Bij weg klikken komen er steeds meer advertenties.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Malware verwijderd.', 'Malware van laptop verwijderd.', 'Gebruiker gemeld en komt laptop weer ophalen.', 'NULL'),
(17, 0, 0, 'Lokaal wachtwoord kwijt', 'Is het wachtwoord van priv?laptop vergeten. Graag wachtwoord verwijderen of instellen op ander wachtwoord.', 1, '0000-00-00', 'MaLoZ - ICT Afdeling', 'Wachtwoord terug gezocht.', 'Met behulp van tool Windows wachtwoord achterhaald.', 'Wachtwoord telefonisch aan gebruiker doorgegeven.', 'NULL'),
(18, 0, 0, 'Wachtwoord vergeten', 'Mark Barney weet na zijn vakantie zijn wachtwoord niet meer.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Niet van toepassing', 'Wachtwoord gereset naar standaard waarden. Optie Change password at next logon aagezet.', 'Gebruiker gebeld met nieuw tijdelijk wachtwoord.', 'NULL'),
(19, 0, 0, 'Bestand met planning van project is weg.', 'Bestand staat niet meer in de map van het project. Bestand is vorige week dinsdag voor het laatst aangevuld en opgeslagen.', 2, '0000-00-00', 'MaTW - ICT Afdeling', 'Bestand gewist', 'Bestand teruggehaald van restore.', 'Gemeld dat bestand terug staat.', 'NULL'),
(20, 0, 0, 'E-mail niet beschikbaar', 'E-mailomgeving is niet te benaderen door kantoor en buitendienst medewerkers.', 80, '0000-00-00', 'Hosting provider', 'DNS-configuratie fout Hosting ', 'Provider gecontact, deze hebben de fout in DNS-server opgelost. Aanpassing duurt 4 uur voordat deze overal doorwerkt.', 'Alle gebruikers een e-mail gestuurd dat het probleem opgelost is.', 'NULL'),
(21, 0, 0, 'Secties in Word', 'Gebruiker wil een pagina in een Word document landscape afdrukken. Paginas voor en na deze pagina dienen portrait te blijven.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Secties gebruiken', 'Met gebruiker meegekeken, de werking van secties uitgelegd en samen ingesteld voor het document.', 'Niet van toepassing.', 'NULL'),
(22, 0, 0, 'Piepjes bij aanzetten laptop', 'Als laptop opstart alleen drie piepjes te horen. Laptop doet verder niets.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Geheugen vervangen', 'Geheugen blijkt defect. Geheugen vervangen. Geheugen wordt RMA gestuurd.', 'Gebruiker heeft laptop direct meegenomen.', 'NULL'),
(23, 0, 0, 'E-mail op priv?tablet', 'Gebruiker wilt zakeljke e-mail op priv?tablet', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Standaard instellingen', 'Telefonisch samen met de gebruiker tablet ingesteld.', 'Niet van toepassing.', 'NULL'),
(24, 0, 0, 'Breuk in laptopscherm', 'Laptop is gevallen. Er zit nu een breuk in scherm.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Tijdelijk andere laptop', 'Data overgezet naar tijdelijke laptop. Deze laptop wordt opgestuurd naar leverancier voor reparatie.', 'Aan gebruiker gemeld dat nieuwe laptop opgehaald kan worden.', 'NULL'),
(25, 0, 0, 'Wachtwoord omzetten', 'Ik wil e-mailinstellingen van een extern e-mailadres op mijn tablet instellen, maar ik weet het wachtwoord niet meer. Account met wachtwoord zit nog wel op laptop van de zaak.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Wachtwoord terug gezocht.', 'Met behulp van wachtwoord tool wachtwoord in Outlook zichtbaar gemaakt.', 'Wachtwoord telefonisch aan gebruiker doorgegeven.', 'NULL'),
(26, 0, 0, 'Buitendienstmedewerkers geen toegang tot urenadministratie', 'Alle buitendienstmedewerkers kunnen na de update niet meer inloggen op de urenadministratie.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'IP-routing niet goed', 'Route naar VPN server toegevoegd aan routing tabel van server.', 'Alle buitendienstmedewerkers gemaild.', 'NULL'),
(27, 0, 0, 'Hoe stel ik de afwezigheidsassistent in?', 'Gebruiker wil tijdens vakantie afwezigheidsassistent aanzetten.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Bedrijfsbeleid uitgelegd', 'Uitgelegd aan gebruiker dat deze optie niet aanstaat in het systeem. Bedrijfsbeleid is om collegas tijdens de vakantie toegang te geven tot je mailbox zodat deze de mail kunnen bijhouden.', 'Niet van toepassing.', 'NULL'),
(28, 0, 0, 'per ongeluk een bestand verwijderd', 'Op de harddisk van mijn laptop heb ik per ongeluk een bestand verwijderd. Dit is een rapportage die ik nog niet had opgeslagen op de server. Hier zit drie weken werk in. Het is belangrijk dat deze terug komt.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Bestand gerecoverd', 'Met tool bestand teruggehaald.', 'Bestand op server gezet en gebruiker gemaild.', 'NULL'),
(29, 0, 0, 'Pc reageert heel traag ook na herstarten', 'Pc is traag. Ook nadat door ICT-afdeling een nieuwe image ge?nstalleerd is.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'BIOS-instellingen goed zetten', 'Na draaien van performace tool bleken BIOS-instellingen geheugen niet goed te staan.', 'Gebruiker laptop terug gegeven.', 'NULL'),
(30, 0, 0, 'Lokaal wachtwoord kwijt', 'Gebruiker is het wachtwoord van priv?laptop vergeten. Graag wachtwoord verwijderen of instellen op ander wachtwoord.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Wachtwoord teruggezocht', 'Met behulp van tool Windows wachtwoord achterhaald.', 'Wachtwoord telefonisch aan gebruiker doorgegeven.', 'NULL'),
(31, 0, 0, 'Vreemde paginas op internet', 'Bij opstarten internetbrowser worden advertenties getoond. Bij wegklikken komen er steeds meer advertenties.', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Malware verwijderd', 'Malware van laptop verwijderd.', 'Gebruiker gemeld en komt laptop weer ophalen.', 'NULL'),
(32, 0, 0, 'Iemand probeert in te loggen op laptop', 'Ik heb het idee dat iemand op afstand probeert in te loggen op mijn laptop. Is het mogelijk om hier iets van te achterhalen?', 1, '0000-00-00', 'MaTW - ICT Afdeling', 'Logfiles bekeken', 'Remote logs bekeken en er probeert inderdaad iemand via remote desktop in te loggen. Remote desktop op laptop is nu uitgezet.', 'Telefonisch aan gebruiker doorgegeven.', 'NULL'),
(33, 0, 0, 'Geen VPN-toegang', 'Buitendienstmedewerkers hebben geen toegang meer tot het netwerk.', 40, '0000-00-00', 'MaTW - ICT Afdeling', 'Interface in router defect', 'WAN-interface van router die werkt als VPN-server defect. Reservekaart geplaatst, opnieuw geconfigureerd en getest.', 'Alle buitendienstmedewerkers gemaild.', 'NULL');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `configuraties`
--
ALTER TABLE `configuraties`
  ADD PRIMARY KEY (`cid`);

--
-- Indexen voor tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gid`);

--
-- Indexen voor tabel `incidenten`
--
ALTER TABLE `incidenten`
  ADD PRIMARY KEY (`iid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `configuraties`
--
ALTER TABLE `configuraties`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;
--
-- AUTO_INCREMENT voor een tabel `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT voor een tabel `incidenten`
--
ALTER TABLE `incidenten`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
