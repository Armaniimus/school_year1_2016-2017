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

    // controls the create
    if (isset($_POST['create'] ) ) {

        $content = new fileHandler($url, $_POST['content']);
        $content->create();
    }

    // controls the read
    if (isset($_POST['read'] ) ) {

        $content = new fileHandler($url);
        $content->read();
    }

    // controls the update
    if (isset($_POST['update'] ) ) {

        $content = new fileHandler($url, $_POST['content']);
        $content->update();
    }

    // controls the delete
    if (isset($_POST['delete'] ) ) {

        $content = new fileHandler($url);
        $content->delete();
    }
    echo $content->result;
} else {
    echo "<textarea name='content' rows='8' cols='40'></textarea>";
}


?>
