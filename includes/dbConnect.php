<?php

// $mysqli = mysqli_connect("localhost", "root", "", "ecommerce");
// if (mysqli_connect_errno()) {
//     echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
// }

// Connexion à la base avec PDO
try {
    $pdo = new PDO('mysql:host=localhost;dbname=LOC_MNS','root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}