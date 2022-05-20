<?php

// Vérification de l'envoi du formulaire
if(isset($_POST['submit']))
{

    // Vérification des champs obligatoires

    // 1. On vérifie d'abord l'email
    $email = !empty($_POST['email']) ? $_POST['email'] : null;

    if(!$email) // $email == null
    {
        header('Location: /login.php?email_error');
        exit;
    } 

    // 2. Ensuite on vérifie le mot de passe
    $password = !empty($_POST['password']) ? $_POST['password'] : null;

    if(!$password) // $password == null
    {
        header('Location: /login.php?password_error');
        exit;
    } 

    // 3. Connexion à la base de données
    require 'includes/dbConnect.php';

    // Récupération de l'utilisateur depuis la base de données à partir de son email
    $sql = "SELECT * FROM user WHERE email = '" . $email . "'";
    $req = $pdo->query($sql);
    $user = $req->fetch(PDO::FETCH_ASSOC);


    //$res = mysqli_query($mysqli, $sql);
    //$user = mysqli_fetch_assoc($res);

    // 4. On vérifie l'existance de l'utilisateur
    if(!$user) // $user == null
    {
        header('Location: /login.php?account_error');
        exit;
    } 

    // 5. Vérification du mot de passe
    if(!password_verify($password, $user['password'])) // anciennement $user['password'] != $password
    {
        header('Location: /login.php?password_error');
        exit;
    }

    // On ouvre une session
    session_start();
    $_SESSION['user_id'] = $user['id'];

    // // Si Admin
    // if($user['is_admin'] == '1')
    // {
    //     header('Location: /admin/index.php');
    // }
    // else // Si Client
    // {
    //     header('Location: /');
    // }

    exit;

}
else
{
    header('Location: /login.php');
    exit;
}