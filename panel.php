<html>
	<head>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" href="css/css1.css" type="text/css">
		<link rel="stylesheet" href="default.css" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<title>Admin page</title>
	</head>
	<body>
	<center><h1>Panel Admin</h1></center>
	<center><div class="div2p">
			<center><b>Edition du questionnaire EXTIA</b><br><br></center>
                        
			<header>
			</header>
			<div class="component">
				<table>
					<thead>
						<tr>
							<th class="classement">Numero</th>
							<th class="nom">Question</th>
							<th class="score">Reponse</th>
							<th class="rang">Points</th>
                                                        <th class="rang">Actions</th>
						</tr>
					</thead>
                                        <tbody>
<?php 
try
{
        $bdd = new PDO('mysql:host=mysql8.000webhost.com;dbname=a7119001_game','a7119001_admin','extcode1');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$req0 = $bdd->query('SELECT question FROM question_extia');
$req1 = $bdd->query('SELECT reponse FROM question_extia');
$n = 1;
while ( ($res0 = $req0->fetch()) && ($res1 = $req1->fetch()) )
{
        //echo '<form method="POST" action="admin.php?question='.$res0[0].'">' . $res0[0] . ' : ' . $res1[0];
        //echo '<input name="modifier" type="submit" value="modifier" style="padding:20px;">';
        //echo '<input name="supprimer" type="submit" value="supprimer" style="padding:20px;"></form>';
        echo '<tr>';
        echo '<th>'.$n.'</th>';
        echo '<td><form method="POST" action="admin.php?question='.$res0[0].'">'.$res0[0].'</td>';
        echo '<td>'.$res1[0].'</td>';
        echo '<td>50</td>';
        echo '<td><input name="supprimer" src="img/delete.png" type="image" value="submit" style="margin:20px;"></td></form>';
        echo '</tr>';
$n++;
}
?>               
        </tbody>
        </table>
        <br>
<div class="div1p">
                            <center><b>Ajouter une question utilisateur</b></center><br>
			    <form method="POST" action="admin.php">
				    Nouvelle question :<input type="text" name="question_extia" placeholder="question" ><br><br>
				    Entrer la reponse a la question ci-dessus :<input type="text" name="reponse_extia" placeholder="reponse">
				    <input class="button" type="submit" value="Ajouter" name="ajout1" style="float:right; margin-right: 50px; margin-top: -20px;" class="mybutton">
				    <br>
                            </form>
                        
		        </div>
        </div>
        </div><center>
        <br>
        <center><div class="div2p">
			<center><b>Edition du questionnaire utilisateur</b><br><br></center>
                        
			<header>
			</header>
			<div class="component">
				<table>
					<thead>
						<tr>
							<th class="classement">Numero</th>
							<th class="nom">Question</th>
							<th class="rang">Points</th>
                                                        <th class="rang">Actions</th>
						</tr>
					</thead>
                                        <tbody>
<?php 
try
{
        $bdd = new PDO('mysql:host=mysql8.000webhost.com;dbname=a7119001_game','a7119001_admin','extcode1');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
$req0 = $bdd->query('SELECT question FROM question_utilisateur');
$req1 = $bdd->query('SELECT reponse FROM question_utilisateur');
$n = 1;
while ( ($res0 = $req0->fetch()) && ($res1 = $req1->fetch()) )
{
        //echo '<form method="POST" action="admin.php?question='.$res0[0].'">' . $res0[0] . ' : ' . $res1[0];
        //echo '<input name="modifier" type="submit" value="modifier" style="padding:20px;">';
        //echo '<input name="supprimer" type="submit" value="supprimer" style="padding:20px;"></form>';
        echo '<tr>';
        echo '<th>'.$n.'</th>';
        echo '<td>'.$res0[0].'</td>';
        echo '<td>50</td>';
        echo '<td><input name="supprimer" src="img/delete.png" type="image" value="submit" style="margin:20px;"></td></form>';
        echo '</tr>';
$n++;
}
?>
</table> 
<br>
<div class="div1p">
		<center><b>Ajouter une question utilisateur</b></center><br>
                <form method="POST" action="admin.php">
                Nouvelle question :<input type="text" name="question_utilisateur"  placeholder="question" >
                <input class="button" type="submit" value="Ajouter" name="ajout2" class="mybutton"  style="float:right; margin-right: 50px; margin-top: -20px;">
                </form>
        </div>		
        </div>
        </div></center>
<br>	<center><div class="div2p">

			<center><b>Configuration du jeu Who Is Who</b><br><br></center>
<form action="admin.php" method="POST">
Nombre de question <input type="text" name="questionnb" size="4"><br>
Nombre de points pour une bonne reponse: <input name="valide" type="text" size="4"><br>
Nombre de points pour une mauvaise reponse: <input name="faux" type="text" size="4"><br>
Configuration des combos :<br>
 SANS <INPUT type="radio" name="combo" value="sans">
 FAIBLE <INPUT type="radio" name="combo" value="faible">
 MOYEN <INPUT type="radio" name="combo" value="moyen">
 FORT <INPUT type="radio" name="combo" value="fort">
<center><input type="submit" value="mise a jour" name="modif_jeu"></center>
</form>
       </div><br><br>

<center><div class="div2p">
<center><b>Edition des comptes</b><br><br></center>
<form action="admin.php" method="POST">
<center>Statut du compte :<br><br></center>
<center>Admin <INPUT type="radio" name="statut" value="admin"></center><br>
<center>Utilisateur <INPUT type="radio" name="statut" value="user"></center><br>
<center><input type="submit" value="mise a jour" name="modif_user"></center>
</form>
              </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
	<script src="javascript2/jquery.stickyheader.js"></script>
	</body>
</html>
			