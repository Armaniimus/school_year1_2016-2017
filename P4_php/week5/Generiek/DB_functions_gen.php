<?php
function readTableToArray ($servername, $username, $password, $dbname, $sql) {
	echo "<table style='border: solid 1px black;'>";
	echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

	class TableRows extends RecursiveIteratorIterator {
	    function __construct($it) {
	        parent::__construct($it, self::LEAVES_ONLY);
	    }

	    function current() {
	        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
	    }

	    function beginChildren() {
	        echo "<tr>";
	    }

	    function endChildren() {
	        echo "</tr>" . "\n";
	    }
	}

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare($sql);
	    $stmt->execute();

	    // set the resulting array to associative
	    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	    foreach($stmt->fetchAll() as $k=>$v) {
	        echo $v;
	    }
	}
	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	$conn = null;
	echo "</table>";
}





// function readTableToArray ($servername, $username, $password, $dbname, $sql){
//     // Deze functie levert een associatieve array table met alle kolommen die gevraagd worden via $sql
//     // Parameters: bijvoorbeeld $servername = "localhost"; $username = "root";   $password = "";
//     // Bijv: $dbname = "p4caseroetmeting" ;
//
//     // Create connection
// 	    $html = $conn->query($sql);
//            …......
// 	$array = [];  // Creeer een lege array, waar je regels uit de tabel kunt toevoegen
//     	if ($html->num_rows > 0) {
//       	    while ($oneRow = $html->fetch_assoc()) {
//       	        array_push($array,$oneRow);
//       	    }
//    	 }
//     $conn->close();
//     return $array;
// }

function arrayToHTMLTable($dataArray2D) {
    $res = '<br> W5B1_5 <br> <table border="1">';
    foreach ($dataArray2D[0] as $k => $v) {
        $res .= '<th>' . $k . "</th>";
    }

    foreach ($dataArray2D as $key => $value) {
        $res .= '<tr>';
        foreach ($value as $k => $v) {
            $res .= '<td>' . $k . ': ' . $v . "</td>";
        }
        $res .= '</tr>';
    }
    $res .= '</table>';
    return $res;
}
?>
