<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
     <?php
        include 'php_functions/database_v2.0.php';
        include 'php_functions/generate_table_from_array_v1.0.php';
        include 'php_functions/html_select_element_v1.0.php';
     ?>
     <link href="css/Hotel_style.css" rel="stylesheet";
</head>

<body>
    <div class="deelformulier">
        <?php
        //onchange="submit()"

        //create upper form
        echo "<form formname='f1' action='' method='POST'>";
            $dataArray = getIndividualAtribute($tableNames[0], $columnNames[0][1]);
            echo "Hotelcode:" . generateHtmlSelect($dataArray, $columnNames[0][1]) .
        "</form>";


        if (isset($_POST[$columnNames[0][1] ] ) ) {
            echo "<form formname='f2' action='' method='POST'>
                <input type='hidden' name='" . $columnNames[0][1] . "' value='" . $_POST[$columnNames[0][1]] . "'>";

                //creates dataArray for the inputfield
                $columnSelect = selCollBinary($columnNames[0], "013");
                $where = createWhere($columnSelect);
                $columnSelect = selCollBinary($columnNames[0], "00001");
                $dataArray = generate2dArrayFromDB($tableNames[0], $columnSelect, $where);

                echo "Aantalsterren: <input type='number' name='" . $columnNames[0][4] . "' value= '" . $dataArray[1][0] . "'>
                <input type='submit' name='update' value='update'>
            </form>";
        }
        if (isset($_POST['update'] ) ) {
            $set = updateSet("aantalsterren", $_POST['aantalsterren'] );
            $where = simpleWhere('code', $_POST['code']);
            echo updateDatabase($tableNames[0], $set, $where);
        }
        ?>

    </div>
    <div class="deelformulier">
        <?php
        //create lower table
        $columnSelect = selCollBinary($columnNames[0], "02");
        $dataArray = generate2dArrayFromDB($tableNames[0], $columnSelect,"");
        echo createTableFromDB1($dataArray);
        ?>
    </div>
    <script>
        function submit() {
            document.getElementById('select').submit();
        }
    </script>



</body>
</html>
