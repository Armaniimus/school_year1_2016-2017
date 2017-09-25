USE p4caseroetmeting;

DROP TABLE IF EXISTS artikel;
CREATE TABLE artikel
(
aid INTEGER NOT NULL UNIQUE,
anaam varchar(12) ,
kleur varchar(12),
bprijs decimal(5,2)
);

INSERT INTO artikel
(aid, anaam,kleur, bprijs)
VALUES
(1, "Ipad3Z", "zwart", 230),
(2, "Ipad3W", "wit",225),
(4, "Ipad2Zi", "zilver",199),
(5, "LG3GZi", "zilver",190),
(6, "SamsungGearHZ", "zwart",225),
(7, "AM_VRZ", "zwart",65);
