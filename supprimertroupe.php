<?php
include "../../entities/Troupe.php";
include "../../core/TroupeC.php";

if (isset($_POST['id'])  ){
$chanteur1=new Troupe($_POST['id'],"","","","","");
$chanteur1C=new TroupeC();
$chanteur1C->supprimer_chanteur($chanteur1);
header('Location: ../../views/back/formulairesupptroupe.php');


	}
	else{
	echo "vérifier les champs";
}
	
	?>

