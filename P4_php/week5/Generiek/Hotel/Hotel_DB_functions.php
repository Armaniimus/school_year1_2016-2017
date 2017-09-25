<?php

function getAlleHotelCodes(){

    // deze functie levert een array met 1 kolom, met daarin de codes van alle hotels
    // deze array wordt opgebouwd in de variabele $resultaatArray

    $servername = "localhost"; $username = "root";   $password = "";     $dbname = "hotel" ;
    $resultaatArray = [];  // maak een lege array aan, daar gaan de hotelcodes in

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT DISTINCT code FROM hotels";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // Binnen de while hebben we steeds 1 regel uit de tabel.
            // We zetten in dit geval alleen 'code' over in de array $resultaatArray.

            array_push($resultaatArray, $row["code"]);
        }
    } else {
        // als er geen regels in de tabel zaten dan doen we verder niets.
    }
    $conn->close();
    return $resultaatArray;
}

function getGegevensHotel($hotelCode){

    // deze functie levert een associatieve array met 1 rij, met daarin de gegevens van één hotel
    // deze array wordt opgebouwd in de variabele $resultaatArray

    $servername = "localhost"; $username = "root";   $password = "";     $dbname = "p4caseroetmeting" ;
    $hotelGegevens = [];  // maak een lege array aan, daar gaan de hotelcodes in

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM hotels WHERE code = '$hotelCode' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
            // GEEN while want maar 1 regel!
            // een associatieve array ziet er bijvoorbeeld zo uit:
            // $hotelGegevens = array ( "code"=> "Valk_Assen" ,
            //                          "ligging"=> "A28",
            //                          "gebouwdin"=> 1998,
            //                          "aantalsterren"=>3 );


              $hotelGegevens = array("code"=> $row["code"] ,
                                     "ligging"=> $row["ligging"] ,
                                     "gebouwdin"=> $row["gebouwdin"] ,
                                     "aantalsterren"=>$row["aantalsterren"]);
    }

    $conn->close();
    return $hotelGegevens;  // return de gegeven van één hotel in een Array!
}


function getTabelHotelsHTML(){

    // deze functie levert een HTML-table met alle gegevens uit de tabel hotels
    // deze HTMLtabel wordt opgebouwd in de variabele $resultaatString

    // in een latere les wordt deze functie in 2 stukken geknipt en generiek gemaakt.


    $servername = "localhost"; $username = "root";   $password = "";
    $dbname = "p4caseroetmeting" ;

    $resultaatString = "";  // maak een lege STRING , daar gaan alle gegevens in.


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, code, ligging, gebouwdin, aantalsterren FROM hotels";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        // bouw in $resultaatString de HTML-table op.

        // eerst de kolomkoppen
        $resultaatString = "<table border = '1'>
                                <tr>
                                    <th> code </th>
                                    <th> ligging </th>
                                    <th> gebouwdin </th>
                                    <th> aantalsterren </th>
                                </tr>";


        while($row = $result->fetch_assoc()) {
            // Binnen de while hebben we steeds 1 regel uit de tabel.
            // We zetten iedere regel over in $resultaatString.


            $resultaatString = $resultaatString .
                    "<tr> <td>" . $row['code']   . " </td>
                          <td>" . $row['ligging'] . " </td>
                          <td>" . $row['gebouwdin'] . " </td>
                          <td>" . $row['aantalsterren']. " </td>
                    </tr>";
        }
        // afsluiten HTML-table (NA DE WHILE)

        $resultaatString = $resultaatString . "</table>";

    } else {
        // als er geen regels in de tabel zaten dan doen we verder niets.
    }
    $conn->close();

    return $resultaatString;
}


 function updateHotel($hotelCode, $sterren) {
        // deze functie opent een connectie, wijzigt aantal sterren van hotel

        $melding = "niets geupdate"; // melding staat standaard op niet gelukt

        $servername = "localhost"; $username = "root"; $password = "";
        $dbname = "p4caseroetmeting";  // jouw databasenaam

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $melding = "geen connectie gemaakt update niet gelukt";
        }

        $sql = "UPDATE hotels SET aantalsterren ='$sterren' WHERE code = '$hotelCode'" ;

        if ($conn->query($sql) === TRUE) {
            $melding = "Record updated successfully ". $sql;
        } else {
            $melding = "Error updating record: " . $conn->error;
        }

        $conn->close();
        return $melding;
    };

?>
