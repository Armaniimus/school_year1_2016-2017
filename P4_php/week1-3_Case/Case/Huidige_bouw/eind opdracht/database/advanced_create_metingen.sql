DROP DATABASE IF EXISTS p4caseroetmeting_doorArmand;
CREATE DATABASE p4caseroetmeting_doorArmand;
DROP TABLE IF EXISTS autos;
CREATE TABLE autos(
    kenteken VARCHAR(12),
    eigenaar VARCHAR(250),
    merk VARCHAR(30) NOT NULL,
    type VARCHAR(50) NOT NULL,
    PRIMARY KEY (kenteken)
);

INSERT INTO autos (kenteken, eigenaar, merk, type)
VALUES
    ('75-GGR-X3', 'Procé', 'Scania', 'CX Turbo de luxe'),
    ('71-GR-T4', 'Vriesde', 'Iveco', 'AT Turbo heavy load'),
    ('WK-43-XT', 'Ronsen', 'Scania', 'CD BigBag'),
    ('XD-44-Y2', 'Storms', 'Mercedes', 'MXI Greentag'),

    ('7M-GDR-X6', 'Armand', 'Scania', 'CX Turbo de luxe'),
    ('7G-GB-T9', 'Alex', 'Iveco', 'AT Turbo heavy load'),
    ('WT-43-G4', 'Khagan', 'Scania', 'CD BigBag'),
    ('XB-41-B9', 'Leander', 'Mercedes', 'MXI Greentag');

	DROP TABLE IF EXISTS metingen;
    CREATE TABLE metingen(
        metingID INT AUTO_INCREMENT,
        autos_kenteken VARCHAR(12) NOT NULL,
        datumMeting TIMESTAMP NOT NULL DEFAULT now(),
        roetwaarde INT NOT NULL,
        PRIMARY KEY (metingID),
        FOREIGN KEY (autos_kenteken) REFERENCES autos(kenteken)
    );

    INSERT INTO metingen (autos_kenteken, datumMeting, roetwaarde)
    VALUES
    ('75-GGR-X3','2016-08-05 12:19:03', 118),
    ('71-GR-T4', '2016-11-03 18:19:03', 170),
    ('WK-43-XT', '2017-08-07 05:19:03', 300),
    ('XD-44-Y2', '2016-05-17 18:19:03', 90),

    ('7M-GDR-X6','2016-01-04 11:19:03', 118),
    ('7G-GB-T9', '2016-10-05 17:19:03', 170),
    ('WT-43-G4', '2017-01-06 04:19:03', 300),
    ('XB-41-B9', '2016-02-18 17:19:03', 90);
