<?php
//-- version number 1.7 (inprogress) --//

//-- Start global variables                  --//
//-- Dependency connect(), getColumnNames(); --//
//---------------------------------------------//
$serverInfo = ["localhost", "root", "", "project_over_de_rhein"]; //Servername, Username, password, dbname
    //generates table information
    $tableNames = getTableNames();
    $columnNames = [];
    for ($i=0; $i<count($tableNames); $i++) {
        for ($ii=0; $ii<count($tableNames[$i]); $ii++) {
            $columnNames[$i] = getColumnNames($tableNames[$i]);
        }
    }

//-- Start functions --//
//---------------------//

//Essential functions
//------------------------

//F01 D:none; S(G)
//Status: Good
//Function: Create connection with the specified database
//Variables input:
    //expects the global variable serverInfo to be set as a array with a 4 positions
        //Servername, Username, password, dbname
function connect() {

    //insert the global variables inside this function
    global $serverInfo;

    //Create connection
    $conn = new mysqli($serverInfo[0], $serverInfo[1], $serverInfo[2], $serverInfo[3]);

    //Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

//F02; D:connect(); S(G)
//Status: Good
//Function: returns tablenames out of the Database specified
//Variables input:
    //expects the global variable serverInfo to be set as a array with a 4 positions
        //Servername, Username, password, dbname
    //needs the connect function
function getTableNames() {

    //Gets tablenames from the database
    Global $serverInfo;
    $conn = connect();
    $sql = "SHOW TABLES FROM " . $serverInfo[3];
    $result = $conn->query($sql);

    //Outputs data if information was found
    $tableArray = [];
    if ($result->num_rows > 0) {

        //Writes found data into an array
        $i = 0;
        while ($row = $result->fetch_assoc() ) {
            $tableArray[$i] = $row["Tables_in_" . $serverInfo[3] ];
            $i++;
        }
        return $tableArray;
    }
}

//F03; D:connect(); S(G)
//Status: Good
//Function: returns columnnames out of the table specified
//Variables input:
    //$tableName(expects a string of a sql tablename)
function getColumnNames($tableName) {

    //Gets column names from the database
    $conn = connect();
    $sql = "SHOW COLUMNS FROM " . $tableName;
    $result = $conn->query($sql);

    //Outputs data if information was found
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

//Database functions
//------------------------

//F04; D: none; S(G)
//Status: Good
//FunctionDescription: With this function you can choose which column names you want inside an array
//Variables input:
    //$columnNames(expects a array of strings with a sql column names in them)
    //$binaryCode(expects a string with the numbers 0123 in them)
        //this will be converting into a array and gets read out 1 by 1
            //0 means this data will NOT be used;
            //1 means this data will be used;
            //2 means this data and everything behind it will be used;
            //3 means this data and everything behind it will NOT be used;
function selCollBinary($columnNames, $binaryCode) {
    $bC = str_split($binaryCode);
    $collN = [];
    $y = 0;

    for ($i=0; $i<count($columnNames); $i++) {
        if ($bC[$i] == 0) {

        }
        else if ($bC[$i] == 1) {
            $collN[$y] = $columnNames[$i];
            $y++;
        }
        else if ($bC[$i] == 2) {
            for ($i=$i; $i<count($columnNames); $i++) {
                $collN[$y] = $columnNames[$i];
                $y++;
            }
        }
        else if ($bC[$i] == 3) {
            for ($i=$i; $i<count($columnNames); $i++) {
            }
        }
    }
    return $collN;
}

//F05; D:none; S(G)
//Status: Good;
//FunctionDescription: generates the where statment from $_POST and given variable columnNames
//Varables input:
    //$columnNames(expects a array of strings with a sql column names in them)
function createWhere($columnNames) {

    //extracts data from $_POST
    $extractedPost = [];
    for ($i=0; $i<count($columnNames); $i++) {
        if (isset($_POST[$columnNames[$i] ] ) ) {
            $extractedPost[$i] = $_POST[$columnNames[$i] ];
        } else {
            $extractedPost[$i] = '';
        }
    }

    //Generates a where statement as long as the array $selectdata is long
    $whereState = "";
    for ($i=0; $i<count($extractedPost); $i++) {
        if (isset($extractedPost[$i]) ) {
            //if there is no data inside $selectdata then add nothing to the where statement.
            if ($extractedPost[$i] == "") {

            //else if there is Data inside $selectdata but no where statement yet then
            //(set the where statement and add the first condition)
            } else if ($extractedPost[$i] <> "" && $whereState == "") {
                $whereState = " WHERE " . $columnNames[$i] . ' LIKE "%' . $extractedPost[$i] . '%"';

            //else if there is data and an already existing where statement
            } else {
                $whereState .= " AND " . $columnNames[$i] . ' LIKE "%' . $extractedPost[$i] . '%"';
            }
        }
    }
    return $whereState;
}

//F06; D:connect(); S(G)
//Status: Good
//Function: Returns a 2 dimensional array with strings from SQL database.
//Varables input:
    //$tableName(expects an string with a sql tableName)
    //$columnNames(expects a array of strings with a sql column names in them)
function selectFromDB($tableName, $columnNames, $where) {
    //creates a connection with the Database
    $conn = connect();

    //Generates SELECT sql part
    $commaSeperatedcolumnNames = $columnNames[0];
    for ($i=0; $i<count($columnNames); $i++) {
        $commaSeperatedcolumnNames .= ", " . $columnNames[$i];
    }

    //combines SELECT $tableName and WHERE parts to form sql query
    $sql = "SELECT $commaSeperatedcolumnNames
    FROM $tableName
    $where";

    //saves query results
    $result = $conn->query($sql);

    //if there are result continue
    if ($result->num_rows > 0) {

        //generates the arrayHeads 1 by 1
        $dataArray = [];
        $x = 0;
        $dataArray[$x] = [];
        for ($y=0; $y<count($columnNames); $y++) {
            $dataArray[$x][$y] = $columnNames[$y];
        }
        $x=1;
        while($row = $result->fetch_assoc()) {
            $dataArray[$x] = [];
            for ($y=0; $y<count($columnNames); $y++) {

                $dataArray[$x][$y] = $row[$columnNames[$y]];
            }
            $x++;
        }
        return $dataArray;
    }
    $conn->close();
}

//F07; D:connect(); S(G)
//Status: Good
//FunctionDescription: Returns a array from a specified colom/atribute inside the database.
//Variable input:
    //$tableName(expects an string with a sql table name)
    //$columnName(expects an string with a sql column name)
function getIndividualAtribute($tableName, $columnName) {

    //Perform Query
    $conn = connect();
    $selectData =
    'SELECT ' . $columnName . ' AS "result"' .
    ' FROM ' . $tableName;
    $result = $conn->query($selectData);

    //if there are results then continue
    if ($result->num_rows > 0) {

        //Saves the results row by row.
        $i = 0;
        $resArray = [];
        while($row = $result->fetch_assoc()) {
            $resArray[$i] = $row['result'];
            $i++;
        }

        $conn->close();
        return $resArray;
    }
}

//Generate HTML elements
//------------------------

//F08; D:getIndividualAtribute(); S(888)
//Status: Good not tested throughly (888)
//FunctionDescription: Generate an Html select based on available data inside a array
//Variable input:
    //$dataArray(requires an 2dimensional Array with strings in them)
function generateHtmlSelect($dataArray, $name) {

        //Generates a HTML Select Form element.
        $result =
        "<select name='$name' placeholder='$name'>";
        foreach ($dataArray as $dA) {
            $result .= "<option value='$dA'>$dA</option>";
        }
        $result .= "</select>";

    return $result;
}

//Generate Table functions
//------------------------

//F09; D:selectFromDB(); S(G)
//Status: Good but not tested throughly (888).
//Function: creates table from the provided array can be put inside an existing table
    //but opening an closing <table> tags allways need to be put around this output
//Variables input:
    //$dataArray(requires an 2dimensional Array with strings in them)
    //$height(needs a INT)
function createTableFromDB3($dataArray, $height) {
    //Generates a table from an array
    global $columnNames;
    $res = "";
    $z = count($dataArray[0]);
    for ($x=1; $x<=$height; $x++) {
        $res .= '<tr>';
        for ($y=0; $y<$z; $y++) {
            if (isset($dataArray[$x][$y]) ) {
                $res .= '<td>' . $dataArray[$x][$y] . '</td>';
            } else {
                $res .= '<td></td>';
            }
        }
        $res .= '</tr>';
    }
    return $res;
}
?>
