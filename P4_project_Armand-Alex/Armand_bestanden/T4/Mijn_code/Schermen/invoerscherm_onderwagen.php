<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Onderwagen</title>
    </head>
    <link rel="stylesheet" href="css\mystylesheet.css">
    <?php include "php/dbfuncties.php"; ?>
    <body>
        <div class="main">
            <h3>Materieel</h3>
            <form class="" action="" method="post">
                <b>Onderwagen</b><br>
                Fabrikaat: <input type="text" name="Onderwagen_fabrikaat"><br>
                Model/Type: <input type="text" name="Onderwagen_model_type"><br>
                Identificatienummer: <input type="text" name="Onderwagen_identieficatienummer"><br>
                BedrijfsNummer: <input type="text" name="Onderwagen_bedrijfsnummer"><br>
                <br>
                <b>Uitvoering onderwagen:</b><br>
                <select name="Onderwagen_uitvoering">
                    <option value="opbanden">op banden (zelfrijdend)</option>
                    <option value="optruck">op truck</option>
                    <option value="weg-/ruwterrein">weg-/ruwterrein(kenteken)</option>
                    <option value="oprupsen">op rupsen</option>
                </select>
                <input type="submit" name="add_onderwagen" value="voeg toe">
                <input type="hidden" name="add">
            </form>

        </div>
    </body>
</html>
