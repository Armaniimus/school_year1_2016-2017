<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>hijskraan</title>
    </head>
    <link rel="stylesheet" href="css\mystylesheet.css">
    <?php include "php/dbfuncties.php"; ?>
    <body>
        <div class="main">
            <h3>Materieel</h3>
            <form class="" action="" method="post">
                <b>Hijskraan</b><br>
                Fabrikaat: <input type="text" name="Hijskraan_fabrikaat"><br>
                Model/Type: <input type="text" name="Hijskraan_model_type"><br>
                SerieNummer: <input type="text" name="Hijskraan_Serienummer"><br>
                BedrijfsNummer: <input type="text" name="Hijskraan_bedrijfsnummer"><br>
                Bouwjaar: <input type="Date" name="Hijskraan_bouwjaar"><br>
                <input type="submit" name="add_hijskraan" value="voeg toe">
                <input type="hidden" name="add">
            </form>
        </div>
    </body>
</html>
