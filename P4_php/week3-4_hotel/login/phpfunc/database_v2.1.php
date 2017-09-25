<?php
//-- version number 2.1  --//


//-- global variables D: connect(), getcolumnNames(), getTableNames() --//
$serverInfo = ["localhost", "root", "", "userlogin_door_armand"]; //Servername, Username, password, dbname
    //generates table information
    $tableNames = getTableNames();
    $columnNames = [];
    for ($i=0; $i<count($tableNames); $i++) {
        $columnNames[$i] = getcolumnNames($tableNames[$i]);
    }

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
    //it also needs the connect function
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
    //$tableName(expects a string of a DB tablename)
function getcolumnNames($tableName) {

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

//F04; D: none; S(G)
//Status: Good
//FunctionDescription: With this function you can choose which column names you want inside an array
//Variables input:
    //$columnNames(expects a array of strings with a DB column names in them)
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

//F06; D:connect(), createWhere(); S(G)
//Status: Good
//Function: Returns a 2 dimensional array with strings from SQL database.
//Varables input:
    //$tableName(expects an string with a DB tableName)
    //$columnNames(expects a array of strings with a DB column names in them)
    //$where(expects a string with a $where statement for the sql DB)
function generate2dArrayFromDB($tableName, $columnNames, $where) {

    //creates a connection with the Database
    $conn = connect();

    //Generates SELECT sql part
    $commaSeperatedcolumnNames = $columnNames[0];
    for ($i=1; $i<count($columnNames); $i++) {
        $commaSeperatedcolumnNames .= ", " . $columnNames[$i];
    }

    //combines SELECT $tableName and WHERE parts to form sql query
    $sql = "SELECT $commaSeperatedcolumnNames
    FROM $tableName
    $where";

    //saves query results
    $result = $conn->query($sql);
    //if there are result continue
    if ($result !== FALSE) {
        if ($result->num_rows > 0) {
            return TRUE;
        } else {
            return FALSE;
        }
    } else {
        return 'Fout in programmatuur';
    }
    $conn->close();
}

//F08; D:connect(); S(G)
//Status: Good
//Function: Insert a record into an sql Table
//Variables input:
    //$columnNames(needs a array of DB attribute names)
        //The data you like to add needs to be inside $_POST['collumnnames']
    //$tableName(needs a string of a DB tableName)
function insertIntoDatabase($tableName, $columnNames) {

    $conn = connect();

    //extracts input data from superglobal
    $addData = array();
    for ($i=0; $i<count($columnNames); $i++) {
        $addData[$i] = $_POST[$columnNames[$i] ];
    }

    //tests if all fields are filled
    $test = TRUE;
    for ($i=0; $i<count($columnNames); $i++) {
        if ($addData[$i] == "") {
            $test = FALSE;
        }
    }

    //if tests where succesfull create sql query
    if ($test == TRUE) {

        //Generates commaseperated names
        $commaSeperatedcolumnNames = $columnNames[0];
        for ($i=1; $i<count($columnNames); $i++) {
            $commaSeperatedcolumnNames .= "," . $columnNames[$i];
        }

        //used for the login
        $username = $_POST['username'];
        $password = $_POST['password'];
        $article = "'$username' , SHA2('$password',512)";

        //Combines $article, $tableName and $commaSeperatedcolumnNames to create the SQL query
        $sql = "INSERT INTO $tableName ($commaSeperatedcolumnNames)
        VALUES ($article)";

        //if acticle gives a notification back if an article was added successfully
        //and reloads the page
        if ($conn->query($sql) === TRUE) {
            $message = "Je account is aangemaakt";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>('window.location.reload();')</script>";
        } else {
            $message = "query failes";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    //if not all fields are filled gives a popup that not all fields are filled
    } else {
        $message = "Fill in the whole form";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    $conn->close();
}


function sanitizeDBData($input) {

    //Remove the following characters from POST ()\<>/:;
    $halfSan = filter_var($input, FILTER_SANITIZE_EMAIL);

    //sets slashes infront of " ' and \
    $output = filter_var($halfSan, FILTER_SANITIZE_MAGIC_QUOTES);

    return $output;
}

function beslis($tableNames, $columnNames) {
    if (isset($_POST['login'] ) ) {
        $username = sanitizeDBData($_POST['username']);
        $password = sanitizeDBData($_POST['password']);

        $where = "WHERE " . $columnNames[0] . " = '$username' AND " . $columnNames[1] . " = SHA2('$password',512)";
        $dataArray = generate2dArrayFromDB($tableNames[0], $columnNames, $where);

        if ($dataArray == TRUE) {
            echo "<script> alert('$username U bent succesvol ingelogt')</script>";
        } else {
            echo "<script> alert('Stop maar het wachtwoord is fout')</script>";
        }
    }
    if (isset($_POST['createaccount'] ) ) {
        insertIntoDatabase($tableNames[0], $columnNames);
    }
}

?>
