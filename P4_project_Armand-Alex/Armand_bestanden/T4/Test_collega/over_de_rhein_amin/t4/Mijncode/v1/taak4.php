<?php include 'functions.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>rood</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body class="groenTemplate">
        <header>
            <div class="titleBar">
                <h1 class="logo">Rhein</h1>
                <h1 class="pageTitle">Hijstabel</h1>
            </div>
            <nav>
                <ul>
                    <li>
                        <a onclick="window.open('groenTemplate.php');" href="#">bestand</a>
                        <ul>
                            <li><a onclick="window.open('groenTemplate.php');" href="#">subMenuItem</a></li>
                        </ul>
                    </li>
                    <li>
                        <a onclick="window.open('groenTemplate.php');" href="#">info</a>
                        <ul>
                            <li><a onclick="window.open('groenTemplate.php');" href="#">subMenuItem</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <form method="post">
              <fieldset>
                <legend>Bedrijven formulier</legend>
            Bedrijfsid : <input type="text" name="Bedrijfsid" value="" placeholder=""><br>
            Bedrijf : <input type="text" name="Bedrijf" value="" placeholder=""><br>
            Functionaris : <input type="text" name="Functionaris" value="" placeholder=""><br>
            <input type="submit" value="Submit" name="submit">
          </fieldset>
            </form>

        </main>
        <footer>
            <button onclick="window.close();" class="exitButton" type="button" name="button">exit</button>
        </footer>
        <?php
          if (isset($_POST["submit"])){
            echo insert("localhost", "root", "", "over_de_rhein", "bedrijven","INSERT INTO bedrijven (`Bedrijfsid`, `Bedrijf`, `Functionaris`) VALUES (\"$_POST[Bedrijfsid]\",\"$_POST[Bedrijf]\",\"$_POST[Functionaris]\")");
            echo '<meta http-equiv="refresh" content="0;url=http://localhost/overDeRhein/src/test/roodTemplate.php" />';
          }
     ?>
    </body>
</html>
