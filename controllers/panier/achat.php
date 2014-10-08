<?php

if (isset($_POST) && $_POST)
{
	if (isset($_POST['action']) && $_POST['action'] == 'add')
	{
		if (isset($_SESSION['panier']))
		{
			if (!in_array($_POST['id_produit'], $_SESSION['panier']))
			{
				$_SESSION['panier'][] = $_POST['id_produit'];
			}
		}
		else
		{
			$_SESSION['panier'] = array($_POST['id_produit']);
		}
	}
}

$produits = array();

if (isset($_SESSION['panier']))
{
	$produitManager = new ProduitManager($db);
	$produits = $produitManager->getProduitCart($_SESSION['panier']);
}