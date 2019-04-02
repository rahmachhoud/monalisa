<?php require_once("config.php");

if($_POST)
{
    debug($_POST);
    $verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $_POST['idUtilisateur']); 
    if(!$verif_caractere && (strlen($_POST['idUtilisateur']) < 1 || strlen($_POST['idUtilisateur']) > 20) ) // 
    {
        $contenu .= "<div class='erreur'>Le idUtilisateur doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
    }
    else
    {
        $membre = executeRequete("SELECT * FROM utilisateur WHERE idUtilisateur='$_POST[idUtilisateur]'");
        if($membre->num_rows > 0)
        {
            $contenu .= "<div class='erreur'>idUtilisateur indisponible. Veuillez en choisir un autre svp.</div>";
        }
        else
        {
            // $_POST['mdp'] = md5($_POST['mdp']);
            foreach($_POST as $indice => $valeur)
            {
                $_POST[$indice] = htmlEntities(addSlashes($valeur));
            }
            executeRequete("INSERT INTO utilisateur (idUtilisateur, password, nom, prenom, email) VALUES ('$_POST[idUtilisateur]', '$_POST[password]', '$_POST[nom]', '$_POST[prenom]', '$_POST[email]')");
            $contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
        }
    }
}
?>