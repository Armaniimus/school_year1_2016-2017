<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <?php include('case_DBfuncties.php')  ?>
    </head>
    <body>
        <?php
        if (isset($_POST["getMetingen"]) ) {
            $kenteken = $_POST['kenteken'];
            $roetwaarde = getRoetwaarde($kenteken);

            echo "Kenteken: " . $kenteken . "<br>" .
            "Roetwaarde: <input type='number' name='roetwaarde' value='" . $roetwaarde . "' >";
        }
        ?>
    </body>
</html>
