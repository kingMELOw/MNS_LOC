<!DOCTYPE html>
<html>

<head>
    <title>Création d'utilisateur</title>
    <meta charset="utf-8">
    <?php include '../css/style.css.php'; ?>
</head>

<body>
    <h1>Veuillez entrer les informations utilisateur</h1>
    <br>
    <form method="POST" action="target2.php">
        <table>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="login">Nom d'utilisateur</label></td>
                    <td><input type="text" name="login" placeholder="Nom d'utilisateur"/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="mdp">Password</label></td>
                    <td><input type="text" name="mdp" placeholder="Mot de passe"/>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="isAdmin">Est un admin</label></td>
                    <td><input type="checkbox" name="isAdmin" value="1"/>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="surname">Nom</label></td>
                    <td><input type="text" name="surname" placeholder="Nom de famille"/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="name">Prénom</label></td>
                    <td><input type="text" name="name" placeholder="Prénom"/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="email">Adresse email</label></td>
                    <td><input type="text" name="email" placeholder="Adresse e-mail"/></td>
                </div>
            </tr>
        </table>
            <input type="submit" value="Créer le compte" id="btnEnvoyer">
    </form>
    <a href="../index.html">
                    <button type="button" class="btn btn-outline-danger my-3">Retour</button>
                </a>
</body>
</html>
