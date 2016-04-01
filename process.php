<?php
//verifier le bouton1
if($_GET['check'] == $_POST['check'])
{
echo $_POST['check'] . " Vous avez trouve la bonne  reponse ! " .$_GET['check'];
header('Location: /martin/jouer.php?result=valid');
}
else
{
echo "Vous vous etes trompe !". $_POST['check'];
header('Location: /martin/jouer.php?result=false');
}