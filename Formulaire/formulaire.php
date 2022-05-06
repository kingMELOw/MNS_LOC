<!DOCTYPE html>
<html>

<head>
    <title>Page de traitement</title>
    <meta charset="utf-8">
    <?php include '../css/style.css.php'; ?>
</head>

<body>
    <h1>Inscription</h1>
    <br>
    <table>
        <form method="POST" action="target.php">
            <tr>
                <td><label for="nom">Entrez votre nom</label></td>
                <td><input type="text" name="nom" id="nom" />
            </tr>
            <tr>
                <td><label for="prenom">Entrez votre prénom</label></td>
                <td><input type="text" name="prenom" id="prenom" /></td>
            </tr>
            <tr>
                <td><label for="email">Entrez votre email</label></td>
                <td><input type="text" name="email" id="email" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Envoyer" id="btnEnvoyer"></td>
            </tr>
        </form>
    </table>
</body>

</html>