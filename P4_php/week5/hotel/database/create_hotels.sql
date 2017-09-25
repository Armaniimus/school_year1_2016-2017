DROP DATABASE IF EXISTS hotel;
CREATE DATABASE hotel;
USE Hotel;

DROP TABLE IF EXISTS hotels ;
CREATE TABLE hotels (
    id INT AUTO_INCREMENT, 
    code varchar(20) NOT NULL, 	
    ligging varchar(50),
    gebouwdin SMALLINT,	
    aantalsterren SMALLINT,
    PRIMARY KEY (id)
);

INSERT INTO hotels (code, ligging, gebouwdin, aantalsterren ) 
VALUES 
("Valk_Assen", "A28", 1998, 3),
("Valk_Houten", "A12", 2001, 3),
("Valk_Vianen", "A2", 1996, 4),
("Valk_DenHaag1", "A16",1987, 4),
("Valk_DenHaag2", "A15",2010,  3),
("Valk_Arnhem", "A12", 2007,  4),
("Hilton_Amsterdam", "Centrum", 1958, 5);