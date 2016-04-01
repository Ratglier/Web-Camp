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
$destinataire = $_SESSION['envoyeur'];
$expediteur = $_SESSION['receveur'];

$sql = $bdd->query("SELECT * FROM messages WHERE (envoyeur='" . $expediteur  . "' AND receveur='" . $destinataire . "') OR (envoyeur='" . $destinataire . "' AND receveur='" . $expediteur . "') ORDER BY date ASC");
while($chat = $sql->fetch())
{
        if ($chat['envoyeur'] == $expediteur)
        {
                echo "<div id='toi' class='truc'><p class='nom'>" . $expediteur . " : </p>" . $chat['message'] . "<p class='date'>envoye le : " . $chat['date'] . "</p></div><br>";
        }
        else
        {
                echo "<div id='moi' class='truc'><p class='nom'>moi : </p>" . $chat['message'] . "<p class='date'>envoye le : " . $chat['date'] . "</p></div><br>";
        }
}
?>
