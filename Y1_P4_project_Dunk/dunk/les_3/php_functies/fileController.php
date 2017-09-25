<?php

if (isset($_POST['create'] ) || isset($_POST['read'] ) || isset($_POST['update'] ) || isset($_POST['delete'] ) ) {

    //sets the url
    $urls = "";
    if ($_POST['url'] == "") {
        $url = "newfile.txt";
    } else {
        $url = $_POST['url'];
    }

    //includes the FileHandler class
    include('fileHandler.php');

    $content = new fileHandler($url, $_POST['content']);

    switch ($_POST['selFunc']) {
    case "create":
        $content->create();
        break;
    case "read":
        $content->read();
        break;
    case "update":
        $content->update();
        break;
    case "update":
        $content->delete();
        break;
}

    echo $content->result;
} else {
    echo "<textarea name='content' rows='8' cols='40'></textarea>";
}

echo "<br><br>";
var_dump($_POST);
echo "<br><br>";
var_dump($_REQUEST);
echo "<br><br>";
echo "<br><br>";
print_r($_POST);
echo "<br><br>";
print_r($_REQUEST);

?>
