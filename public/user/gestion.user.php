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

require 'gestion.co.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateur</title>
</head>

<body>

    <div class="container">
        <h1>Gestion des utilisateurs</h1>

        <a href="../Formulaire/formu.creation.php">Nouveau</a>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Login</th>
                    <th>MDP(HASH)</th>
                    <th>is_admin</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user->getId() ?></td>
                        <td><?= $user->getTitle() ?></td>
                        <td>

                            <a href="">Modifier</a>
                            <form action="/delete-user.php" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ?')">
                                <input type="hidden" name="id" value="<?= $user->getId() ?>" />
                                <input type="submit" name="submit" value="Supprimer" />
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

</body>

</html>