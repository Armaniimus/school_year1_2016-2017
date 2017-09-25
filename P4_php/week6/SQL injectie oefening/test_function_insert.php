<!doctype html>

<head>
    <meta charset="utf-8">
    <?php include 'DB_functions_gen_klaar.php';?>
    <link href="standaard_style.css" rel="stylesheet">
</head>


<body>
    <div class="formulier">
        <div class="menu">
           Verwijder Bastion hotels
           <!-- select * FROM hotels WHERE code= '*'; DELETE from hotels; SELECT * FROM hotels WHERE code = '1'
           *' OR code like '%'; DELETE from hotels; SELECT * FROM hotels WHERE code = '1

           (
         SELECT *
          DROP Database
        )
        *' OR code like '%

        SELECT * FROM hotels WHERE code = '*';
        DELETE FROM hotels WHERE (id > 0 OR id = 0) OR code = 'aap';
       -->
        </div>
        <div class="deelformulier">
           test invoeren regel in hotels<br>

            <form action="" method="post">
                hotelcode: <input type="text" name="code" value="*'; DELETE FROM hotels WHERE (id > 0 OR id = 0) OR code = 'aap">
                <input type="submit" name="filter" value="filter">
                <input type="submit" name="delete" value="delete">
                <input class="inputveld" type="submit" name="insert" value="insert">
                <input type="submit" name="select" value="select">
            </form>


        </div>

        <div class="deelformulier">
            <?php
                if (isset($_POST["delete"])){
                    $sql = "DELETE FROM hotels WHERE code= '" . $_POST["code"] . "'";
                    echo $sql . "<br><br>";
                    echo insertupdate("localhost", "root", "","hotel", $sql);
                }
                if (isset($_POST["insert"])){
                    $code =    "'" . $_POST["code"] . "'";
                    $locatie =   "'A16'";
                    $bouwjr =   "2006";
                    $aantster =   "6";
                    $sql = "INSERT INTO hotels (code, ligging, gebouwdin, aantalsterren ) VALUES ($code, $locatie, $bouwjr , $aantster )";
                    echo $sql . "<br><br>";
                    echo insertupdate("localhost", "root", "","hotel", $sql);
                }
                if (isset($_POST["filter"])){
                    $sql = "select * FROM hotels WHERE code= '" . $_POST['code'] . "'";
                    echo $sql . "<br><br>";
                    echo "<br><br><br><br><br><br>*' OR code LIKE '%";
                }


            ?>

        </div>
    </div>

     <div class="content">
       Meetgegevens (alles uit de tabel)<br>
        <?php

            if (isset ($_POST["filter"] ) ) {
                    // $sql = "SELECT * FROM hotels WHERE code = '*';
                    //         DELETE FROM hotels WHERE (id > 0 OR id = 0) OR code = 'aap';
                    // ";
                    $resultArray = readTableToArray("localhost", "root", "", "hotel", $sql);
                } else {
                    $resultArray = readTableToArray("localhost", "root", "", "hotel", "SELECT * FROM hotels WHERE aantalsterren <7");
            }

            echo ArrayToHTMLTable($resultArray);


        ?>
    </div>


</body>
