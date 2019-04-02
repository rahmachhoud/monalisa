<?php
include "../../entities/chanteur.php";
include "../../core/chanteurC.php";
/*if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['type']) ){

$id=$_POST["id"];
$nom=$_POST["nom"];
$type=$_POST["type"];
$image=$_FILES["urlImage"];

// upload image
$image = "" ;
if (!empty($_FILES)) {
	$file = $_FILES['urlImage'];
	if ($file['name'] != '') {
		$ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
		$extensions = array("jpg","png");
		if (in_array($ext, $extensions)) {
			$name_p = $file['name'];
			$path = "img/".$name_p;
			if (move_uploaded_file($file['tmp_name'], $path)) {
				$image = $name_p;
			}
		}
	}
}



//$cat=$_POST['categorie'];
//$Catu=(int)$cat;

//  $Message='produit Added';

$plat=new chanteur($id, $nom, $type, $image);
  var_dump($plat);

  $platc=new chanteurC();
$platc->ajouterchanteur($plat);

header('Location: ../../views/back/formulaireajout.php');

alert("chanteur Ajouté");
}
else{
	echo "verifier les champs"; 
}
*/
if (isset($_POST['id']) and isset($_POST['nom']) and isset($_POST['type']) ){

	
	$chanteur1C=new chanteurC();

	
$chanteur1=new chanteur($_POST['id'],$_POST['nom'],$_POST['type']);

$chanteur1C->ajouterchanteur($chanteur1);


	header('Location: ../../views/back/formulaireajout.php');
		alert("chanteur Ajouté");





	}
	else{
	echo "verifier les champs"; 
}
	
	?>

