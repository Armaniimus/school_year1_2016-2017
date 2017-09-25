<?php // table in a function  
  function getAlleKentekens() {  // Dit is als voorbeeld
        $servername = "localhost"; $username = "root"; $password = "";
        $dbname = "p4caseroetmeting";  // jouw databasenaam
        $kentekens = [];
         
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $resultaat = "geen connectie gemaakt";
        } 

        $sql = "SELECT kenteken FROM metingen";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
          
            while($row = $result->fetch_assoc()) {
                array_push( $kentekens,$row["kenteken"] );
            };          
        } 

        $conn->close();
        return $kentekens;
    }


    function getArtikelPrijs($artikelID) {  
        // deze functie opent een connectie, vraagt de prijs opo en geeft deze terug
       
        // open de connectie
        
        // maak de juiste SQL, test dee in phpmyadmin
        
        // check of er een resultaat is
            if ($result->num_rows > 0) {
                 //  Je hoeft geen While te maken, er is maar 1 regel uit de tabel..
                $row = $result->fetch_assoc();  // zorg dat het resultaat in de variabele $row komt
    
                $prijs = $row["bprijs"]);
      
    
        // dit is de kern ...

        return $prijs;
    };


    function getArtikel($artikelID) {  
        // deze functie opent een connectie, en geeft in een array alle gegevens van 1 artikel terug 
        
        // open de connectie
        
        // maak de juiste SQL, test dee in phpmyadmin
        
        
        // check of er een resultaat is
        
        //  Je hoeft geen While te maken, er is maar 1 regel ut de tabel..
        
        // zorg dat het resultaat van de query in de variabele $row komt
        
            if ($result->num_rows > 0) {
               $row = $result->fetch_assoc();
    
            $meting = array("kenteken"=> $row["kenteken"] , 
                            "datum_meting"=>  ....., 
                            "eigenaar"=> ......... , 
                            .................);
            } else {
                $meting = NULL;
            };

    
        // dit is de kern ...
        $artikel = array( "klanten_kid"=> $row["klanten_kid"] , 
                          "anaam"=>       $row["anaam"] , 
                          "kleur"=>       $row["kleur"] , 
                          "bprijs"=>      $row["bprijs"]);

        
        
        return $artikel;
    };




    function updateArtikelPrijs($artikelID, $nieuwePrijs) {  
        // deze functie opent een connectie, wijzigt de artikelprijs
        
     
        return $melding; // als het fout gaat krijg je een foutmelding, als het goed gaat dan staat in $melding dat het goed is gegaan.
    };



?>  
