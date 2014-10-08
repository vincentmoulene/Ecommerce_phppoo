<?php

class UserManager
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function hasConnected($login, $mdp)
    {
        $sql = 'SELECT * FROM user WHERE login = :login AND mdp = :mdp';
        $req = $this->db->prepare($sql);
        //$req->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, "categorie");
        $req->execute(array(
            ':login' => $login,
            ':mdp' => md5($mdp),
            ));
        $user =  $req->fetch();
        if ($user)
        {
            return true;
        }
        return false;
    }
}