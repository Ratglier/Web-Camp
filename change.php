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
$req = $bdd->query('UPDATE utilisateur SET nom="'.$_POST['nom'].'",prenom="'.$_POST['prenom'].'",email="'.$_POST['email'].'" WHERE email="' . $_SESSION['login'] .'";');

$_SESSION['nom'] = htmlentities($_POST['nom']);
$_SESSION['prenom'] = htmlentities($_POST['prenom']);
$_SESSION['login'] = htmlentities($_POST['email']);

if (!empty($_POST['pass']))
{
        $req = $bdd->query('UPDATE utilisateur SET pass="'.$_POST['pass'].'" WHERE email="' . $_SESSION['login'] .'";');
	//echo 'UPDATE utilisateur SET pass="'.$_POST['pass'].'" WHERE email="' . $_SESSION['login'] .'";';
}
?>