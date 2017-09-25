SELECT autos.kenteken, eigenaar, merk, type, datumMeting, roetwaarde
	FROM `metingen`
		INNER JOIN `autos`
        	ON metingen.autos_kenteken = autos.kenteken


-- USED in php

-- SELECT autos.kenteken, eigenaar, merk, type, datumMeting, roetwaarde
--	FROM `metingen`
--		INNER JOIN `autos`
--        	ON metingen.autos_kenteken = autos.kenteken
--            	WHERE autos.kenteken = '75-GGR-X3'
