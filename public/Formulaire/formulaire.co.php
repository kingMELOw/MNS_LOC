<!DOCTYPE html>
<html>

<head>
    <title>Connexion MNS-LOC</title>
    <meta charset="utf-8">
    <?php include 'style.css.php'; ?>
</head>

<body>
    <h1>Bienvenue sur MNS LOC</h1>
    <h2>Veuillez vous connecter</h2>
    <br>
    <form method="POST" action="target.php">
        <table>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="login">Login</label></td>
                    <td><input type="text" name="login" placeholder="Nom d'utilisateur"/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="mdp">Password</label></td>
                    <td><input type="password" name="mdp" placeholder="Mot de passe"/>
                </div>
            </tr>
        </table>
            <input type="submit" value="Connexion" id="btnEnvoyer">
    </form>
    <div><p>Pas inscrit ? Faites une demande <a href="../Inscription.html">d'inscription</a></p></div>
    <a href="../index.html">
                    <button type="button" class="btn btn-outline-danger my-3">Retour</button>
                </a>
</body>
</html>
