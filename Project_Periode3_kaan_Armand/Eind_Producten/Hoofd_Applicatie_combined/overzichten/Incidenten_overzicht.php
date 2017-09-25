<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>configuraties template</title>

		<?php $HTN = 2; ?>
		<?php include('php/database_connect.php') ?>
    </head>
    <body>
        <div id="top">
            <div id="logo">LOGO</div>
            <div id="title">Incidenten Overzicht</div>
        </div>
        <div class="content">
            <?php
                outputFromTable($HT, $tablename);
                insertArticleIntoTable($HT, $tablename)
            ?>
        </div>

        <a href="#form"><div class="add">Toevoegen</div></a><br><br><br><br><br><br><br><br><br><br><br>
        <form class="form" method="post">
            <label id="form" for="">Gebruikers_gid</label><input type="text" name="gebruikers_gid" value=""><br><br>
            <label for="">Configuraties_cid</label><input type="number" name="configuraties_cid" value=""><br><br>
            <label for="">Korte incident beschrijving</label><input type="text" name="korteIncidentBeschrijving" value=""><br><br>
            <label for="">Volledige incident beschrijving</label><input type="text" name="volledigeIncidentBeschrijving" value=""><br><br>
            <label for="">Betrekking op aantal gebruikers</label><input type="text" name="betrekkingOpAantalGebruikers" value=""><br><br>
            <label for="">Afhandel tijd</label><input type="text" name="afhandelTijd" value=""><br><br>
            <label for="">Verantwoordelijke</label><input type="text" name="verantwoordelijke" value=""><br><br>
            <label for="">Oorzaken</label><input type="text" name="oorzaken" value=""><br><br>
            <label for="">Oplossingen</label><input type="text" name="oplossingen" value=""><br><br>
            <label for="">Terugkoppeling</label><input type="text" name="terugkoppeling" value=""><br><br>
            <label for="">Status</label><input type="text" name="status" value=""><br><br>
            <a href="#"><input class="send" type="submit" name="send" value="verstuur"></a><br><br>
        </form>
        <script src="javascript/zenscrol.js" charset="utf-8"></script>
    </body>
</html>
