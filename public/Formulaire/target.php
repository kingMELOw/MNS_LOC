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

    // Vérification des champs obligatoires

    // 1. On vérifie d'abord le login
    // $login = !empty($_POST['login']) ? $_POST['login'] : null;

    // if(!$login) // $email == null
    // {
    //     header('Location: /formulaire.co.php?email_error');
    //     exit;
    // } 

    // 2. Ensuite on vérifie le mot de passe
    // $password = !empty($_POST['mdp']) ? $_POST['mdp'] : null;

    // if(!$password) // $password == null
    // {
    //     header('Location: /formulaire.co.php?password_error');
    //     exit;
    // } 

    // 3. Connexion à la base de données
    require 'dbConnect.php';

    // $pdo = new PDO('mysql:host=localhost;dbname=LOC_MNS', 'admin', 'dev1');  // Connexion à la base de données du serveur
    // $pdo = new PDO('mysql:host=localhost;dbname=mns_loc','root',''); // Connexion à la base de données de la branch test

    // Récupération de l'utilisateur depuis la base de données à partir de son email
    $sql = "SELECT * FROM login WHERE user_login ='$login' ";
    $req = $pdo->prepare($sql);
    $req->execute();
    // $user = $req->fetch(PDO::FETCH_ASSOC);


    //$res = mysqli_query($mysqli, $sql);
    //$user = mysqli_fetch_assoc($res);

    // 4. On vérifie l'existance de l'utilisateur
    // if(!$user) // $user == null
    // {
    //     // header('Location: /formulaire.co.php?account_error');
    //     // exit;
    //     header('Location: error.php');
    // } 

    // 5. Vérification du mot de passe
    // if(!password_verify($password, $user['mdp'])) // anciennement $user['password'] != $password
    // {
    //     // header('Location: /formulaire.co.php?password_error');
    //     // exit;
    //     header('Location: error.php');
    // }


    // // Si Admin
    // if($user['is_admin'] == '1')
    // {
    //     header('Location: /admin/index.php');
    // }
    // else // Si Client
    // {
    //     header('Location: /');
    // }
    if ($req->rowCount() > 0) {
        $data = $req->fetchAll();
        if (password_verify($mdp, $data[0]['mdp'])) {
            $name = $data[0]['prenom'];
            $_SESSION['login'] = $login;
            if ($data[0]['is_admin'] == 1) {
                $_SESSION['admin'] = true;
            }
            else {
                $_SESSION['admin'] = false;
            }
            header('Location: ../materiel.php');
        }   else {
            header('Location: error.php');
            // echo '<script>alert("Mot de passe incorrect")</script>';
            // var_dump(password_verify($mdp, $data[0]['mdp']));
            // $pass = password_hash($mdp, PASSWORD_DEFAULT);
            // $req = "INSERT INTO login (user_login, mdp) VALUES ('$login', '$pass')";
            // $req = $pdo->prepare($req);
            // $req->execute();
            // echo "insertion réussie";
            // var_dump($req);
        }
     } 
        else {
            header('Location: error.php');
            // var_dump($data); 
            // $pass = password_hash($mdp, PASSWORD_DEFAULT);
            // $req = "INSERT INTO login (user_login, mdp) VALUES ('$login', '$pass')";
            // $req = $pdo->prepare($req);
            // $req->execute();
            // echo "insertion réussie";
        }
    }else {
        header('Location: error.php');
    
    }