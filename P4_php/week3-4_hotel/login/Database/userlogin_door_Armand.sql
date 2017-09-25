DROP DATABASE IF EXISTS userlogin_door_Armand;
CREATE DATABASE userlogin_door_Armand;
DROP TABLE IF EXISTS users;

CREATE TABLE users(
    userid INT AUTO_INCREMENT,
    username VARCHAR(30),
    password VARCHAR(128),
    PRIMARY KEY (userid)
);

INSERT INTO users (username, password)
VALUES
("Bob" , SHA2("1234",512)),
("Proce" , SHA2("Proce",512)),
("Root" , SHA2("root",512)),
("Bob the builder" , SHA2("EvErYtHiNgIsAwSoMe",512)),
("Batman" , SHA2("EvErYtHiNgIsCoOlWhEnYoUfOlOwThErUlEs",512)),
("The Villain" , SHA2("EvErYtHiNgIsAwSoMe",512));


SELECT * FROM `users` WHERE password = SHA2('1234',512);
SELECT * FROM `users` WHERE password = '1234';
SELECT password FROM `users` WHERE username = "bob";
SELECT * FROM `users` WHERE password = SHA2("EvErYtHiNgIsAwSoMe",512);
