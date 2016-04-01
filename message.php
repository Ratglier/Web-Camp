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
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <link href="default.css" rel="stylesheet" type="text/css" media="all" />
  <link rel="stylesheet" href="css/css1.css" type="text/css">
  <link rel="stylesheet" href="css/message.css" type="text/css">
  <script src="javascript2/active.js" type="text/javascript"></script>

  <link rel="stylesheet" type="text/css" href="./message.css"/>
  <title> Messages Prives </title>
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
  <div id="message-wrapper">
    <div class="titre"><h2> Messages </h2></div>
    <?php
    $req0 = $bdd->query("SELECT envoyeur FROM messages WHERE receveur = '" . $_SESSION['login'] . "'");
    $tab0 = array();
    while ($mail = $req0->fetch())
    {
      array_push($tab0, $mail[0]);
    }
    $tab1 = array_unique($tab0);
    $x = 0;

    while (isset($tab1[$x]))
    {
     $req1 = $bdd->query("SELECT * FROM messages WHERE envoyeur  = '" . $tab1[$x] . "' ORDER BY date DESC LIMIT 1");
     $mail0 = $req1->fetch();
     if (strlen($mail0['message']) > 74)
     {
       $obj = substr($mail0['message'], 0, 74) . "[...]";
     }
     else
     {
       $obj = $mail0['message'];
     }
     echo "<a href='chat.php?envoyeur=". $mail0['envoyeur'] . "' class='message'><span class='nom'>" . $mail0['envoyeur'] . "</span><div class='contenu'>" . $obj . "<h6 class='envoie'>envoye le : " . $mail0['date'] . "</h6></div></a>";
     $x++;
   }
   ?>
 </div>
</div>
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