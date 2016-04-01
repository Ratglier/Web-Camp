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
$expediteur = $_SESSION['envoyeur'];
$destinataire = $_SESSION['receveur'];
$message = $_POST['msg'];
echo var_dump($_POST);
$sql = $bdd->query("INSERT INTO messages (envoyeur, receveur, message) VALUES ('" . $expediteur . "', '" . $destinataire . "', '" . $message . "')");
?>
