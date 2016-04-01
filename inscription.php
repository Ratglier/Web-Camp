<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <script src="javascript2/verif.js" type="text/javascript"></script>
    
    
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
<li ><a href="index.php" accesskey="1" title="">Accueil</a></li>
<li><a href="pantheon.php" accesskey="2" title="">pantheon</a></li>
<li><a href="login.php" accesskey="2" title="">S'identifier</a></li>
<li class="active"><a href="inscription.php" accesskey="3" title="">S'inscrire</a></li>
</ul>
	      </ul>
	  </div>
	</div>
      </div>
    </div> 
    <div id="wrapper">
	<?php require_once('register.php') ?>
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
		