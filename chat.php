<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
$expediteur = $_GET['envoyeur'];
$destinataire = $_SESSION['login'];
$_SESSION['envoyeur'] = $destinataire;
$_SESSION['receveur'] = $expediteur;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="default.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/css1.css" type="text/css">
	<link rel="stylesheet" href="css/message.css" type="text/css">
	<script src="javascript2/active.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="chat.css"/>
	<title> Chat prive </title>
	<script type="text/javascript" src="./jquery.js"></script>
</head>
<body>
	<div id="header-wrapper">
		<div id="header" class="container">
			<div id="logo">
				<h1><a href="#"><img src="images/logo_extia.png" width="100px;" height="70px"></a></h1>
			</div>
			<div id="menu">
				<ul>
					<li><a href="index.php" accesskey="1" title="">Accueil</a></li>
					<li><a href="login.php" accesskey="2" title="">S'identifier</a></li>
					<li><a href="inscription.php" accesskey="3" title="">S'inscrire</a></li>
					<li><a href="jouer.php" accesskey="4" title="">Jouer</a></li>
					<li class="active"><a href="message.php"  accesskey="5" title="">Message</a></li>
					<li><a href="compte.php" accesskey="6" title="">Mes infos</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="chat-wrapper">
		<?php
		echo "<div class='titre'>" . $expediteur . "</div>";
		?>
		<div id="refresh" class="chat">
		</div>
		<div class="form">
			<input type="text" id="message" name="message" autocomplete="off">
			<button id="envoi" name="submit">envoyer</button>
		</div>
	</div>
	<script>
	var button = document.getElementById('envoi');
	var message = document.getElementById('message');

	var sendMessage = function (mess) {
		$.post("push_msg.php", {msg: mess});
	}
	button.onclick = function (ev) {
		if (message.value.length > 0)
		{
			sendMessage(message.value);
			message.value = null;
		}
	}

	var getMessage = function () {
		$.ajax({
			method: "GET",
			url: "get_msg.php",
			complete: function (data) {
				document.getElementById('refresh').innerHTML = data.responseText;
			}
		})
	}
	setInterval(getMessage, 1000);
	</script>
	<div id="copyright" class="container">
		<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.com" rel="nofollow">TEMPLATED</a>.</p><
		<center>  
			<a href="https://fr-fr.facebook.com/talentextia/"><IMG width="30px" height="30px" SRC="images/facebook.png"/></a>
			<a href="https://twitter.com/extia_conseil" style="padding:10px"><img src="images/Twitter8ICON.png" width="30px" height="30px"/></a> 
			<a href="https://www.linkedin.com/company/extia" style="padding=10px"><IMG width="30px" height="30px" SRC="images/linkedIn.png"/></a>
			<a href="https://www.instagram.com/explore/tags/extia/" style="padding:10px"><IMG width="30px" height="30px" SRC="images/instagram.png"/></a>
			<a href="https://plus.google.com/114940204847783162150/photos"><IMG width="30px" height="30px" SRC="images/logo_google.png"/></a>
		</center>
	</div>
</body>
</html>
