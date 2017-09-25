<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <link rel="stylesheet" href="css/loginscherm.css">
        <?php include('phpfunc/database_v2.1.php') ?>
    </head>
    <body>
        <div class='login'>
            <?php
            if (isset($_POST['createform'] ) ) {
                echo "<form action='' method='post'>
                    <h3>Create account</h3>
                    Gebruikersnaam:<br>
                    <input id='username' type='text' name='username'><br>
                    Wachtwoord:<br>
                    <input id='password' type='password' name='password'><br>
                    <button type='submit' name='createaccount'>Create account</button>
                </form>
                <br>
                <form action='' method='post' id=createacc>
                    <span onclick='createAccount()'>Terug<span>
                    <input type='hidden' name='terug'>
                </form>";
            } else {
                echo "<form action='' method='post'>
                    <h3>Log in</h3>
                    Gebruikersnaam:<br>
                    <input id='username' type='text' name='username'><br>
                    Wachtwoord:<br>
                    <input id='password' type='password' name='password'><br>
                    <button type='submit' name='login'>login</button>
                </form>
                <br>
                <form action='' method='post' id=createacc>
                    <span onclick='createAccount()'>Create an account?<span>
                    <input type='hidden' name='createform'>
                </form>";
            }
            //print_r($columnNames);
            $selectCol = selCollBinary($columnNames[0], '011');
            beslis($tableNames, $selectCol);
        ?>
        </div>
    </body>
</html>

<script>
function createAccount() {
    document.getElementById('createacc').submit();
}
</script>
