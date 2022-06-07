<?php

// $mysqli = mysqli_connect("localhost", "root", "", "ecommerce");
// if (mysqli_connect_errno()) {
//     echo "Échec lors de la connexion à MySQL : " . mysqli_connect_error();
// }

// Connexion à la base avec PDO

$pdo = new PDO('mysql:host=localhost;dbname=LOC_MNS', 'admin', 'dev1');  // Connexion à la base de données du serveur
// $pdo = new PDO('mysql:host=localhost;dbname=mns_loc','root',''); // Connexion à la base de données de la branch test
