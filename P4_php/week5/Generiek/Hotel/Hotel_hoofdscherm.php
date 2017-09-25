<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
     <?php include 'Hotel_DB_functions.php';?>
    <link href="Hotel_style.css" rel="stylesheet">

</head>

<body>
    <div class="formulier"> 
        <div class="menu">
           Menu
        </div>
        <div class="deelformulier"> 
            <?php 
                $alleHotelCodes = getAlleHotelCodes(); // DIT IS EEN ARRAY, 1 kolom met alle codes!
                if (isset($_POST['selectedHotelCode'])){
                    $hotelGegevens = getGegevensHotel($_POST['selectedHotelCode']) ;
                } else {
                    $hotelGegevens = getGegevensHotel($alleHotelCodes[1]) ;
                }
                $aantalSterren = $hotelGegevens['aantalsterren'];
            ?>   
            
            <!--   1E FORMULIER Boven kiezen van een $hotelcode -->
            
            <form action="" method="post">
                Kies een hotel:    
                <select type="text" name="selectedHotelCode">
                    <?php
                        foreach ($alleHotelCodes as $hotelCode) {
                            if ($hotelCode ==  $_POST['selectedHotelCode']) {
                                echo "<option value='$hotelCode' selected >$hotelCode</option> ";
                            } else {
                                echo "<option value='$hotelCode'>$hotelCode</option> ";
                            }
                        }
                    ?>
                </select>
                <input type="submit" name="selecteerHotelKnop" value="selecteer hotel">    
            </form>
            <?php   
                if (isset($_POST['selecteerHotelKnop']))  {
                    echo "<br>Deze knop doet nu nog niets. Ben je klaar met je opdracht, maat hier het  filter werkend. Links onder komen dan de gegevens te staan van het hotel dat je gekozen hebt. <br> maak gebruik van generieke functies" ;  
                } else{

                }
            ?>
        </div>

        
        <div class="deelformulier">   <!--   Divje links onder  -->
                
            Divje links onder in dit voorbeeld lee        
        </div>   
    </div>
     <!--   DIV rechts met de gegevens-->
     <div class="content"  >
         <b><u> Maak de functie die deze tabel neerzet generiek!</u></b><br>
        Meetgegevens (alles uit de tabel)<br>
        <?php           
         
            echo getTabelHotelsHTML() ; // Haal alle hotels op
        ?>
    </div>     
    
</body>
</html>