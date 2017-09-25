<?php
// select data from db and returns an two dimensional array
function sqlSelect($servername, $username, $password, $dbname, $sql) {
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  $conn->set_charset("utf-8");
  // Check connection
  if ($conn->connect_error) {
    return $conn->connect_error;
    die("Connection failed: " . $conn->connect_error);
  }
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $rows;
    while($row = $result->fetch_assoc()){
      $rows[] = $row;
    }
  } else {
    return false;
  }
  $conn->close();
  return $rows;
}

function insert($servername, $username, $password, $dbname, $sql) {

        $conn = new mysqli($servername, $username,$password,$dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);
    };

?>
