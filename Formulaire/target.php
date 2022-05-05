<!DOCTYPE html>
<html>

<head>
    <title>Page de traitement</title>
    <meta charset="utf-8">
</head>

<body>
    <?php
        $prenom = $nom = $pseudo = "";

        function securisation($donnees){
            $donnees = trim($donnees); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
            $donnees = stripslashes($donnees); // Supprime les antislashs dans les données
            $donnees = htmlspecialchars($donnees); // permet de protéger les balises HTML
            return $donnees;
        }

        $prenom = securisation($_POST['prenom']);
        $nom = securisation($_POST['nom']);
        $email = securisation($_POST['email']);

        echo "Bonjour " . $prenom . " " . $nom . " " . $email . " !";
    ?>
</body>
</html>