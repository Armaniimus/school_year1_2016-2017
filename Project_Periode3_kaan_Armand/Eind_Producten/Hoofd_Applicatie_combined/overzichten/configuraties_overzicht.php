<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>configuraties template</title>

		<?php $HTN = 0; ?>
		<?php include('php/database_connect.php') ?>
    </head>
    <body>
        <div id="top">
            <div id="logo">LOGO</div>
            <div id="title">configuraties overzicht</div>
        </div>
        <div class="content">
            <?php
                outputFromTable($HT, $tablename);
                insertArticleIntoTable($HT, $tablename)
            ?>
        </div>
        <a href="#form"><div class="add">Toevoegen</div></a><br><br><br><br><br><br><br><br><br><br><br>
        <form class="form" method="post">
            <label id="form" for="">Besturingssysteem</label><input type="text" name="gender" value=""><br><br>
            <label for="">Type</label><input type="text" name="type" value=""><br><br>
            <label for="">Model</label><input type="text" name="model" value=""><br><br>
            <label for="">Proccessor</label><input type="text" name="proccessor" value=""><br><br>
            <label for="">Werkgeheugen</label><input type="text" name="werkgeheugen" value=""><br><br>
            <label for="">videokaart</label><input type="text" name="videokaart" value=""><br><br>
            <label for="">Harddrive</label><input type="text" name="Harddrive" value=""><br><br>
            <label for="">PSU</label><input type="text" name="psu" value=""><br><br>
            <label for="">Bouwjaar</label><input type="text" name="bouwjaar" value=""><br><br>
            <label for="">Licenties</label><input type="text" name="licenties" value=""><br><br>
            <a href="#"><input class="send" type="submit" name="send" value="verstuur"></a><br><br>
        </form>
        <script src="javascript/zenscrol.js" charset="utf-8"></script>
    </body>
</html>
