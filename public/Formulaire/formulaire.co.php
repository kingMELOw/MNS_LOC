<!DOCTYPE html>
<html>

<head>
    <title>Connexion MNS-LOC</title>
    <meta charset="utf-8">
    <?php include '../css/style.css.php'; ?>
</head>

<body>
    <h1>Connexion</h1>
    <br>
    <table>
        <form method="POST" action="target.php">
            <tr>
                <td><label for="Login">Login</label></td>
                <td><input type="text" name="Login" id="Login" /></td>
            </tr>
            <tr>
                <td><label for="mdp">Password</label></td>
                <td><input type="password" name="mdp" id="mdp" />
            </tr>
            <tr>
                <td><input type="submit" value="Connexion" id="btnEnvoyer"></td>
            </tr>
        </form>
    </table>
</body>
</html>
