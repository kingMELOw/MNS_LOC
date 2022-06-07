<?php session_start();
if (isset($_SESSION['login'])) {
    if ($_SESSION['admin'] != true) {
        echo '<script>alert("Non autorisée à accéder à cette zone.")</script>';
        header("Location: ../materiel.php");
        die();
    };
} else {
    header("Location: formulaire.co.php");
    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Création d'utilisateur</title>
    <meta charset="utf-8">
    <?php include 'style.css.php'; ?>
</head>

<body>
    <h1>Veuillez entrer les informations utilisateur</h1>
    <br>
    <form method="POST" action="target2.php">
        <table>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="login">Nom d'utilisateur</label></td>
                    <td><input type="text" name="login" placeholder="Nom d'utilisateur" required/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="mdp">Password</label></td>
                    <td><input type="text" name="mdp" placeholder="Mot de passe" required/>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="isAdmin">Est un admin</label></td>
                    <td>
                        <label>Non
                            <input type="radio" name="isAdmin" value="false" checked/>
                        </label>
                        <label>Oui
                            <input type="radio" name="isAdmin" value="true" />
                        </label>
                    </td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="surname">Nom</label></td>
                    <td><input type="text" name="surname" placeholder="Nom de famille" required/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="name">Prénom</label></td>
                    <td><input type="text" name="name" placeholder="Prénom" required/></td>
                </div>
            </tr>
            <tr>
                <div data-validate="Ce champ est obligatoire">
                    <td><label for="email">Adresse email</label></td>
                    <td><input type="text" name="email" placeholder="Adresse e-mail" required/></td>
                </div>
            </tr>
        </table>
        <input type="submit" value="Créer le compte" id="btnEnvoyer">
    </form>
    <a href="../materiel.php">
        <button type="button" class="btn btn-outline-danger my-3">Retour</button>
    </a>
</body>
<script>

function isEmpty(str) {
    return !str.trim().length;
}

const isEmpty = str => !str.trim().length;

document.getElementById("name").addEventListener("input", function() {
  if( isEmpty(this.value) ) {
    console.log( "NAME is invalid (Empty)" )
  } else {
    console.log( `NAME value is: ${this.value}` );
  }
});

</script>

</html>