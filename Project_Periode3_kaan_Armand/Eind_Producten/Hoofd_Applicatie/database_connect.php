<?php
$HTN = 2;
//Instructie
    //1. kopieer bovenste regel bovenin de header
    //2. Kopieer onderste regel en zet deze daarboven
    //3. haal de spatie in de sluit tekens weg
    //4. verander HTN in
        //0 voor configuraties
        //1 voor gebruikers
        //2 voor incidenten

    //<?php include('database_connect.php') ? >
    //<?php $HTN = 1; ? >
//einde instuctie


// opbasis van welke pagina geopend wordt wordt een andere nummer toegekent
// en daardoor een andere array gebruikt.

//Huidig Tag Number
$HTTable = array();
    $HTTable[0] = "configuraties";
    $HTTable[1] = "gebruikers";
    $HTTable[2] = "incidenten";
//Einde HTTable

$HTArray = array();

    //configuratieTags
    $HTArray[0] = array();
        $HTArray[0][0] = 'cid';
        $HTArray[0][1] = 'besturingssysteem';
        $HTArray[0][2] = 'type';
        $HTArray[0][3] = 'model';
        $HTArray[0][4] = 'proccessor';
        $HTArray[0][5] = 'werkgeheugen';
        $HTArray[0][6] = 'Videokaart';
        $HTArray[0][7] = 'Harddrive';
        $HTArray[0][8] = 'psu';
        $HTArray[0][9] = 'bouwjaar';
        $HTArray[0][10] = 'licenties';

    //GebruikerTags
    $HTArray[1] = array();
        $HTArray[1][0] = 'gid';
        $HTArray[1][1] = 'voorletter';
        $HTArray[1][2] = 'achternaam';
        $HTArray[1][3] = 'geslacht';
        $HTArray[1][4] = 'intern_telefoon_nummer';
        $HTArray[1][5] = 'afdeling';
        $HTArray[1][6] = 'postcode';
        $HTArray[1][7] = 'email';

    //IncidentenTags
    $HTArray[2] = array();
        $HTArray[2][0] = 'iid';
        $HTArray[2][1] = 'gebruikers_gid';
        $HTArray[2][2] = 'configuraties_cid';
        $HTArray[2][3] = 'KorteIncidentBeschrijving';
        $HTArray[2][4] = 'volledigeIncidentBeschrijving';
        $HTArray[2][5] = 'betrekkingOpAantalGebruikers';
        $HTArray[2][6] = 'afhandelTijd';
        $HTArray[2][7] = 'verantwoordelijke';
        $HTArray[2][8] = 'oorzaken';
        $HTArray[2][9] = 'oplossingen';
        $HTArray[2][10] = 'terugkoppeling';
        $HTArray[2][11] = 'status';
//Einde $HTArray

//////////////////////////////
// begin van de functies
///////////////////////////////

function createConnection() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project_ma_twente";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        //die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";
    return $conn;
}

function postd($y,$HT) {
    $z = "";
    if ($y == 1) {
        $z = array();
        for ($i=1; $i < count($HT) ; $i++) {
            $z[$i] = $_POST[$HT[$i]];
        }
    }
    return $z;
}

function insertArticleIntoTable($HT,$tablename) {
    if ( isset($_POST["add"]) ) {
        //creates a connection with the Database
        $conn = createConnection(); //creating a connection with database
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $addData = postd(1, $HT);

        if (addDataCheck($HT,$addData) ) {
            $sql = "INSERT INTO " . $tablename . "(" . commaSeperatedHT($HT,2) . ")
            VALUES (" . addDataNormal($HT, $addData) . ")";

            if ($conn->query($sql) === TRUE) {
                $message = "New record created successfully";
                echo "<script type='text/javascript'>alert('$message');</script>";
                echo "<script type='text/javascript'>('window.location.reload();')</script>";
            }
        } else {
            $message = "Fill in the whole form";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        $conn->close();
    }
}

function outputFromTable($HT, $tablename) {

    //creates a connection with the Database

    $conn = createConnection();
    if ($conn->connect_error) {
        die("Connection failed:");
    }

    $querysearch = createSearchQuery($HT); //creates the WHERE statement

        $sql = "SELECT " . commaSeperatedHT($HT,1) . " FROM " . $tablename;

    if ($querysearch != "") {
        $sql = $sql . $querysearch;
    } else {
        $sql = $sql;
    }

    $result = $conn->query($sql);
    //Tabel resultaten draaien
    if ($result->num_rows > 0) {

        //output table
        $res = "<table border='1' width='100%'>";
        $res = $res . "<tr>" . thSeperatedHT($HT) . "</tr>";

        //output data of each row
        while($row = $result->fetch_assoc()) {
            $res = $res .
            "<tr>" . tdAndRowSeperatedHT($row,$HT) .
            "</tr>";
        }
        $res = $res . "</table>";
        echo $res;
    } else {
        echo "<table border='1'>
        <tr> <td>0 results</td> </tr>
        </table>";
    }
    $conn->close();
}

function createSearchQuery($HT) {
    $postd = postd(2, $HT);
    $whereState = "";

    if ($postd == null || $postd == 0 || $postd == "") {
        return $whereState;
    }

    for ($i=0; $i < count($postd); $i++) {
        if ($postd[$i] == "" || $postd[$i] == '"%' . '%"') {
            //echo "p $i";
            //echo "<br>check --> " . '"' . '"' . " <-- check <br>" ;
        } else if ($whereState == "") {
            //echo "w $i" . $postd[$i];
            $whereState = " WHERE " . WriteSearchNames($i) . ' LIKE "%' . $postd[$i] . '%"';
        } else {
            $whereState = $whereState . " AND " . WriteSearchNames($i) . ' LIKE "%' . $postd[$i] . '%"';
        }
    }
    return $whereState;
}

function WriteSearchNames($i) {
    if ($i == 0) {
        return $HT[$i];
    } else if ($i == 1) {
        return $HT[$i];
    } else if ($i == 2) {
        return $HT[$i];
    } else if ($i == 3) {
        return $HT[$i];
    } else if ($i == 4) {
        return $HT[$i];
    } else if ($i == 5) {
        return $HT[$i];
    } else if ($i == 6) {
        return $HT[$i];
    } else if ($i == 7) {
        return $HT[$i];
    } else if ($i == 8) {
        return $HT[$i];
    } else if ($i == 9) {
        return $HT[$i];
    } else if ($i == 10) {
        return $HT[$i];
    } else if ($i == 11) {
        return $HT[$i];
    } else if ($i == 12) {
        return $HT[$i];
    }
}

function commaSeperatedHT($HT, $nr) {
    if ($nr == 1) {
        $y = $HT[0];

        for ($i=1; $i < count($HT) ; $i++) {
            $y = $y . "," . $HT[$i];
        }
    }
    if ($nr == 2) {
        $y = $HT[1];

        for ($i=2; $i < count($HT) ; $i++) {
            $y = $y . "," . $HT[$i];
        }

    }
    return $y;
}

function tdAndRowSeperatedHT($row, $HT) {
    $y = "";
    for ($i=0; $i < count($HT) ; $i++) {
        $y = $y . "<td>" . $row[$HT[$i]] . "</td>";
    }
    return $y;
}

function thSeperatedHT($HT) {
    $y = "";
    for ($i=0; $i < count($HT) ; $i++) {
        $y = $y . "<th>" . $HT[$i] . "</th>";
    }
    return $y;
}

function addDataNormal($HT, $addData) {
    $y = "'" . $addData[1] . "'";
    for ($i=2; $i < count($HT); $i++) {
        $y = $y . "," . "'" . $addData[$i] . "'";
    }
    return $y;
}

function addDataCheck($HT,$addData) {
    $y = "";
    for ($i=1; $i < count($HT); $i++) {
        $y = $y . "&&" . $addData[$i] . "<>" . '"'. '"' ;
    }
    return $y;
}

////////////////////////////
// begin actief script
///////////////////////////

// Huidige Tags

if ($HTN == 0) {
    $HT = $HTArray[0];
    $tablename = $HTTable[0];
} else if ($HTN == 1) {
    $HT = $HTArray[1];
    $tablename = $HTTable[1];
} else if ($HTN == 2) {
    $HT = $HTArray[2];
    $tablename = $HTTable[2];
}

for ($i=0; $i < count($HT) ; $i++) {
    $HTR = $HT[$i] . ',';
}

?>
