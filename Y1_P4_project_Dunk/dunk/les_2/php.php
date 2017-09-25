<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <title>crud</title>

</html>

<form action='' method="post">
    <table border="1">
        <tr><td>    Url:</td><td>       <input name="url" type='text' value="">                         </td><tr>
        <tr><td>    Content:</td><td>   <?php include('fileController.php');?>                          </td><tr>
        <tr><td>    Create:</td><td>    <input type='submit' name="create" value='Create'>              </td><tr>
        <tr><td>    Read:</td><td>      <input type='submit' name='read' value='Read'>                  </td><tr>
        <tr><td>    Update:</td><td>    <input type='submit' name='update' value='Update'>              </td><tr>
        <tr><td>    Delete:</td><td>    <input type='submit' name='delete' value='Delete'>              </td><tr>
    </table>
</form>
