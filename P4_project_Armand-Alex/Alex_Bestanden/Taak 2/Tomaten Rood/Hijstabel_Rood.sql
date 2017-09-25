DROP TABLE IF EXISTS Rood_FO_Hijstabel;
CREATE TABLE Rood_FO_Hijstabel (
	Opdrachtnummer INT,
	Volgnummer INT,
	Datum_Opgesteld DATETIME,
	Hoofdgiek_Lengte DOUBLE, 
	Mech_Sectie_Gieklengte DOUBLE,
	Hulpgiek_Lengte DOUBLE,
	Hoofdgiek_Giekhoek DOUBLE,
	Hulpgiek_Giekhoek DOUBLE,
	Hijskabel_Aantal_Parten INT,
	Zwenkhoek DOUBLE,
	Eigen_Massa_Ballast DOUBLE,
    Toelaatbare_Bedrijfslast DOUBLE,
	LMB_In_Werking DOUBLE,
	Proeflast DOUBLE,
	Akkoord BOOLEAN, 
	PRIMARY KEY (volgnummer)
);
