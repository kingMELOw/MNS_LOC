<!DOCTYPE html>
<html>

<head>
    <title>Connexion MNS-LOC</title>
    <meta charset="utf-8">
    <?php include '../css/style.css.php'; ?>
</head>

<body>
    <h1>Bienvenue sur MNS LOC</h1>
    <h2>Veuillez vous connecter</h2>
    <br>
    <form method="POST" action="target.php">
        <table>
            <tr>
                <td><label for="Login">Login</label></td>
                <td><input type="text" name="Login" id="Login" /></td>
            </tr>
            <tr>
                <td><label for="mdp">Password</label></td>
                <td><input type="password" name="mdp" id="mdp" />
            </tr>
        </table>
        <div id="test">
            <input type="submit" value="Connexion" id="btnEnvoyer">
        </div>
    </form>
    <div><p>Pas inscrit ? Faites une demande <a href="../Inscription.html">d'inscription</a></p></div>
    <a href="../index.html">
                    <button type="button" class="btn btn-outline-danger my-3">Retour</button>
                </a>
</body>
</html>
