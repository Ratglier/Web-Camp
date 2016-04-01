<?php //traitement php
session_start();
//il verifie si l utilisateur est admin
try
{
        $bdd = new PDO('mysql:host=mysql8.000webhost.com;dbname=a7119001_game','a7119001_admin','extcode1');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
if (isset($_POST['ajout2']))
{
    $bdd->query('INSERT INTO question_utilisateur (question, reponse, user) VALUES ("' . $_POST['question_utilisateur'] . '","' . $_POST['reponse_utilisateur'] .'","' . 'admin_extia");');
    echo 'INSERT INTO question_utilisateur (question, reponse, user) VALUES ("' . $_POST['question_utilisateur'] . '","' . $_POST['reponse_utilisateur'] .'","' . 'admin_extia");';
}
if (isset($_POST['ajout1']))
{
    $bdd->query('INSERT INTO question_extia (question, reponse) VALUES ("' . $_POST['question_extia'] . '","' . $_POST['reponse_extia'] . '")');
    echo 'INSERT INTO question_extia (question, reponse) VALUES ("' . $_POST['question_extia'] . '","' . $_POST['reponse_extia'] . '")';
}
//echo 'INSERT INTO question_extia (question, reponse) VALUES ("' . $_POST['question_extia'] . '","' . $_POST['reponse_extia'] . '")<br>';
//echo 'INSERT INTO question_utilisateur (question, reponse, user) VALUES ("' . $_POST['question_utilisateur'] . '","' . $_POST['reponse_utilisateur'] .'","' . 'admin_extia");';
if (isset($_POST['supprimer']))
{
       	$bdd->query('DELETE  FROM question_extia WHERE question="'.$_GET['question'].'";');
        echo 'DELETE  FROM question_extia WHERE question="'.$_GET['question'].'";';
}
if (isset($_POST['modif_jeu']))
{
$bdd->query('UPDATE Configuration SET question="'.$_POST['questionnb'].'",valide="'.$_POST['valide'].'",faux="'.$_POST['faux'].'",combo="'.$_POST['combo'].'" WHERE jeu="jeu1";');
//echo 'UPDATE Configuration SET question="'.$_POST['questionnb'].'",valide="'.$_POST['valide'].'",faux="'.$_POST['faux'].'",combo="'.$_POST['combo'].'" WHERE jeu="jeu1";';
}
header('Location: /martin/panel.php')
?>	