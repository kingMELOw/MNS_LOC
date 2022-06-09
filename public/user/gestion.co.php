<?php

require './dbConnect.php';

$sql = "SELECT * FROM login";
$req = $pdo->query($sql);
$users = $req->fetchAll(PDO::FETCH_ASSOC);