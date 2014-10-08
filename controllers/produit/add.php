<?php

if (!isset($_SESSION['user']))
{
	header('Location:connexion.php');
}

if (!isset($_SESSION['user']['login'], $_SESSION['user']['mdp']))
{
	header('Location:connexion.php');
}

$userManager = new UserManager($db);
if (!$userManager->hasConnected($_SESSION['user']['login'], $_SESSION['user']['mdp']))
{
	header('Location:connexion.php');
}


if (isset($_POST) && $_POST)
{
	if (isset($_POST['titre'], $_POST['contenu'], $_POST['prix'], $_FILES, $_FILES['image']))
	{
		if ($_FILES['image']['error'] == 0) 
		{
			$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
			$extension_upload = strtolower(substr(strrchr($_FILES['image']['name'], '.')  ,1));
			// if (preg_match("/[png|jpg|jpeg|gif]/", $extension_upload)) avec une regex
			if ( in_array($extension_upload,$extensions_valides) )
			{
				$nom = str_replace(' ', '-', $_POST['titre']).'-'.uniqid();
				$nom = $nom.strrchr($_FILES['image']['name'], '.');

				$resultat = move_uploaded_file($_FILES['image']['tmp_name'],UPLOAD_DIR.$nom);
				if ($resultat)
				{
					$produit = new Produit();
					$produit->hydrate($_POST);
					$produit->setImage($nom);

					$produitManager = new ProduitManager($db);
					$produitManager->save($produit);
				}
			}
		}
	}
}

?>