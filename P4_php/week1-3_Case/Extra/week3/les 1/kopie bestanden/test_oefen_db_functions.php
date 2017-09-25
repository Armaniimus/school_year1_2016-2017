<?php    // testen van de functies in db_functions.php

    include('oefen_DBfuncties.php');
    
    // oefen 1: toon een artikelprijs

    $artkelID = 4;
    $artikelprijs = <roep hier de functie aan.... 
    
    echo ('de prijs van artikel ..<artikelID>....is... ');
        
   

    // oefen 2: haal alle gegevens op, ze komen terug in een associatieve array
    
     echo '<br><br> test2 <br>';
    
    $artkelID = 2;
    $artikel = getArtikel($artikelID);  // is dus een associatieve array
    
    // toon hier de gegevens van $artikel

    echo '<br><br> test3 (update) <br>';

    $artkelID = 3;
    // 3.1 vraag eerst de huidige bprijs op en echo artikelID en bprijs door de functie getArtikelPrijs aan te roepen
    
    // 3.2 wijzig de prijs van artikelID 3
    echo udatePrijs($artkelID); // je gebruikt echo omdat je een melding terugkrijgt of de update gelukt is.
    

    
?>