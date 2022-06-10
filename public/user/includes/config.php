<?php 

// Connexion à la base de données de développement

define('DB_HOST','localhost'); #serveur
define('DB_USER','root'); #utilisateur
define('DB_PASS',''); #mot de passe
define('DB_NAME','mns_loc'); #nom de la base de données


// Connexion à la base de données du serveur

// define('DB_HOST','localhost'); #serveur
// define('DB_USER','admin'); #utilisateur
// define('DB_PASS','dev1'); #mot de passe
// define('DB_NAME','LOC_MNS'); #nom de la base de données

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
