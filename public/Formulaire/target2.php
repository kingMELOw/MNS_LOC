<?php
session_start();

function securisation($donnees)
{
    $donnees = trim($donnees); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $donnees = stripslashes($donnees); // Supprime les antislashs dans les données
    $donnees = htmlspecialchars($donnees); // permet de protéger les balises HTML
    return $donnees;
}


// Vérification de l'envoi du formulaire
if (isset($_POST)) {
    $login = securisation($_POST['login']);
    $mdp = securisation($_POST['mdp']);
    $isAdmin = securisation($_POST['isAdmin']);
    $surname = securisation($_POST['surname']);
    $name = securisation($_POST['name']);
    $email = ($_POST['email']);

    $pass = password_hash($mdp, PASSWORD_DEFAULT);


    // 3. Connexion à la base de données
    require 'dbConnect.php';

    if (isset($_POST['login'], $_POST['mdp'], $_POST['isAdmin'], $_POST['surname'], $_POST['name'], $_POST['email'])) {
        $sql = "INSERT INTO login (user_login, mdp, is_admin, nom, prenom, email) VALUES ('$login', '$pass', '$isAdmin', '$surname', '$name', '$email')";
        $req = $pdo->prepare($sql);
        $req->execute();
        header('Location: success.php');
    } else {
        header('Location: error2.php');
    }

    // Récupération de l'utilisateur depuis la base de données à partir de son email




    }