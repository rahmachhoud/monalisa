<?php
   include '../../entities/chanteur.php';
	require '../../core/chanteurC.php';
    if(isset($_POST["search"]))

{	
  $search=$_POST['search'];
	
	header("location: ../../views/frontt/fafficherchanteurFront.php?search=$search");}
	else  {
		echo "erreur";
	}
	

?>