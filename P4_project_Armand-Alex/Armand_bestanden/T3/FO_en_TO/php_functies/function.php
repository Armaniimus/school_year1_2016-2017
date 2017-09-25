<?php
    function getOpdrachten($sql) {
        $servername = "83.82.240.2";
        $username = "akram";
        $password = "kaan";
        $dbname = "over_de_rhein_akram_kaan";
        $resultaat = [];


        // creërt connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // checkt connection

        if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // uitvoer van data van elke row

            while($row = $result->fetch_assoc()) {
                $resultaat[] = $row;
            };
        } else {
             $resultaat = "wel een connectie, tabel is leeg";
        }

        $conn->close();
        return $resultaat;
    }
    // functie die de table maakt
    function tableFromArray($array) {
        $result = "<table border='1'><thead>";
        $result .= "<tr>";

        // dubbele foreach voor de multidimensional array

        foreach($array[0] as $key1 => $value1) {
            $result .= "<th>$key1</th>";
        }
        $result .= "</tr>";
        $result .= "</thead><tbody>";

        foreach($array as $key => $value) {
            $result .= "<tr>";
            foreach($value as $key1 => $value1) {
                $result .= "<td>$value1</td>";
            }
            $result .= "</tr>";
        }
        $result .= "</tbody></table>";
        return $result;
    }
    // selecteert alles van de table
    $selectedOpdrachten = getOpdrachten("SELECT * FROM Hijstesten_2");

?>
