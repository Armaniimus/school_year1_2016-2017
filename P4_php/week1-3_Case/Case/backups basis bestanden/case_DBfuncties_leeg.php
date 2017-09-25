<?php // table in a function  
    function getmetingen() { // Leeg
        // deze functie opent een connectie, haalt alle gegevens op en geeft deze terug in een String. De inhoud van de string staat in een HTML table.
      
        
        $resultaat = "tabel moet hier gevuld worden"; 
       
        return $resultaat;
    };

    function getMeting($kenteken) {  // leeg
        // deze functie opent een connectie, haalt de meting op van $kenteken . 
        // De gegevens worden teruggegeven in een associatieve array. kenteken, datum_meting, eigenaar, roetwaarde
         
        $meting = array(  "kenteken"=> "75-GGR-X3" , 
                          "datum_meting"=> "2016-08-05 12:19:03"
                          "eigenaar"=> "Platjes"
                          "roetwaarde"=>7);
     
        return $meting;
    };


    function updateMeting($kenteken, $nieuweWaarde) {  
        // deze functie opent een connectie, wijzigt de roetwaarde van de doorgegeven kenteken in de tabel met de $nieuweWaarde
        
        $melding = "niets geupdate"; // melding staat standaard op niet gelukt
            
        return $melding;
    };



    function getRoetwaarde($kenteken) {  
        // deze functie vraagt de roetwaarde van doorgegeven kenteken op uit de tabel. 
        // vul connectiedeel zelf in


           $roetwaarde = 0;
        
        return $roetwaarde
    }
   
    function toonVersie(){    
        return "Zelf doen versie advanced";
    }

    
?>  
