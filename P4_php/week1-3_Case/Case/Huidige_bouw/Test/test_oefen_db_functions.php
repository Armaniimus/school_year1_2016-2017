<?php
// testen van de functies in db_functions.php
    include('oefen_DBfuncties.php');

    // oefen 1: toon een artikelprijs
    $artikelID = 4;
    $artikelprijs = getArtikelPrijs($artikelID);

    echo 'test1 <br>';
    echo ('de prijs van artikel' . $artikelID . ' is ' . $artikelprijs);



    // oefen 2: haal alle gegevens op, ze komen terug in een associatieve array
    $artikelID = 2;
    $artikel = getArtikel($artikelID);

    echo '<br><br> test2 <br>';
    echo 'het volledige artikel is ' . $artikel;


    // toon hier de gegevens van $artikel
    $artikelID = 4;
    $nieuwePrijs = 150.00;
    // 3.1 vraag eerst de huidige bprijs op en echo artikelID en bprijs door de functie getArtikelPrijs aan te roepen

    // 3.2 wijzig de prijs van artikelID 4
    echo '<br><br> test3 (update) <br>';
    echo updateArtikelPrijs($artikelID, $nieuwePrijs); // je gebruikt echo omdat je een melding terugkrijgt of de update gelukt is.
?>
