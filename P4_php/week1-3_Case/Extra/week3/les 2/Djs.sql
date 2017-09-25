DROP DATABASE IF EXISTS DJs;
CREATE DATABASE DJs;

CREATE TABLE Performances(
    ID VARCHAR(4),
    DJNaam VARCHAR(25),
    Waar VARCHAR(15),
    Wanneer DATE,
    Prijs INT
);

INSERT INTO Performances (ID, DJNaam, Waar, Wanneer, Prijs)
VALUES
('Guet', 'David Guetta', 'Amsterdam', '2018-07-12',70),
('Guet', 'David Guetta', 'Londen', '2018-07-15',90),
('Guet', 'David Guetta', 'Berlijn', '2018-07-17',80),
('Guet', 'David Guetta', 'Parijs', '2018-07-22',65),
('Ties', 'Tiesto', 'Arnhem', '2018-07-15',55),
('Ties', 'Tiesto', 'Kopenhagen', '2018-07-17',65),
('Garr', 'Martin Garrix', 'Arnhem', '2018-07-22',58),
('Garr', 'Martin Garrix', 'Kopenhagen', '2018-07-12',50),
('Avic', 'Avicci', 'Arnhem', '2018-05-06',80),
('Avic', 'Avicci', 'Parijs', '2018-05-08',70),
('Avic', 'Avicci', 'Kopenhagen', '2018-05-11',50);
