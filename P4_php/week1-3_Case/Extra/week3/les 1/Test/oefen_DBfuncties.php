<?php
    function connect() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "p4caseroetmeting";

        $kentekens = [];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
             $resultaat = "geen connectie gemaakt";
        }
        return $conn;
    }

    function getAlleKentekens() {
        $conn = connect();

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

        $conn = connect();
        $sql = "SELECT bprijs FROM artikel WHERE aid = ". $artikelID;
        $result = $conn->query($sql);

        // check of er een resultaat is
            if ($result->num_rows > 0) {
                 //  Je hoeft geen While te maken, er is maar 1 regel uit de tabel..
                $row = $result->fetch_assoc();  // zorg dat het resultaat in de variabele $row komt

                $prijs = $row["bprijs"];
            }
        $conn->close();
        return $prijs;
    };


    function getArtikel($artikelID) {
        // deze functie opent een connectie, en geeft in een array alle gegevens van 1 artikel terug

        $conn = connect();
        $sql = "SELECT * FROM artikel WHERE aid = ". $artikelID;

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {


            $x=0;
            $artikel = [];
            while($row = $result->fetch_assoc()) {
                $artikel[$x] = [];

                for ($y=0; $y<count($row); $y++) {
                    $artikel[$x][$y] = $row['aid'];
                    $y++;
                    $artikel[$x][$y] = $row['anaam'];
                    $y++;
                    $artikel[$x][$y] = $row['kleur'];
                    $y++;
                    $artikel[$x][$y] = $row ['bprijs'];
                }
                $x++;
            }
        } else {
            $meting = NULL;
        }

        $res = '(' . $artikel[0][0];
        for ($i=1; $i<count($artikel[0]); $i++) {
            $res = $res . ', '. $artikel[0][$i];
        }
        $res = $res . ')';
        return $res;
    }




    function updateArtikelPrijs($artikelID, $nieuwePrijs) {
        $conn = connect();
        $sql = "UPDATE artikel SET bprijs = $nieuwePrijs WHERE aid =  $artikelID";

        if ($conn->query($sql)) {
            $melding = "Record succesvol gewijzigt";
        } else {
            $melding = "Record is NIET gewijzigt vanwegen ==>: " . mysqli_error($conn);
        }

        return $melding; // als het fout gaat krijg je een foutmelding, als het goed gaat dan staat in $melding dat het goed is gegaan.
    };
?>
