<?php

if(isset($_POST['submit']) && isset($_POST['id']))
{

    $sql = "DELETE * FROM login WHERE id = :id";
    $req = $pdo->prepare($sql);

    header('Location: /gestion.user.php'); die;

}