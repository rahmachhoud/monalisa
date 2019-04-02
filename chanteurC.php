<?php
	include "config.php";

	class chanteurC
	{
        function ajouterchanteur($chanteur)
   		{    

   			$sql="insert into chanteur (id, nom, type) VALUES (:id, :nom, :type)";
   			$db = config::getConnexion();
   			try{
   				$req=$db->prepare($sql);

   				$id=$chanteur->get_id();
   				$nom=$chanteur->get_nom();
   				$type=$chanteur->get_type();
   				



   				$req->bindValue(':id',$id);
				$req->bindValue(':nom', $nom);
				$req->bindValue(':type', $type);
				
			
				$req->execute();


   			}
        	catch (Exception $e){
        		echo 'Erruer: ' .$e->getMessage();
        	}			
       }
     





		function afficherChanteur(){
		$sql="SElECT * From chanteur";
		$c = config::getConnexion();
		return ($c->query($sql));
		
	}



	function modifier_chanteur($chanteur)
	{
		$c = config::getConnexion();
		try{
		$stmt=$c->prepare("UPDATE chanteur SET nom=:nom,type=:type where id=:id");
		
		$stmt->bindValue(":nom",$chanteur->get_nom());
		$stmt->bindValue(":type",$chanteur->get_type());
	
		$stmt->bindValue(":id",$chanteur->get_id());
		$stmt->execute();
		
		}
		catch (Exception $e){
        		echo 'Erruer: ' .$e->getMessage();
        	}

	}

	function rechercherchanteur($search){

		$sql="SELECT * FROM produit WHERE id=:id";
		//connexion bd
	   $db = config::getConnexion();
	   //reqt sql
	   //fetch data
		$req=$db->prepare($sql);
		$req->bindValue(":id",$search);
		$req->execute();
	   $array = array();
	   while ($row = $req->fetch())
	   {
		   $p = new produit($row ['id'],$row ['nom'],$row ['type'],$row ['urlImage']);
		  
		   $array[] = $p;
	   }
	   return $array;
	

	}
	 function rechercherchanteurs($search)
	{
		$db = config::getConnexion();
		$sql = "SELECT * FROM chanteur WHERE MATCH(nom,type) AGAINST(:search IN NATURAL LANGUAGE MODE);";
		
		$req = $db->prepare($sql);
		$req->bindValue(':search',$search);
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}






function supprimer_chanteur($chanteur)
	{
		$c = config::getConnexion();
		try{
		$stmt=$c->prepare("DELETE FROM chanteur where id=:id1");
		
		
			$stmt->bindValue(":id1",$chanteur->get_id());
		$stmt->execute();
		
		}
		catch (Exception $e){
        		echo 'Erruer: ' .$e->getMessage();
        	}

	}
	 function findNextAutoIncrementId()
	{
		$db = config::getConnexion();
		$sql = "SELECT auto_increment FROM INFORMATION_SCHEMA.TABLES
				WHERE table_name = 'chanteur' LIMIT 1 OFFSET 1;";
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetch(PDO::FETCH_OBJ);
		return $result;
	}
	 function afficherChanteurPNG()
	{
		$db=Config::getConnexion();
		$sql="SELECT * FROM chanteur WHERE urlImage LIKE '%.png' OR '%.PNG'";
		$req = $db->prepare($sql);
   
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_OBJ);
		return $result;
	}
	
		function upload($index,$destination,$maxsize=FALSE,$extensions=FALSE)
{
  
     if (!isset($_FILES[$index]) OR $_FILES[$index]['error'] > 0) return FALSE;
  
     if ($maxsize !== FALSE AND $_FILES[$index]['size'] > $maxsize) return FALSE;
 
     $ext = substr(strrchr($_FILES[$index]['name'],'.'),1);
     if ($extensions !== FALSE AND !in_array($ext,$extensions)) return FALSE;
   
     return move_uploaded_file($_FILES[$index]['tmp_name'],$destination);
}
 function triNom()
	{
		$db = config::getConnexion();
    	$sql = "SELECT * FROM chanteur ORDER BY id ASC;";
		
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_OBJ);
		return $result;
	
	}
	 function triNomDesc()
	{
		$db = config::getConnexion();
    	$sql = "SELECT * FROM chanteur ORDER BY id DESC;";
		
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_OBJ);
		return $result;
	
	}
	

  function triNomA()
	{
		$db = config::getConnexion();
    	$sql = " SELECT * FROM chanteur ORDER BY nom ASC";
		
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_OBJ);
		return $result;
	
	}
  function triNomZ()
	{
		$db = config::getConnexion();
    	$sql = " SELECT * FROM chanteur ORDER BY nom DESC";
		
		$req = $db->prepare($sql);
		$req->execute();
		$result = $req->fetchAll(PDO::FETCH_OBJ);
		return $result;
	
	}
	}
?>
	



	
