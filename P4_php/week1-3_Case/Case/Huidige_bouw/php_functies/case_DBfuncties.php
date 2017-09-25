<?php // table in a function

function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "p4caseroetmeting";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
       die("connection failed: " . $conn->connect_error);
    }
    //echo "connected successfully";
    return $conn;
}

function getIndividualAtribute($tableName, $collomName) {

    //Perform Query
    $conn = connect();
    $selectData =
    'SELECT ' . $collomName . ' AS "result"' .
    ' FROM ' . $tableName;
    $result = $conn->query($selectData);

    //if there are results then continue
    if ($result->num_rows > 0) {

        //sets $i and resAray variables
        $i = 0;
        $resArray = [];

        //writes names 1 by 1 into the variable $resArray
        while($row = $result->fetch_assoc()) {
            $resArray[$i] = $row['result'];
            $i++;
        }

        $conn->close();
        return $resArray;
    }
}

function selectData($select) {
    $conn = connect();
    $result = $conn->query($select);

    if ($result->num_rows > 0) {
        // output data of each row
        return $result;
    } else {
        return "";
    }
}

function getmetingen() {
    // deze functie opent een connectie, haalt alle gegevens op en geeft deze terug in een String. De inhoud van de string staat in een HTML table.
    $select =
        "SELECT autos.kenteken, eigenaar, merk, type, datumMeting, roetwaarde
        FROM `metingen`
        INNER JOIN `autos`
        ON metingen.autos_kenteken = autos.kenteken";

    //Handels select request
    $result = selectData($select);

    $table =
    "<table border='1'>
    <tr>
        <th>Kenteken</th>
        <th>Eigenaar</th>
        <th>Merk</th>
        <th>Type</th>
        <th>Datum Meting</th>
        <th>Roetwaarde</th>
    </tr>";

    while($row = $result->fetch_assoc()) {
        $table = $table .
        "<tr>
            <td> " . $row["kenteken"]. "</td>
            <td> " . $row["eigenaar"] . "</td>
            <td> " . $row["merk"] . "</td>
            <td> " . $row["type"] . "</td>
            <td> " . $row["datumMeting"] . "</td>
            <td> " . $row["roetwaarde"] . "</td>
        </tr>";
    }
    $table .= "</table>";
    return $table;
}

function getMeting($kenteken) {
    // deze functie opent een connectie, haalt de meting op van $kenteken .
    // De gegevens worden teruggegeven in een associatieve array. kenteken, datum_meting, eigenaar, roetwaarde

    $select =
        "SELECT autos.kenteken, eigenaar, merk, type, datumMeting, roetwaarde
        FROM `metingen`
        INNER JOIN `autos`
        ON metingen.autos_kenteken = autos.kenteken
        WHERE kenteken = " . "'" . $kenteken . "'";

    $result = selectData($select);
    while($row = $result->fetch_assoc()) {

        $meting = array(
            "kenteken"=> $row["kenteken"] ,
            "datum_meting"=> $row["datumMeting"],
            "eigenaar"=> $row["eigenaar"],
            "roetwaarde"=> $row["roetwaarde"]
        );
    }
    return $meting;
}

function updateMeting($kenteken, $nieuweWaarde) {
    // deze functie opent een connectie, wijzigt de roetwaarde van de doorgegeven kenteken in de tabel met de $nieuweWaarde

    $melding = "niets geupdate"; // melding staat standaard op niet gelukt
    return $melding;
}

function getRoetwaarde($kenteken) {
    // deze functie vraagt de roetwaarde van doorgegeven kenteken op uit de tabel.
    // vul connectiedeel zelf in
    $select =
    "SELECT roetwaarde
    FROM `metingen`
    INNER JOIN `autos`
    ON metingen.autos_kenteken = autos.kenteken
    WHERE kenteken = " . "'" . $kenteken . "'";

    $result = selectData($select);

    $roetwaarde = "";

    while($row = $result->fetch_assoc()) {

        $roetwaarde .= $row["roetwaarde"];
    }
    return $roetwaarde;
}

function toonVersie() {
    return "Armand super delux V1";
}

function updateRoetWaarde($tableName, $set, $where) {
    $conn = connect();

    $sql =
    "UPDATE $tableName
    SET $set
    WHERE $where";

    if ($conn->query($sql) === TRUE) {
        $sql = "Record Succesvol geupdate <br>";
    } else {
        $sql = "Record is niet geupdate " . $conn->error;
    }

    return $sql;
}

function updateWhere($whereKey, $whereValue) {

    //where = this value
    $where = "$whereKey = '$whereValue'";
    return $where;
}

function updateSet($setKeyColumn, $setNewValue) {

    //changes
    $set = "$setKeyColumn = '$setNewValue'";
    return $set;
}

?>
