<?php


//include_once '../entities/Categorie.php';
include_once '../../core/utilisateurC.php';

if(isset($_POST['login']) && isset($_POST['password']))
{
	$utilisateurC = new UtilisateurC();
	$result = $utilisateurC->verifierLogin($_POST['login'],$_POST['password']);
	if($result->count==0)
	{
		header("location: ../../views/frontt/fafficherchanteurFront.php");
	}
	else
	{
		session_start();
		$_SESSION['login'] = $result->login;
		$_SESSION['role'] = $result->role;
		$currentUrl = $_SESSION['currentURL'];
		header("location: ../../views/frontt/fafficherchanteurFront.php");
	}

}
else
{
	header("location: ../../views/frontt/fafficherchanteurFront.php");
}






 ?>