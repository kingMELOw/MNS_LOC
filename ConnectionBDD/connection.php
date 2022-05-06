<!DOCTYPE html>
<html>

<head>
    <title>Connection</title>
    <meta charset="utf-8">
</head>
    <body>
        <?php
            $serveur = "51.77.211.205";
            $login = "admin";
            $mdp = "dev1";

            try{
                $bdd = new PDO("mysql:host=$serveur;dbname=LOC_MNS", $login, $mdp);
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                // $insertion = "INSERT INTO utilisateurs(nom, prenom, email) 
                //             VALUES(:Dupond, :Albert, :'dupond.albert@test.com')";

                // $connexion->exec($insertion);
                // echo "Insertion réussie";
            }
            catch(PDOException $e){
                echo "Erreur : " . $e->getMessage();
            }
        ?>
    </body>
</html>