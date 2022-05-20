<?php

session_start();

// Vérification qu'un utilisateur est bien connecté
if(!isset($_SESSION['user_id']))
{
    header('Location: /');
    exit;
}
// Vérification que l'utilisateur est bien un administrateur
$sql = "SELECT * FROM user WHERE id = " . $_SESSION['user_id'] . " AND is_admin = 1";
$res = $pdo->query($sql);
$user = $res->fetch(PDO::FETCH_ASSOC);

if(!$user)
{
    header('Location: /');
    exit;
}