<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="css/css1.css" type="text/css">
      <script src="javascript2/active.js" type="text/javascript"></script>
      <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body>
      <div id="header-wrapper">
	<div id="header" class="container">
	  <div id="logo">
	    <h1><a href="#"><img src="images/logo_extia.png" width="100px;" height="70px"></a></h1>
	    </div>
	    <div id="menu">
<?php
if(isset($_SESSION['login']))
{
echo	      '<ul>';
echo		'<li class="active"><a href="index.php" accesskey="1" title="">Accueil</a></li>';
echo         '<li><a href="pantheon.php" accesskey="3" title="">Pantheon</a></li>';
echo		'<li><a href="jouer.php" accesskey="2" title="">Jouer</a></li>';
echo		'<li><a href="compte.php" accesskey="3" title="">Mes infos</a></li>';
echo		'<li><a href="message.php" accesskey="4" title="">Messages</a></li>';
echo		'<li><a href="deconect.php" accesskey="5" title="">se deconnecter</a></li>';
echo	      '</ul>';
 $_SESSION['counter'] = 0;
 $_SESSION['score'] = 0;
}
else
{
echo	      '<ul>';
echo		'<li class="active"><a href="index.php" accesskey="1" title="">Accueil</a></li>';
echo         '<li><a href="pantheon.php" accesskey="3" title="">Pantheon</a></li>';
echo		'<li><a href="login.php" accesskey="2" title="">S\'identifier</a></li>';
echo		'<li><a href="inscription.php" accesskey="3" title="">S\'inscrire</a></li>';
echo	      '</ul>';
}
?>
	    </div>
	  </div>
	</div>
	
	<div id="wrapper"><br><br><br><br><br><br><br><br>
	  <h2>TESTEZ VOS CONNAISSANCES SUR VOS COLLEGUES</h2><br><br>
                           <h2>WHO'S WHO LE JEU<h2><br><br>
		<center><p>Les regles du du jeu sont simples<p></center>
                <center><p>Une photo de l'un de vos collegues s'affiche.<p></center>
                <center><p>Trois noms vous sont proposes.<p></center>
                <center><p>A vous de choisir le nom exact.<p></center>
                <p>Creez vous un compte et faites une partie !<p>
		<a href="jouer.php" class="myButton" style="margin-top:150px;">JOUER</a>
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
								