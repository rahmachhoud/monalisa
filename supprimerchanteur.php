<?php
include "../../entities/chanteur.php";
include "../../core/chanteurC.php";

if (isset($_POST['id'])  ){
$chanteur1=new chanteur($_POST['id'],"","","","","");
$chanteur1C=new chanteurC();
$chanteur1C->supprimer_chanteur($chanteur1);
header('Location: ../../views/back/formulairesupp.php');


	}
	else{
	echo "vérifier les champs";
}
	
	?>

