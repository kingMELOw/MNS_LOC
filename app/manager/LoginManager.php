<?php

require '../entity/Login.php';
require_once '../manager/Manager.php';

class LoginManager extends Manager {

    public function getAll()
    {
        $sql = 'SELECT * FROM login';
        $req = $this->getPdo()->prepare($sql);
        $req->execute();
        $users = $req->fetchAll(PDO::FETCH_ASSOC);
        $result = [];
        foreach($users as $user)
        {
            $result[] = (new Login())->hydrate($user);
        }

        return $result;
    }

    public function insert(string $text) : int
    {
        $sql = "INSERT INTO login (text) VALUES (:text)";
        $req = $this->getPdo()->prepare($sql);
        $req->execute([
            'id_user' => $text,
        ]);

        return $this->getPdo()->lastInsertId();
    }

}