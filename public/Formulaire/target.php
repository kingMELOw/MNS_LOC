<?php
        function securisation($donnees){
            $donnees = trim($donnees); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
            $donnees = stripslashes($donnees); // Supprime les antislashs dans les données
            $donnees = htmlspecialchars($donnees); // permet de protéger les balises HTML
            return $donnees;
        }

        $Login = securisation($_POST['Login']);
        $mdp = securisation($_POST['mdp']);

        // echo "Bonjour " . $email . " nous avons désormais votre mot de passe qui est '" . $mdp . "' , il va être partager tout de suite sur le net !";
    

// Vérification de l'envoi du formulaire
if(isset($_POST['submit']))
{

    // Vérification des champs obligatoires

    // 1. On vérifie d'abord le Login
    $login = !empty($_POST['Login']) ? $_POST['Login'] : null;

    if(!$login) // $email == null
    {
        header('Location: /formulaire.php?email_error');
        exit;
    } 

    // 2. Ensuite on vérifie le mot de passe
    $password = !empty($_POST['mdp']) ? $_POST['mdp'] : null;

    if(!$password) // $password == null
    {
        header('Location: /formulaire.php?password_error');
        exit;
    } 

    // 3. Connexion à la base de données
    require 'includes/dbConnect.php';

    // Récupération de l'utilisateur depuis la base de données à partir de son email
    $sql = "SELECT * FROM user WHERE user_login = '" . $login . "'";
    $req = $pdo->query($sql);
    $user = $req->fetch(PDO::FETCH_ASSOC);


    //$res = mysqli_query($mysqli, $sql);
    //$user = mysqli_fetch_assoc($res);

    // 4. On vérifie l'existance de l'utilisateur
    if(!$user) // $user == null
    {
        header('Location: /formulaire.php?account_error');
        exit;
    } 

    // 5. Vérification du mot de passe
    if(!password_verify($password, $user['mdp'])) // anciennement $user['password'] != $password
    {
        header('Location: /formulaire.php?password_error');
        exit;
    }

    // On ouvre une session
    session_start();
    $_SESSION['user_login'] = $user['id_user'];

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
    header('Location: formulaire.php');
    exit;
}
