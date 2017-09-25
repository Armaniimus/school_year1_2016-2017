USE project;
DROP TABLE IF EXISTS incidenten;
CREATE TABLE incidenten(
    iid INT AUTO_INCREMENT,
    gebruikers_gid INT,
    configuraties_cid INT,
    KorteIncidentBeschrijving VARCHAR(90),
    volledigeIncidentBeschrijving VARCHAR(600),
    betrekkingOpAantalGebruikers INT,
    afhandel_tijd DECIMAL(4,2),
    verantwoordelijke VARCHAR(40),
    oorzaken VARCHAR(30),
    oplossingen VARCHAR(400),
    terugkoppeling VARCHAR(400),
    status VARCHAR(12),
    PRIMARY KEY (iid)
);
