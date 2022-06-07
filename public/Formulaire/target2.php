<?php
session_start();

function securisation($donnees)
{
    $donnees = trim($donnees); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
    $donnees = stripslashes($donnees); // Supprime les antislashs dans les données
    $donnees = htmlspecialchars($donnees); // permet de protéger les balises HTML
    return $donnees;
}
var_dump($_POST);


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
    // require '../includes/dbConnect.php';

    $pdo = new PDO('mysql:host=localhost;dbname=LOC_MNS', 'admin', 'dev1');
    // $pdo = new PDO('mysql:host=localhost;dbname=mns_loc','root','');
    var_dump($pdo);

               // $pass = password_hash($mdp, PASSWORD_DEFAULT);
            // $req = "INSERT INTO login (user_login, mdp) VALUES ('$login', '$pass')";
            // $req = $pdo->prepare($req);
            // $req->execute();
            // echo "insertion réussie";

    // Récupération de l'utilisateur depuis la base de données à partir de son email
    $sql = "INSERT INTO login (user_login, mdp, is_admin, nom, prenom, email) VALUES ('$login', '$pass', '$isAdmin', '$surname', '$name', '$email')";
    var_dump($sql);
    $req = $pdo->prepare($sql);
    $req->execute();


    }