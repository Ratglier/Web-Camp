        <script type="text/javascript" src="http://www.pasteur.fr/misc/jquery.js?v=1.4.4"></script>
        <script src="javascript2/verif.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/css1.css" type="text/css">
<div class="div3p">
        <center><h2>S'identifier</h2><br><br></center>
        <form onsubmit="return verifForm1(this)" action="connect.php" method="POST">
                Adresse email:* <input class="input" name="email" type="text"  placeholder="Entrez votre adressse email" onblur="verifmail(this)"><br><br>
                Mot de passe:* <input class="input" name="pass" type="password" placeholder="Entrez votre mot de passe" onblur="verifempty(this)"><br><br>
                <a class="mdp" href="oubli.html">Mot de passe oublie ?</a>
                <br><br>
                * Champs obligatoires.<br><br>

		<div class="div0p"></div>
               <center> <input type="submit" class="button" value="Connexion"><br></center>
        </form>
</div>
