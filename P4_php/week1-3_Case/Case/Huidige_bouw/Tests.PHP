<?php
include('case_DBfuncties.php');
$kenteken = '75-GGR-X3';
echo getmetingen();
echo '<br><br><br>';
echo getRoetwaarde($kenteken);
echo '<br><br><br>';
var_dump(getmeting($kenteken) );
echo '<br><br><br>';












?>
