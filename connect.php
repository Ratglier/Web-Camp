<?php
session_start();
try
{
        $bdd = new PDO('mysql:host=mysql8.000webhost.com;dbname=a7119001_game','a7119001_admin','extcode1');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
if ((isset($_POST['email']) && !empty($_POST['email'])) && (isset($_POST['pass']) && !empty($_POST['pass'])))
   {
	$sql = 'SELECT count(*) FROM utilisateur WHERE email="'.mysql_escape_string($_POST['email']).'" AND pass="'.mysql_escape_string($_POST['pass']).'"';
	$req = $bdd->query($sql);
	$flag = $req->fetch();
	if ($flag[0] == '1')
	{
		$req1 = $bdd->query('SELECT nom FROM utilisateur WHERE email = '."'".$_POST['email']."'");
		$res1 =	$req1->fetch();
		$req2 =	$bdd->query('SELECT prenom  FROM utilisateur WHERE email = '."'".$_POST['email']."'");
		$res2 =	$req2->fetch();
                $_SESSION['combo'] = 1;
		$_SESSION['login'] = $_POST['email'];
		$_SESSION['nom'] = $res1[0];
		$_SESSION['prenom'] = $res2[0];
		header('Location:compte.php');
		exit();
	}
	elseif ($flag[0] == 0)
	{
		echo 'Compte non reconnu.';
	}
	else
	{
		echo 'ProbÃ¨me dans la base de donnÃ©es : plusieurs membres ont les mÃªmes identifiants de connexion.';
	}
}
else
{
	echo 'Au moins un des champs est vide.';
}
?>
<br><a href='/martin/index.php'>Revenir a la page d'accueil</a>
