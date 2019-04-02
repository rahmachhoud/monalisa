<?php
include "../../entities/chanteur.php";
include "../../core/chanteurC.php";

if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['type']) ){
$chanteur1=new chanteur($_POST['id'],$_POST['nom'],$_POST['type']);
$chanteur1C=new chanteurC();
$chanteur1C->modifier_chanteur($chanteur1);



header('Location: ../../views/back/formulairemodif.php');
echo "admin modifier";
	}
else echo "verifier les champ";
	?>

