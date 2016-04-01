<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/css1.css" rel="stylesheet" type="text/css" media="all" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<script src="javascript2/active.js" type="text/javascript"></script>
<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
</head>
<body>
<div id="header-wrapper" >
  <div id="header" class="container">
    <div id="logo">
      <h1><a href="#"><img src="http://blog.kilix.fr/img/logo_extia.png" width="100px;" height="70px"></a></h1>
    </div>
    <div id="menu">
<?php 
session_start();
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
echo '</div>';
echo    '</div>';
echo  '</div>';
echo '<div id="wrapper">';
}
else
{
echo	      '<ul>';
echo		'<li class="active"><a href="index.php" accesskey="1" title="">Accueil</a></li>';
echo         '<li><a href="pantheon.php" accesskey="3" title="">Pantheon</a></li>';
echo		'<li><a href="login.php" accesskey="2" title="">S\'identifier</a></li>';
echo		'<li><a href="inscription.php" accesskey="3" title="">S\'inscrire</a></li>';
echo	      '</ul>';
echo '</div>';
echo    '</div>';
echo  '</div>';
echo '<div id="wrapper">';
}
try
{
    $bdd = new PDO('mysql:host=mysql8.000webhost.com;dbname=a7119001_game','a7119001_admin','extcode1');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
echo 'SELECT * FROM Configuration WHERE jeu="jeu1";';
$req2 = $bdd->query('SELECT * FROM Configuration WHERE jeu="jeu1";');
$res2 = $req2->fetch();

if(isset($_SESSION['login']))
{
  echo '<div class="div3p">';
  echo '<center><h1><b>Who Is Who</b></h1></center>';
  if ($_SESSION['counter'] != $res2['question'])
  {
    $_SESSION[reponse][$_SESSION[counter]] = $_GET['check'];    
    if( ($_GET['check'] == preg_replace('/\s/', '', $_POST['check'])) && !empty($_POST['check']) )
    {
      echo "<center><h2><b style='color:green;'> Vous avez trouve la bonne  reponse ! Vous ganez :</b></h2></center>"."  ".$_SESSION['points'];
      $_SESSION[result][$_SESSION[counter]] = 'valid';
      if($res2['combo'] == 'sans')
      {
        $_SESSION[score]  = $res2['valide'];
        $_SESSION[score]  += $_SESSION[points];
      }
      if($res2['combo'] == 'faible') 
      {
        $_SESSION[points] = $res2['valide'] * $_SESSION[combo];
        $_SESSION[score]  += $_SESSION[points];
      }
      if($res2['combo'] == 'moyen')
      {
        $_SESSION[points] = $res2['valide'] * $_SESSION[combo] *2;
        $_SESSION[score]  += $_SESSION[points];
      }
      if($res2['combo'] == 'fort') 
      {
        $_SESSION[points]  = $res2['valide'] * $_SESSION[combo] * $_SESSION[combo];
        $_SESSION[score]  += $_SESSION[points];
      }
    $_SESSION[combo]++;
    }
    elseif ($_GET['check'] != preg_replace('/\s/', '', $_POST['check']) && !empty($_POST['check']))
    {
      echo "<center><h2><b style='color:red;' > Vous vous etes trompe ! Vous perdez :</b></h2></center>"."  ".$_SESSION['points'];
      $_SESSION[result][$_SESSION[counter]] = 'false';
      if($res2['faux'] >0)      
      {   
          $_SESSION[points] = $res2['faux'];
          $_SESSION[score] -= $res2['faux'];
      }
      else
      {
           $_SESSION[points] = $res2['faux'];
           $_SESSION[score] += $res2['faux'];
      }
      $_SESSION[combo] = 1;
    }
    $req1=$bdd->query('SELECT sexe FROM utilisateur ORDER BY RAND() LIMIT 1');
    $res1 = $req1->fetch();
    $req0=$bdd->query('SELECT * FROM utilisateur WHERE sexe='.$res1[0].' ORDER BY RAND() LIMIT 3;');
    //echo 'SELECT * FROM utilisateur WHERE sexe='.$res1[0].' ORDER BY RAND() LIMIT 3;';
    $res0 = $req0->fetch();
    echo "<center><img src='/martin/img/".$res0["img"]."' height='350px' width='300px'><br></center>";
    $rand = array();
    $fullname0 = $res0['prenom'] . " ". $res0['nom'];
    $res0 = $req0->fetch();
    $fullname1 = $res0['prenom'] . " ". $res0['nom'];
    $res0 = $req0->fetch();
    $fullname2 = $res0['prenom'] . " ". $res0['nom'];
    $res0 = $req0->fetch();
    array_push($rand, $fullname0, $fullname1, $fullname2);
    $var1 = $rand[rand(0, 2)];
    $var2 = $rand[rand(0, 2)];
    $var3 = $rand[rand(0, 2)];
    while ($var2 == $var1)
    {
      $var2 = $rand[rand(0, 2)];
    }
    $var3 = $rand[rand(0, 2)];
    while ($var3 == $var1 OR $var3 == $var2)
    {
      $var3 = $rand[rand(0, 2)];
    }
    echo "<center><form method='POST' action=jouer.php?check=".preg_replace('/\s/', '', $fullname0)."><br><input type='hidden' name='check' value='".$var1."'><input type='submit' name='button1' class='myButton' value='".$var1."' ></form><br>";
    echo "<center><form method='POST' action=jouer.php?check=".preg_replace('/\s/', '', $fullname0)."><br><input type='hidden' name='check' value='".$var2."'><input type='submit' name='button2' class='myButton' value='".$var2."' ></form><br>";
    echo "<center><form method='POST' action=jouer.php?check=".preg_replace('/\s/', '', $fullname0)."><br><input type='hidden' name='check' value='".$var3."'><input type='submit' name='button3' class='myButton' value='".$var3."' ></form><br>";
    echo '</div>';
      echo '</div>';
  $_SESSION['counter']++;
  }
  else
  {
      $_SESSION[reponse][$res2['question']] = $_GET['check'];   
      if( ($_GET['check'] == preg_replace('/\s/', '', $_POST['check'])) && !empty($_POST['check']) )
      {
        $_SESSION[result][$res2['question']] = 'valid';
        if($res2['combo'] == 'sans')
        {
          $_SESSION[score]  += $res2['valide'];
        }
        if($res2['combo'] == 'faible') 
        {
          $_SESSION[score]  += $res2['valide'] * $_SESSION[combo];
        }
        if($res2['combo'] == 'moyen')
        {
          $_SESSION[score]  += $res2['valide'] * $_SESSION[combo] * 2;
        }
        if($res2['combo'] == 'fort') 
        {
          $_SESSION[score]  += $res2['valide'] * $_SESSION[combo] * $_SESSION[combo];
        }
      }
      if( ($_GET['check'] != preg_replace('/\s/', '', $_POST['check'])) && !empty($_POST['check']) )
      {
        $_SESSION[result][$res2['question']] = 'false';
         if($res2['faux'] >0)      
         {
           $_SESSION[score] -= $res2['faux'];
         }
         else
         {
           $_SESSION[score] += $res2['faux'];
         }
      }
      $_SESSION[combo] = 1;
      echo '<h2>Vous avez realise le score de  '.$_SESSION['score'].' points</h2>';
      for ($i = 0 ; $i <= $res2['question']; $i++)
      {
	if ($_SESSION[result][$i] == 'valid')
	{
	        echo '<br><b>La bonne reponse etait : '.$_SESSION[reponse][$i].' , </b> <b style="color:green;"> vous avez vu juste.</b>';
	}
	elseif($_SESSION[result][$i] == 'false')
	{
		echo '<br><b>La bonne reponse etait : '.$_SESSION[reponse][$i].' , </b> <b style="color:red;"> vous avez eu faux.</b>';
	}
     }
     echo '<br><br><center><button class="myButton" value="Rejouer"/><a style="color:white;" href="jouer.php">Rejouer</a></button><center>';
     echo '</div>';
     $_SESSION['counter'] = 0;
     $bdd->query( 'INSERT INTO statistiques (nom,prenom,scores) VALUES ("'.$_SESSION['nom'].'","'.$_SESSION['prenom'].'","'.$_SESSION['score'].'")');
     $_SESSION['score'] = 0;
  }
}

 else
 {
    echo '<div id="wrapper">';
    echo '<p style="font-size:25; margin-top:150px;"><b>Vous devez vous connecter ou vous inscrire pour pouvoir jouer</b></p>';
    echo '<a href="index.php" style="margin-top: 20px;"> Revenir a la page precedente </a>';
    echo '</div>';
 }
?>

<div id="copyright" class="container">
  	<?php 
$date = date("d-m-Y");
$heure = date("H:i");
echo  '<h2 style="color:orange;">'.$_SESSION['nom'] .' '.$_SESSION['prenom'] .' '.$date;
?>
<center>																						       
         <a href="https://fr-fr.facebook.com/talentextia/"><IMG width="30px" height="30px" SRC="http://www.proavancia.com/images/facebook.png"/></a>
         <a href="https://twitter.com/extia_conseil" style="padding:10px"><img src="http://www.carre-rg.fr/wp-content\/uploads/2015/02/Twitter8ICON.png" width="30px" height="30px"/></a>           <a href="https://www.linkedin.com/company/extia" style="padding=10px"><IMG width="30px" height="30px" SRC="http://www.carre-rg.fr/wp-content/uploads/2015/\03/linkedIn.png"/></a>	       <a href="https://www.instagram.com/explore/tags/extia/" style="padding:10px"><IMG width="30px" height="30px" SRC="http://www.oystersradio.fr/assets/instagram.png"/><a>
	 <a href="https://plus.google.com/114940204847783162150/photos"><IMG width="30px" height="30px" SRC="http://www.mathsbook.fr/images/logo_google.png"/></a>
       </center></a>
     </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
	<script src="javascript2/jquery.stickyheader.js"></script>
    </body>
</html>		