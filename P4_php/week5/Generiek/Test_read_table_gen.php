<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <?php include 'DB_functions_gen.php';?>
    <!-- <link href="Hotel_style.css" rel="stylesheet">  -->
</head>

<body>
    <div class="deelformulier">
        <?php

            $sql = "SELECT * FROM hotels";

            $resultArray = readTableToArray("localhost", "root", "","hotel", $sql);

            echo "<br>";
            foreach ($resultArray as $row) {  // for test
               // print_r($row); echo "<br>";
            }

            $resultHTMLTable = ArrayToHTMLTable($resultArray);
            echo $resultHTMLTable;
        ?>
    </div>


</body>
</html>
