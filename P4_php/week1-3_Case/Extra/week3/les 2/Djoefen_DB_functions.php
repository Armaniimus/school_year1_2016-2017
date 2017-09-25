<?php

$serverInfo = ["localhost", "root", "", "djs"];//Servername, Username, password, dbname
$tableNames = ['performances'];
$collomNames = [];
for ($i=0; $i<count($tableNames); $i++) {
    $collomNames[$i] = getCollomNames($tableNames[$i]);
}

function connect() {

    //insert the global variables inside this function
    global $serverInfo;

    //Create connection
    $conn = new mysqli($serverInfo[0], $serverInfo[1], $serverInfo[2], $serverInfo[3]);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }

    return $conn;
}

function getCollomNames($tableName) {

    //gets collom names from the database
    $conn = connect();
    $sql = "SHOW COLUMNS FROM " . $tableName;
    $result = $conn->query($sql);

    //outputs data if information was found
    $colArray = array();
    if ($result->num_rows > 0) {
        $i = 0;

        //writes names 1 by 1 into the variable $colarray
        while($row = $result->fetch_assoc()) {
            $colArray[$i] = $row['Field'];
            $i++;
        }

        $conn->close();
        return $colArray;
    }
}

function getAlleDJs($tableName, $collomNames) {

    //gets data from database
    $result = selectFromDB($tableName, $collomNames);

    //starts generatign table if there is available data;
    if ($result->num_rows > 0) {

        //opens table;
        $res = "<table border='1' width='100%'>";

        //generates the tableheads 1 by 1
        $tableHeads = "";
        for ($i=0; $i<count($collomNames); $i++) {
            $tableHeads = $tableHeads . "<th>" . $collomNames[$i] . "</th>";
        }
        $res .= "<tr>" . $tableHeads . "</tr>";

        //generates the tablerows 1 by 1;
        while($row = $result->fetch_assoc()) {

            //generates a table row with data
            $tableMainRow = "";
            for ($i=0; $i<count($collomNames) ; $i++) {
                $tableMainRow .= "<td>" . $row[$collomNames[$i]] . "</td>";
            }
            $res .= "<tr> $tableMainRow </tr>";
        }
        //closes table
        $res .= "</table>";

    } else {

        //writes a alternative table
        $res = "<table border='1'>
        <tr> <td>0 results</td> </tr>
        </table>";
    }
    return $res;
}

function selectFromDB($tableName, $collomNames) {

    //creates a connection with the Database
    $conn = connect();

    //Generates SELECT sql part
    $commaSeperatedCollomNames = $collomNames[0];
    for ($i=0; $i<count($collomNames); $i++) {
        $commaSeperatedCollomNames .= ", " . $collomNames[$i];
    }

    //Generates WHERE statement
    $where = createWhere($collomNames);

    //combines SELECT $tableName and WHERE parts to form sql query
    $sql = "SELECT $commaSeperatedCollomNames
    FROM $tableName
    $where";

    //saves query results
    $result = $conn->query($sql);

    $conn->close();
    return $result;
}

function createWhere($collomNames) {

    //extracts data from $_POST
    $extractedPost = array();
    for ($i=0; $i<count($collomNames); $i++) {
        if (isset($_POST[$collomNames[$i] ] ) ) {
            $extractedPost[$i] = $_POST[$collomNames[$i] ];
        } else {
            $extractedPost[$i] = '';
        }
    }

    //Generates a where statement as long as the array $selectdata is long
    $whereState = "";
    for ($i=0; $i<count($extractedPost); $i++) {
        //echo $extractedPost[$i];
        if (isset($extractedPost[$i]) ) {
            //if there is no data inside $selectdata then add nothing to the where statement.
            if ($extractedPost[$i] == "") {

            //else if there is Data inside $selectdata but no where statement yet then
            //(set the where statement and add the first condition)
            } else if ($extractedPost[$i] <> "" && $whereState == "") {
                $whereState = " WHERE " . $collomNames[$i] . ' LIKE "%' . $extractedPost[$i] . '%"';
            //else if there is data and an already existing where statement
            } else {
                $whereState .= " AND " . $collomNames[$i] . ' LIKE "%' . $extractedPost[$i] . '%"';
            }
        }
    }
    return $whereState;
}

function getIndividualAtribute($tableName, $collomName) {

    //Perform Query
    $conn = connect();
    $selectData =
    "SELECT DISTINCT $collomName AS result
    FROM $tableName";
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
function createDropdownSelect($tableName, $collomName) {
    $atribute = getIndividualAtribute($tableName, $collomName);

        //Generates a select
        $result =
        "<form action='' method='POST'>
        Kies een naam: <select name='$collomName'>";
        foreach ($atribute as $atr) {
            if (isset($_POST['select'] )  AND $_POST[$collomName] == $atr) {
                $result .= "<option value='$atr' selected> $atr</option>";
            } else {
                $result .= "<option value='$atr'> $atr</option>";
            }
        }
        $result .=
        "</select>
        <input type='submit' name='select' value='select'>
        </form>";

    return $result;
}
?>
