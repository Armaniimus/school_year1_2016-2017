<!DOCTYPE html>  <!-- In deze opdracht ga je select vullen vanuit een array met for each -->
<html>
<head>
       <link rel="stylesheet" type="text/css" href="case_styles.css">
</head>
<body>
    <?php
        $kentekens = [];  // leg uit waarom deze regel er in staat?
        array_push($kentekens,'75-GGR-X3');
        array_push($kentekens,'71-GR-T4');
        array_push($kentekens,'WK-43-XT');
        array_push($kentekens,'XD-44-Y2');

        //zet de volgende kentekens in de array kentekens "75-GGR-X3"), "71-GR-T4" , "WK-43-XT" ,  "XD-44-Y2";
        if (isset($_POST['selecteerKenteken']) ) {
        } else {
            $_POST['kenteken'] = "71-GR-T4";
        }

        //$selectedKenteken = "71-GR-T4";
    ?>

    <div class = "formulier">
        <div class = "deelformulier kleiner">
            <form action="" method="post">  <!-- wordt in dit formulier afgehandeld -->
                Kenteken: <select type="text" name="kenteken">
                    <?php
                    foreach ($kentekens as $kenteken) {
                        if ($kenteken == $selectedKenteken) {
                            echo "<option value='" . $kenteken . "' selected>" . $kenteken . "</option>";
                        } else {
                            echo "<option value='" . $kenteken . "'>" . $kenteken . "</option>";
                        }
                    }
                    ?>
                </select>
                <input type="submit" name="selecteerKenteken" value="selecteer">
            </form>
        </div>
        <div class = "deelformulier groter">
            <?php
            //if (isset($_POST['kenteken'])) {
            if (1==1) {
                echo "<br> TEST: kenteken geselecteerd: " . $_POST['kenteken'] ;

                echo "<br> <br> var datum van \$_POST: <br>";
                var_dump($_POST);
                echo "<br> <br>";
            }
            ?>
        </div>
          <br>1) Deze versie laat direct al zien welk kenteken gekozen is, dat is niet goed, want dan heb je nog niet gedrukt op Selecteer (submit). Dit komt omdat er om de afhandeling geen
          if isset($_POST[....]) staat. Regel dat! <br>
          <br> 2) Leg uit waarom de regel $kentekens = [];  er in staat?
          <br>3) zet de volgende kentekens in de array $kentekens "75-GGR-X3"), "71-GR-T4" , "WK-43-XT" ,  "XD-44-Y2";
          <br>3) Vervang de 4 regels met option door een foreach die de array $kentekens uitleest.
                <br> foreach (.... as .....)  <br>
                        echo option value='$kenteken'> ..... /option> ";
          <br>4) Zorg dat rechts de metingen te zien zijn in een tabel. Gebruik je eerder gemaakte functie getmetingen.
    </div>

    <div class="content">
        Meetgegevens (alles uit de tabel)<br>
        <?php
           // echo getmetingen() ; Zorg dat deze gaat werken, zonder dat je op een knop hebt gedrukt.

        ?>
    </div>

</body>
</html>
