<?php
include "../../entities/Troupe.php";
include "../../core/TroupeC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['type']) ){
$chanteur1=new Troupe($_POST['id'],$_POST['nom'],$_POST['type']);
$chanteur1C=new TroupeC();
$chanteur1C->modifier_chanteur($chanteur1);



header('Location: ../../views/back/formulairemodiftroupe.php');
echo "admin modifier";
	}
else echo "verifier les champ";
	?>

