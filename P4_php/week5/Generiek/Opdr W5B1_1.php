<!doctype html>

<?php
   // examle gebruikt:
    // https://stackoverflow.com/questions/13583367/get-column-names-and-values-in-for-loop-php
    // http://php.net/manual/en/function.key.php
    // http://anyexample.com/programming/php/php_mysql_example__display_table_as_html.xml
?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- <link href="gen_style.css" rel="stylesheet">  -->
</head>

<body>
    <div class="deelformulier">

        <?php
            $pc1 = [ "Merk" => "Samsung", "Os"=> "Win10", "Harddisk" => "30 GB",  "Memory" => "3 GB", "Prijs" => 600 ];
            $pc2 = [ "Merk" => "Apple", "Os" => "IOS10", "Harddisk" => "400 GB", "Memory" => "4 GB", "Prijs" => 1100 ];
            $pc3 = [ "Merk" => "Lenovo", "Os" => "Win8", "Harddisk" => "90 GB", "Memory" => "1 GB", "Prijs" => 450 ];
            $pc4 = [ "Merk" => "Dell", "Os" => "Win10", "Harddisk" => "160 GB", "Memory" => "2 GB", "Prijs" => 600 ];

            $pcs = [$pc1, $pc2, $pc3, $pc4];

            // echo 'Standaard <br>';
            // foreach ($pc1 as $spec) {
            //     echo $spec . "<br>";
            // }

            //Opdr W5B1_1
            $res = 'W5B1_1 <br>';
            foreach ($pc1 as $k => $v) {
                $res .= $k . ': ' . $v . "<br>";
            }
            echo $res;

            //Opdr W5B1_2a
            $res = '<br> W5B1_2a <br><table border="1">';
            foreach ($pc1 as $k => $v) {
                $res .= '<tr><td>' . $k . ': ' . $v . "</td></tr>";
            }
            $res .= '</table>';
            echo $res;

            //Opdr W5B1_2b
            $res = '<br> W5B1_2b <br> <table border="1"> <tr>';
            foreach ($pc1 as $k => $v) {
                $res .= '<td>' . $k . ': ' . $v . "</td>";
            }
            $res .= '</tr></table>';
            echo $res;

            //Opdr W5B1_3a
            echo '<br> W5B1_3a <br>';
            foreach ($pcs as $pc) {
                print_r($pc);
                echo "<br>";
         	}

            //Opdr W5B1_3b
            $res = '<br> W5B1_3b <--wordt harrdcoded geschreven <br> <table border="1">';
            foreach ($pcs as $key => $value) {
                $res .= '<tr>';
                foreach ($value as $k => $v) {
                    $res .= '<td>' . $k . ': ' . $v . "</td>";
                }
                $res .= '</tr>';
            }
            $res .= '</table>';
            echo $res;

            //Opdr W5B1_4 schrijf vanuit functie
            function arrayToHTMLTable($array) {
                $res = '<br> W5B1_4 <--wordt vanuit een functie geschreven <br> <table border="1">';
                foreach ($array as $key => $value) {
                    $res .= '<tr>';
                    foreach ($value as $k => $v) {
                        $res .= '<td>' . $k . ': ' . $v . "</td>";
                    }
                    $res .= '</tr>';
                }
                $res .= '</table>';
                return $res;
            }
            echo arrayToHTMLTable($pcs);

            //Opdr W5B1_5 schrijf vanuit functie
            function arrayToHTMLTable2($dataArray2D) {
                $res = '<br> W5B1_5 <--wordt vanuit een functie geschreven <br> <table border="1">';
                foreach ($dataArray2D[0] as $k => $v) {
                    $res .= '<th>' . $k . "</th>";
                }

                foreach ($dataArray2D as $value) {
                    $res .= '<tr>';
                    foreach ($value as $k => $v) {
                        $res .= '<td>' . $v . "</td>";
                    }
                    $res .= '</tr>';
                }
                $res .= '</table>';
                return $res;
            }
            echo arrayToHTMLTable2($pcs);
        ?>

    </div>

</body>
</html>
