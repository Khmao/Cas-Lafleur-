
<?php


if(!isset($_REQUEST['action']))
	$action='Connexion';
     
else
	$action = $_REQUEST['action'];
switch ($action)
{
	case 'Connexion';
	{

		include("vues/v_connexion.php");
		break;

	}
	

	case 'VerifConnexion':

	{

		$_SESSION ['login']=$_REQUEST['login'];
	    $_SESSION['mdp']=$_REQUEST['mdp'];
	
	$laligne=connexion ($_SESSION['login'],$_SESSION['mdp']);

		
		if($laligne==0)
		{
			$message = "Cet administrateur n existe pasrticle est déjà dans le panier !!";
			include("vues/v_message.php");
			include("vues/v_connexion.php");
		}
		else
		$lesCategories = $pdo->getLesCategories();
		include("vues/v_categories.php");



  		
  		break;
	}


	case 'voirProduits' :
	{
		$lesCategories = $pdo->getLesCategories();
		include("vues/v_categories.php");
  		$categorie = $_REQUEST['categorie'];
		$lesProduits = $pdo->getLesProduitsDeCategorie($categorie);
		include("vues/v_produits.php");
		break;
	}

}
	
?>