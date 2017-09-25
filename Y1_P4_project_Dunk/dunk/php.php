<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>crud</title>

</html>

<form action='' method="post">


    <table border="1">
        <tr><td>    future url:</td><td><input name="content" type='text'>                  </td><tr>
        <tr><td>    content:</td><td>   <input name="content" type='text'>                  </td><tr>
        <tr><td>    create:</td><td>    <input name="create" type='submit' value='create'>  </td><tr>
        <tr><td>    read:</td><td>      <input type='submit' name='read' value='read'>      </td><tr>
        <tr><td>    update:</td><td>     <input type='submit' name='update' value='update'> </td><tr>
        <tr><td>    delete:</td><td>    <input type='submit' name='delete' value='delete'>  </td><tr>
    </table>
</form>


<?php
$url = "newfile.txt";

function create($url, $content) {
    $myfile = fopen($url, "w") or die("Unable to open file!");
    fwrite($myfile, $content);
    fclose($myfile);
}

function read($url) {
    $myfile = fopen($url, "r") or die("Unable to open file!");
    return fread($myfile,filesize($url));
    fclose($myfile);
}

function update($url) {

    if (isset($_POST['inputupdate'] ) ) {
        create($_POST['url'], $_POST['inputupdate'] );
    } else {
        $y = read($url);

        echo "
        <form action='' method='post'>
            <tr><td colspan='2'><textarea name='inputupdate' rows='8' cols='28'>$y</textarea><td><tr>

            <input type='hidden' name='url' value='$url'><br>
            <input type='submit' name='update' value='update'>
        </form>";
    }
}

function delete($url) {
    unlink($url);
}

if (isset($_POST['create'] ) ) {
    create($url, $_POST['content'] );
}

if (isset($_POST['read'] ) ) {
    echo read($url);
}

if (isset($_POST['update'] ) ) {
    update($url);
}

if (isset($_POST['delete'] ) ) {
    delete($url);
}








?>
