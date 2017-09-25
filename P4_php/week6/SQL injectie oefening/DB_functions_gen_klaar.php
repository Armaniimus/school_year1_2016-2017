<?php


function readTableToArray($servername, $username, $password, $dbname, $sql){

    // deze functie levert een associatieve array table met alle kolommen die gevraagd worden via $sql
    // Parameters: bijvoorbeeld $servername = "localhost"; $username = "root";   $password = "";
    // bijv: $dbname = "p4caseroetmeting" ;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo $sql;

    $html = $conn->query($sql);
    $array = [] ;  // Creeer een lege array, waar je regels uit de tabel kunt toevoegen
    if ($html->num_rows > 0) {
        while($oneRow = $html->fetch_assoc()) {
            array_push($array,$oneRow);
            // print_r($row);  // voor testdoeleinden
        }
    } else {
        // als er geen regels in de tabel zaten dan doen we verder niets, de Else kan dus weg.
    }
    $conn->close();
    return $array;
}

function arrayToHTMLTable($array){

    // deze functie zet een assosiatieve array om in een HTML Table
    // deze HTML table zit in de return;

    // examle gebruikt:
    // https://stackoverflow.com/questions/13583367/get-column-names-and-values-in-for-loop-php
    // http://php.net/manual/en/function.key.php
    // http://anyexample.com/programming/php/php_mysql_example__display_table_as_html.xml

    // in plaats van echo zet je alle tekst in een variabele met bijv. de naam $htmltable, Die stuur je terug met return.
    $htmltable = "<table border = '1' <tr> ";
    if ($array != [] )
    {
        // kolomkoppen
        foreach ($array[0] as $key=>$value) {
            $htmltable = $htmltable . "<th> " . $key  ;
        }

        // de inhoud
        foreach ($array as $rijtje) {
            $htmltable = $htmltable . " <tr>";
            foreach ($rijtje as $key=>$value) {
                    $htmltable = $htmltable . "<td>" . "  " . $value ;
            }
            $htmltable = $htmltable . " </tr>";
        }

    } else {
        $htmltable = $htmltable . "tabel is leeg... ";

    }
    $htmltable = $htmltable . "</td></tr></table>";
    return $htmltable;
}

function insertupdate($servername, $username, $password, $dbname, $sql) {
        // deze functie opent een connectie, voert een SQL commando uit en geeft geen data terug.

        $melding = "niets uitgevoerd"; // melding staat standaard op niet gelukt

        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // $html = $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
            $melding = "conn gelukt: ". $sql;
        } else {
            $melding = "conn niet gelukt: " . $conn->error . " br "  .  $sql;
        }
        $conn->close();

        return $melding;
    };



?>
