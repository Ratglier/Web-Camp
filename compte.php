<?php session_start() ;?>
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta charset="UTF-8">
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="javascript2/active.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/css1.css" type="text/css">

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>

<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
               	      <h1><a href="#"><img src="images/logo_extia.png" width="100px;" height="70px"></a></h1>
		</div>
		<div id="menu">
			<ul>
		<ul>
<li><a href="index.php" accesskey="1" title="">Accueil</a></li>
<li><a href="pantheon.php" accesskey="3" title="">Pantheon</a></li>
<li><a href="jouer.php" accesskey="2" title="">Jouer</a></li>
<li class="active"><a href="compte.php" accesskey="3" title="">Mes infos</a></li>
<li><a href="compte.php" accesskey="4" title="">Messages</a></li>
<li><a href="deconect.php" accesskey="5" title="">Se deconnecter</a></li>
</ul>
			</ul>
		</div>
	</div>
</div>
<div id="wrapper">
<br>
		<?php
if($_SESSION['login'])
{
    $_SESSION['counter'] = 0;
    $_SESSION['score'] = 0;	
    echo utf8_encode($_SESSION['nom'] . " " . $_SESSION['prenom'] . " Vous êtes connecté");
}
else
	echo utf8_encode(" Vous n'êtes pas connecté");
//$req = $bdd->query('INSERT INTO utilisateur (nom,prenom,email,pass) VALUES ("' . $_POST['nom'] . '","' . $_POST['prenom'] . '","' . $_POST['email'] . '","' . '"' . $_POST['pass'] . '";)');
?>
<div class="div3p">
          	<center><h2>Changer vos informations personnelles</h2></center>
                <br><br>
		<form method="POST" action="change.php">
		Nouveau nom: <input class="input" name="nom" type="text" value=<?php echo '"' . $_SESSION['nom'] . '"'; ?>><br><br>
		Nouveau prenom: <input class="input" name="prenom" type="text" value=<?php echo '"' . $_SESSION['prenom'] . '"';?>><br><br>
		Nouvel email: <input class="input" name="email" type="text" value=<?php echo '"' . $_SESSION['login'] . '"';?>><br><br>

		<center><h2>Changer votre mot de passe</h2><br><br></center>
		 Nouveau mot de passe: <input class="input" name="pass" type="password" placeholder="**********"><br><br>
		 Confirmez votre mot de passe: <input class="input" name="pass1" type="password" placeholder="**********"><br><br>
		<center><input class="button" type="submit" value="MISE A JOUR"></center><br><br><br>
	</form>
</div>
</div>

<div id="copyright" class="container">
		<?php 
$date = date("d-m-Y");
$heure = date("H:i");
echo  '<h2 style="color:orange;">'.$_SESSION['nom'] .' '.$_SESSION['prenom'] .' '.$date;
?>
	<center>	
           <a href="https://fr-fr.facebook.com/talentextia/"><IMG width="30px" height="30px" SRC="images/facebook.png"/></a>
           <a href="https://twitter.com/extia_conseil" style="padding:10px"><img src="images/Twitter8ICON.png" width="30px" height="30px"/></a> 
          <a href="https://www.linkedin.com/company/extia" style="padding=10px"><IMG width="30px" height="30px" SRC="images/linkedIn.png"/></a>
	   <a href="https://www.instagram.com/explore/tags/extia/" style="padding:10px"><IMG width="30px" height="30px" SRC="images/instagram.png"/><a>
	   <a href="https://plus.google.com/114940204847783162150/photos"><IMG width="30px" height="30px" SRC="images/logo_google.png"/></a>
       </center>
     </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
	<script src="javascript2/jquery.stickyheader.js"></script>
    </body>
</html>
		