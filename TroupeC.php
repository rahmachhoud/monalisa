<?PHP
include "config.php";
class TroupeC {


	function ajouterTroupe($troupe)
	{    

		$sql="insert into troupe (id, nom, type) VALUES (:id, :nom, :type)";
		$db = config::getConnexion();
		try{
			$req=$db->prepare($sql);

			$id=$troupe->get_id();
			$nom=$troupe->get_nom();
			$type=$troupe->get_type();
			



			$req->bindValue(':id',$id);
		 $req->bindValue(':nom', $nom);
		 $req->bindValue(':type', $type);
		 
	 
		 $req->execute();


		}
	 catch (Exception $e){
		 echo 'Erruer: ' .$e->getMessage();
	 }						
}
	
	
	function afficherTroupe(){
		$sql="SElECT * From troupe";
		$c = config::getConnexion();
		return ($c->query($sql));
	}
	function supprimerTroupe($id){
		$c = config::getConnexion();
		try{
		$stmt=$c->prepare("DELETE FROM troupe where id=:id1");
		
		
			$stmt->bindValue(":id1",$Troupe->get_id());
		$stmt->execute();
		
		}
		catch (Exception $e){
        		echo 'Erruer: ' .$e->getMessage();
        	}
	}
	function modifierTroupe($Troupe,$id){
		$sql="UPDATE troupe SET id=:idd, nom=:nom,type=:type WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$cinn=$employe->getCin();
        $nom=$employe->getNom();
        $prenom=$employe->getPrenom();
        $nb=$employe->getNbHeures();
        $tarif=$employe->getTarifHoraire();
		$datas = array(':idd'=>$idd, ':id'=>$id, ':nom'=>$nom,':type'=>$type);
		$req->bindValue(':idd',$idd);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererTroupe($id){
		$sql="SELECT * from troupe where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeTroupe($n){
		$sql="SELECT * from troupe where nom=$n";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>