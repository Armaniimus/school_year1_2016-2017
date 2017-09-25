USE p4caseroetmeting;
DROP TABLE IF EXISTS metingen;
CREATE TABLE metingen(
    kenteken VARCHAR(12) NOT NULL,
    datum_meting TIMESTAMP NOT NULL DEFAULT now(),
    eigenaar VARCHAR(250),
    merk VARCHAR(30),
    type VARCHAR(50),
    roetwaarde INT
);

INSERT INTO metingen (kenteken, datum_meting, eigenaar, merk, type, roetwaarde)
VALUES
    ('75-GGR-X3','2016-08-05 12:19:03', 'Procé', 'Scania', 'CX Turbo de luxe', 118),
    ('71-GR-T4', '2016-11-03 18:19:03', 'Vriesde', 'Iveco', 'AT Turbo heavy load', 170),
    ('WK-43-XT', '2017-08-07 05:19:03', 'Ronsen', 'Scania', 'CD BigBag', 300),
    ('XD-44-Y2', '2016-05-17 18:19:03', 'Storms', 'Mercedes', 'MXI Greentag', 90),

    ('7M-GDR-X6','2016-01-04 11:19:03', 'Armand', 'Scania', 'CX Turbo de luxe', 118),
    ('7G-GB-T9', '2016-10-05 17:19:03', 'Alex', 'Iveco', 'AT Turbo heavy load', 170),
    ('WT-43-G4', '2017-01-06 04:19:03', 'Khagan', 'Scania', 'CD BigBag', 300),
    ('XB-41-B9', '2016-02-18 17:19:03', 'Leander', 'Mercedes', 'MXI Greentag', 90);
