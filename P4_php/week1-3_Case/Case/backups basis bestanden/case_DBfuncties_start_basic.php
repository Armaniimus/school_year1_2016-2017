<?php // table in a function  
    function getmetingen() { //BASIC VERSIE 
        // deze functie opent een connectie, haalt alle gegevens op en geeft deze terug in een String. De inhoud van de string staat in een HTML table.
        
        $servername = "localhost"; $username = "root"; $password = "";
        $dbname = "VUL IN";  // jouw databasenaam
        $resultaat = "test"; 
        
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $resultaat = "geen connectie gemaakt";
        } 

        $sql = "SELECT VUL ZELF IN  FROM metingen";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            $resultaat = "<table border = '1'> <tr><th> kenteken</th><th>OS</th><th>roetmeting</th></tr>";
            // Maak hierboven de kolomkoppen aan.
            
            while($row = $result->fetch_assoc()) {
                $resultaat = $resultaat . "<tr><td>". $row["kenteken"]. "</td><td>" . $row["eigenaar"] . "</td><td>" . $row["roetwaarde"]. "</td></tr>";   
            };
            $resultaat =  $resultaat . "</table";
        } else {
             $resultaat = "wel een connectie, tabel is leeg";
        }

        $conn->close();
        return $resultaat;
    };

    function getMeting($kenteken) {  //BASIC VERSIE 
        // deze functie opent een connectie, haalt de meting op van $kenteken . 
        // De gegevens worden teruggegeven in een associatieve array. kenteken, datum_meting, eigenaar, roetwaarde
        
       // vul connectiedeel zelf in

        $sql = "SELECT kenteken, datum_meting, eigenaar, roetwaarde FROM metingen WHERE kenteken = '$kenteken'";
        $result = $conn->query($sql); // we gaan er vanuit dat er maar 1 regel uit de query komt.
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
    
            $meting = array("kenteken"=> $row["kenteken"] , 
                            "datum_meting"=> ....... 
                            "eigenaar"=> .....
                            "roetwaarde"=>.......);
        } else {
            $meting = NULL;
        };

        $conn->close();

        return $meting;
    };


    function updateMeting($kenteken, $nieuweWaarde) {  //BASIC VERSIE 
        // deze functie opent een connectie, wijzigt de roetwaarde van de doorgegeven kenteken in de tabel
        
        $melding = "niets geupdate"; // melding staat standaard op niet gelukt
        
        // vul connectiedeel zelf in

        $sql = "UPDATE metingen SET roetwaarde = ....... WHERE kenteken = ....... " ;
          // let op de '' rond roetwaarde en $kenteken
        echo "<br>SQL: <br>" . $sql . "<br>";     // voor testen
        
        if ($conn->query($sql) === TRUE) {
            $melding = "Record updated successfully";
        } else {
            $melding = "Error updating record: " . $conn->error;
        }

        $conn->close();
        return $melding;
    };



    function getRoetwaarde($kenteken) {  //BASIC VERSIE 
        // deze functie vraagt de roetwaarde van doorgegeven kenteken op uit de tabel. 
    
        
        // vul connectiedeel zelf in

        $sql = "SELECT .......";
        // deze select moet alle velden van metigen opvragen WHERE kenten gelijk is aan aan $kenteken.
        // let op de '' rond $kenteken
        
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                
                $row = //... je moet hier nog iets meet fetch... 

                    $roetwaarde = $row["roetwaarde"];   
            } else {
                 $roetwaarde = 0;
            }

            $conn->close();
        return // zorg dat hier de roetwaarde wordt teruggestuurd;
    }

    function toonVersie(){    
        return "Basic versie";
    }


?>  
