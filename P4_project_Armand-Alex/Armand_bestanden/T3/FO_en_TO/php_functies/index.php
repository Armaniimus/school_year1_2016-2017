<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <title>Over de RHEIN | Kagan</title>
    </head>
    <body>
        <div class="top">
            <div class="logo">Over de <br>RHEIN</div>
            <div class="title">title</div>
            <button class="button" type="button" name="button">Bestand</button>
            <button class="button" type="button" name="button">Info</button>
        </div>
        <div class="content">
            <?php include 'function.php';  ?>
            <form action="" method="post">
                opdrachtnummer:
                <select type="text" name="selectnummer">
                <?php
                    // foreach voor elk table met $selectnummer als value
                    foreach ($selectedOpdrachten as $selectnummer) {
                        if($selectnummer == $_POST['selectnummer']){
                            echo "<option value='$selectnummer[opdrachtnummer]' selected>$selectnummer[opdrachtnummer]</option>";
                        }else{
                            echo "<option value='$selectnummer[opdrachtnummer]'>$selectnummer[opdrachtnummer]</option>";
                        }
                    }

                ?>
                </select>
                <input type="submit" value="selecteer">
            </form>
            <div class="">
                <?php
                    if(!empty($_POST["selectnummer"])) {
                        echo tableFromArray(getOpdrachten("SELECT * FROM Hijstesten_2 WHERE opdrachtnummer = " . $_POST['selectnummer']));
                    } else {
                        echo tableFromArray(getOpdrachten("SELECT * FROM Hijstesten_2 "));
                    }

                ?>
            </div>
        </div>
        <button class="exit">exit</button>
    </body>
</html>
