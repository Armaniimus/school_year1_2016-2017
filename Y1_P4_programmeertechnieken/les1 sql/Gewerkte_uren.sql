-- where dienstverband IN ();


DROP DATABASE IF EXISTS Gewerkte_uren_TEMPTEMP;
CREATE DATABASE Gewerkte_uren_TEMPTEMP;
Use Gewerkte_uren_TEMPTEMP;

DROP TABLE IF EXISTS Dienstverbanden;
CREATE TABLE Dienstverbanden(
    ID INT,
    soort VARCHAR(40) NOT NULL,
    PRIMARY KEY(ID)
);

DROP TABLE IF EXISTS Medewerkers;
CREATE TABLE Medewerkers(
    ID INT,
    voornaam VARCHAR(40) NOT NULL,
    tussenvoegsel VARCHAR(10),
    achternaam VARCHAR(40) NOT NULL,
    dienstverband_id INT NOT NULL,
    uurloon DECIMAL(5,2) NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY (dienstverband_id) REFERENCES Dienstverbanden(ID)
);

DROP TABLE IF EXISTS Gewerkte_uren;
CREATE TABLE Gewerkte_uren(
    ID INT,
    datum DATETIME DEFAULT CURRENT_TIMESTAMP,
    medewerker_id INT NOT NULL,
    normale_werkuren INT NOT NULL,
    extra_werkuren INT NOT NULL,
    PRIMARY KEY(ID),
    FOREIGN KEY (medewerker_id) REFERENCES Medewerkers(ID)
);

INSERT INTO Dienstverbanden(ID, Soort)
VALUES
(1,'Vast'),
(2,'Tijdelijk');

INSERT INTO Medewerkers(id, voornaam, tussenvoegsel, achternaam, dienstverband_id, uurloon)
VALUES
(22,'Tom', 'van den', 'Heuvel', 1, '4.90'),
(23,'Johan', NULL, 'Vermeer', 2, '5.60'),
(24,'Ellen', NULL, 'Gerards', 1, '7.25');

INSERT INTO Gewerkte_uren(id, datum, medewerker_id, normale_werkuren, extra_werkuren)
VALUES
(56, '2017-05-01', 22, 6, 1),
(57, '2017-05-01', 23, 4, 0),
(58, '2017-05-02', 24, 8, 2),
(59, '2017-05-03', 23, 5, 1);

-- queries
-- 1 Toon totale werk uren van elke rij in de tabel gewerkte_uren
SELECT ID, datum, medewerker_id, normale_werkuren, extra_werkuren, (normale_werkuren + extra_werkuren) AS 'totale_werkuren'
FROM Gewerkte_uren;

-- 2 selecteer de achternaam van alle medewerkers en hun soort dienstverband
SELECT achternaam, Dienstverbanden.soort
FROM Dienstverbanden, Medewerkers
WHERE Dienstverbanden.id = Medewerkers.dienstverband_id;

-- 3 selecteer alle rijen uit gewerkte uren en toon daarbij de achternaam van de medewerker
SELECT Gewerkte_uren.*, Medewerkers.achternaam
FROM Gewerkte_uren, Medewerkers
WHERE Medewerkers.id = Gewerkte_uren.Medewerker_id;

-- 4.1 Selecteer alle achternamen van medewerkers met een tijdelijk dienstverband zonder subquerie.
SELECT Medewerkers.achternaam
FROM Medewerkers, Dienstverbanden
WHERE dienstverbanden.id = Medewerkers.dienstverband_id AND dienstverbanden.soort = 'Tijdelijk';

-- 4.2 Selecteer alle achternamen van medewerkers met een tijdelijk dienstverband met subquerie.
SELECT Medewerkers.achternaam
FROM Medewerkers
WHERE dienstverband_id in(
    SELECT id
    FROM dienstverbanden
    WHERE soort = 'Tijdelijk');

-- 5 Toon de normale werkuren van de medewerkers met een vast dienstverband.
SELECT voornaam, tussenvoegsel, achternaam, normale_werkuren, Soort
FROM Medewerkers, Gewerkte_uren, Dienstverbanden
WHERE Dienstverbanden.id = Medewerkers.dienstverband_id AND Gewerkte_uren.Medewerker_id = Medewerkers.id AND Dienstverbanden.soort = 'Vast';
