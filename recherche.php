<?php
try
{
        $bdd = new PDO('mysql:host=mysql8.000webhost.com;dbname=a7119001_game','a7119001_admin','extcode1');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
if(isset($_POST['recherche2']) )
{
$req0 = $bdd->query('SELECT * FROM utilisateur WHERE prenom LIKE "%' . $_POST['recherche2'] . '%";');
while($res0 = $req0->fetch())
{
   echo '<br>USER '.$res0[0]; 
}
}
elseif(isset($_POST['recherche1']))
{
$req1 = $bdd->query('SELECT * FROM utilisateur WHERE nom LIKE "%' . $_POST['recherche1'] . '%";');
while($res1 = $req1->fetch())
{
   echo '<br>EMAIL: '.$res1[0]." NOM : ".$res[1]." PRENOM: ".$res[2]; 
}
}
echo 'SELECT * FROM utilisateur WHERE nom LIKE "%' . $_POST['recherche1'] . '%";<br>';
echo 'SELECT * FROM utilisateur WHERE prenom LIKE "%' . $_POST['recherche2'] . '%";';


?>
<center><h2>Recherchez un compte</h2><br><br></center>
<form method="post" action="#"><br>
Faire une rechercher par prenom <input type="text" name="recherche2"><br>
<center><input type="submit" value="submit1"></center>
</form><br><br>
<form method="post" action="#"><br>
Faire une recherche par nom <input type="text" name="recherche1"><br>
<center><input type="submit" value="submit2"></center>
</form>
