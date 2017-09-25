<!DOCTYPE html>
<html>
<head>
    <?php include('case_DBfuncties_leeg.php')  ?>
    <link rel="stylesheet" type="text/css" href="case_styles.css">
</head>
<body>

    <div class="formulier">
        <form action="" method="post">
            
           <!-- MAAK HIER 2 Knoppen. Een knop  met de naam: get metingen en reset. -->
        </form>
               
    </div>

    <div class="content">
        <?php 
            if(isset($_POST["getmetingen"])){             
               // toon hier de metingen, gebruik de functie getmetingen(); 
            } else {
                echo "leeg";
            }
        ?>
    </div>
      
    <?php //echo toonVersie() 
    ?>
            
</body>
</html>
