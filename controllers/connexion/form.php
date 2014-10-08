<?php

if (isset($_POST) && $_POST)
{
    if (isset($_POST['login'], $_POST['mdp'])
        && !empty($_POST['login'])
        && !empty($_POST['mdp']))
    {
        $userManager = new UserManager($db);
        if ($userManager->hasConnected($_POST['login'], $_POST['mdp']))
        {
            $_SESSION['user']['login'] = $_POST['login'];
            $_SESSION['user']['mdp'] = $_POST['mdp'];
            header('Location:add-produit.php');
        }
    }
}