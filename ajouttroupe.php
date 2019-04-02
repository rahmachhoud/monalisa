<?php
include "../../entities/Troupe.php";
include "../../core/TroupeC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['type']) ){

	
	$troupe1C=new TroupeC();

	
$troupe1=new Troupe($_POST['id'],$_POST['nom'],$_POST['type']);

$troupe1C->ajouterTroupe($troupe1);


	header('Location: ../../views/back/formulaireajouttroupe.php');
		alert("troupe Ajouté");





	}
	else{
	echo "verifier les champs"; 
}
	
	?>

