<?php
include_once "config.php";
	class UtilisateurC
	{
		public function verifierLogin($login,$password)
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS count,login,password FROM utilisateur WHERE login = :login AND password = :password AND role = 1 LIMIT 1';
			$req = $db->prepare($sql);
			$req->bindValue(':login',$login);
			$req->bindValue(':password',$password);
			$req->execute();
			$result = $req->fetch(PDO::FETCH_OBJ);
			return $result;
		}

		public function verifierLoginFront($login,$password)
		{
			$db = config::getConnexion();
			$sql = 'SELECT COUNT(*) AS count,login,password,idUtilisateur,nom,prenom,email FROM utilisateur WHERE login = :login AND password = :password LIMIT 1';
			$req = $db->prepare($sql);
			$req->bindValue(':login',$login);
			$req->bindValue(':password',$password);
			$req->execute();
			$result = $req->fetch(PDO::FETCH_OBJ);
			return $result;
		}
		public function rechercherMail($idUtilisateur)
		{
			$db = config::getConnexion();
			$sql='select email from utilisateur where idUtilisateur=:ID';
			$req = $db->prepare($sql);
			$req->bindValue(':ID',$idUtilisateur);
			$req->execute();
			return $req;

		}


	}

		


 ?>