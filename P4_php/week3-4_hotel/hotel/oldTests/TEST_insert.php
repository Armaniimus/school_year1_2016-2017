<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <?php
    include 'php_functions/database_v2.1.php';
    include 'php_functions/generate_table_from_array_v1.0.php';
    include 'php_functions/html_select_element_v1.0.php';
    ?>
    <link href="css/Hotel_style.css" rel="stylesheet";
</head>

<body>
    <div class="deelformulier">
        <?php
        echo
        "<form action='' method='POST'>
            <table border='1'>
                <tr><td>Code:           </td><td>   <input type='text' name=" . $columnNames[0][1] . ">         </td></tr
                <tr><td>Ligging:        </td><td>   <input type='text' name=" . $columnNames[0][2] . ">         </td></tr
                <tr><td>Bouwouwdin:     </td><td>   <input type='number' name=" . $columnNames[0][3] . ">       </td></tr
                <tr><td>Aantalsterren:  </td><td>   <input type='number' name=" . $columnNames[0][4] . ">       </td></tr>
                <tr><td>                </td><td>   <input type='submit' name='add' value='voeg hotel toe'>     </td></tr>
            </table>
        </form>";

        if (isset($_POST['add'] ) ) {


            //if codes are the same don't run
            $status = 1;

            if ($_POST[$columnNames[0][4]] > 5 || $_POST[$columnNames[0][4]] < 1) {
                $status = 0;
                $message = 'Geen toelaatbare invoer aantalsterren';

            } else if ($_POST[$columnNames[0][1]] == "") {
                $message = 'Geen invoer bij code';

            } else if ($status == 1) {
                $testArray = getIndividualAttribute($tableNames[0], $columnNames[0][1]);
                for ($i=0; $i<count($testArray); $i++) {
                    if ($_POST[$columnNames[0][1] ] == $testArray[$i] ) {
                        $status = 0;
                        $i = count($testArray);
                        $message = 'Er bestaat al een record met deze naam';
                    }
                }
            }
            if ($status == 1 && isset($_POST[$columnNames[0][1]]) && $_POST[$columnNames[0][1]] !== "") {
                $columnSelect = selCollBinary($columnNames[0], "02");
                insertIntoDatabase($tableNames[0], $columnSelect);
            } else {
                if (isset($message)) {
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
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



</body>
</html>
