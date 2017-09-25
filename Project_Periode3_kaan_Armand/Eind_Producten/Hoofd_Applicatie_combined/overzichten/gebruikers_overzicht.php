<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <title>Gebruikers overzicht</title>
        <?php $HTN = 1; ?>
        <?php include('php/database_connect.php') ?>

    </head>
    <body>
        <div id="top">
            <div id="logo">LOGO</div>
            <div id="title">Gebruikers overzicht</div>
        </div>
        <div class="content">
            <?php
                outputFromTable($HT, $tablename);
                insertArticleIntoTable($HT, $tablename)
            ?>
        </div>
        <a href=""><div class="add">Toevoegen</div></a><br><br>
        <form class="form" action="" method="POST">
            <label id="form" for="">Geslacht</label><input type="text" name="geslacht" value=""><br><br>
            <label for="">Voorletter</label><input type="text" name="voorletter" value=""><br><br>
            <label for="">Achternaam</label><input type="text" name="achternaam" value=""><br><br>
            <label for="">Afdeling</label><input type="text" name="afdeling" value=""><br><br>
            <label for="">Intern telefoonnummer</label><input type="number" name="intern_telefoon_nummer" value=""><br><br>
            <label for="">postcode</label><input type="text" name="postcode" value=""><br><br>
            <label for="">E-mail</label><input type="email" name="email" value=""><br><br>
            <input class="send" type="submit" name="add" value="verstuur"><br><br>
        </form>
        <script src="javascript/zenscrol.js" charset="utf-8"></script>
    </body>
</html>
