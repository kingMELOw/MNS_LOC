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

    // 1. On vérifie d'abord l'email
    $email = !empty($_POST['email']) ? $_POST['email'] : null;

    if(!$email) // $email == null
    {
        header('Location: /formulaire.php?email_error');
        exit;
    } 

    // 2. Ensuite on vérifie le mot de passe
    $password = !empty($_POST['password']) ? $_POST['password'] : null;

    if(!$password) // $password == null
    {
        header('Location: /formulaire.php?password_error');
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
        header('Location: /formulaire.php?account_error');
        exit;
    } 

    // 5. Vérification du mot de passe
    if(!password_verify($password, $user['password'])) // anciennement $user['password'] != $password
    {
        header('Location: /formulaire.php?password_error');
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
    header('Location: /formulaire.php');
    exit;
}
