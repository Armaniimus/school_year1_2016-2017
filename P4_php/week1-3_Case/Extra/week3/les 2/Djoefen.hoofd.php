<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="Djoefen.css">
        <?php include "Djoefen_DB_functions.php"; ?>
    </head>
    <body>
        <div class="col-12 head"><h2>Opdracht DJ's basic</h2></div>
        <div class="col-12">
            <div class="col-12">

                    <?php
                    echo createDropdownSelect($tableNames[0], $collomNames[0][1]);

                    if (isset($_POST['select'] ) ) {
                        echo getAlleDJs($tableNames[0], $collomNames[0]);
                    } else {
                        echo getAlleDJs($tableNames[0], $collomNames[0]);
                    }
                    ?>
                </form>

            </div>
        </div>
        <div class="col-12"></div>
    </body>
</html>
