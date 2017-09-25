<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>roetmetingen</title>
        <link rel="stylesheet" href="css/case_styles.css">

        <?php include('php_functies/case_DBfuncties.php') ?>
        <script src="Case_javascript.js">reset()</script>
    </head>
    <body>
        <div class="formulier contForm col-4">
            <form  name="kentekenForm" action="" method="post">
                Kenteken


                    <?php
                    $res = '<select type="text" name="kenteken">';
                    $selectArray = getIndividualAtribute('autos', 'kenteken ');
                    for ($i=0; $i<count($selectArray); $i++) {

                        if (isset($_POST['kenteken']) AND $_POST['kenteken'] == $selectArray[$i]) {
                            $res .= "<option value=" . $selectArray[$i] . " selected>" . $selectArray[$i] . "</option>";
                        } else {
                            $res .= "<option value=" . $selectArray[$i] . ">" . $selectArray[$i] . "</option>";
                        }
                    }
                    $res .= '</select>';
                    echo $res;
                    ?>

                <input type="submit" value="wijzig" name="getMetingen">

                <button onclick="reset()">reset</button>
            </form>
        </div>

        <div class="content col-8">
            <?php
                $contentTable = getmetingen();
                echo $contentTable;
                if (isset($_POST['updateroet'] ) ) {

                }
            ?>
        </div>
        <div class="col-4 contForm wijzig">
            <?php
            if (isset($_POST["getMetingen"] ) ) {
                $kenteken = $_POST['kenteken'];
                $roetwaarde = getRoetwaarde($kenteken);


                if (isset($_POST['updateroet'] ) ) {
                    $set = updateSet('roetwaarde', $_POST['roetwaarde'] );
                    $where = updateWhere('autos_kenteken', $_POST['kenteken'] );
                    echo updateRoetWaarde('metingen', $set, $where);
                } else {
                    echo
                    "<form action='' method='POST'>
                        Kenteken: $kenteken <br>
                        Roetwaarde: <input type='number' name='roetwaarde' value='$roetwaarde'>
                        <input type='hidden' name='kenteken' value='$kenteken'>
                        <input type='hidden' name='getMetingen' value='getMetingen'>
                        <input type='submit' name='updateroet' value='Update'>
                    </form>";
                }

            }
            ?>
        </div>
        <div class="col-8 "></div>
    </body>
</html>
