<?php include "database_v2.3.php";

if (isset($_POST["add_hijskraan"])) {
    $selCol = selectWithCodeFromArray($columnNames[0], "111110");

    echo insertIntoDatabase($tableNames[0], $selCol);
}

if (isset($_POST["add_onderwagen"])) {
    echo insertIntoDatabase($tableNames[2], $columnNames[2]);
}
