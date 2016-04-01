<?php
session_start() ;
$dossier = 'img/' ;
$fichier = date("d-m-Y")  . basename($_FILES['avatar']['name']);
$taille_maxi = 100000;
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.gif', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.');
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
}
if($taille>$taille_maxi)
{
     $erreur = 'Le fichier est trop gros...';
}
if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier,
          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier . $fichier)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
}
else
{
     echo $erreur;
}
//ajout dans la base
$flag =	1;
$n = 0;
try
{
	$bdd = new PDO('mysql:host=mysql8.000webhost.com;dbname=a7119001_game','a7119001_admin','extcode1');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}
$response = $bdd->query('SELECT email FROM utilisateur;');
while($mail = $response->fetch())
{
$n = $n + 1;
	if ($mail[0] == $_POST['email'])
	{
		$flag = 0;
		echo 'Cette adresse est deja utilisee\n';
	}
	else
	{
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];		
         }
}
if (isset($nom) && $flag == 1)
{
        echo 'INSERT INTO  utilisateur (nom, prenom, email, pass, img) VALUES ('." '".htmlentities($nom)."','".htmlentities($prenom)."' , '".$email."','".$pass."','".$fichier."');";
	$bdd->query( 'INSERT INTO  utilisateur (nom, prenom, email, pass, img) VALUES ('." '".htmlentities($nom)."','".htmlentities($prenom)."' , '".$email."','".$pass."','".$fichier."','". $_POST[sexe]."');");
	$_SESSION['login'] = htmlentities($_POST['email']);
        $_SESSION['nom'] = htmlentities($_POST['nom']);
        $_SESSION['prenom'] = htmlentities($_POST['prenom']);
        $_SESSION['score'] = 0;
        $_SESSION['counter'] = 0;
header('Location: compte.php');
}
echo 'INSERT INTO  utilisateur (nom, prenom, email, pass, img, sexe) VALUES ('." '".$nom."','".$prenom."' , '".$email."','".$pass."','".$_FILES['avatar']['name']."','". $_POST[sexe]."');";
header('Location: compte.php');
?>
