	<script type="text/javascript" src="http://www.pasteur.fr/misc/jquery.js?v=1.4.4"></script>
        <script src="../javascript2/verif.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/css1.css" type="text/css"><br>

	<div class="div3p">
	<center><h2>Inscrivez vous pour pouvoir jouer</h2><br><br></center>
	<form method="POST" action="upload.php" onsubmit="return verifForm2(this)"  enctype="multipart/form-data">
		Nom:* <input class="input" name="nom" type="text" placeholder="Entrez votre nom" onblur="verifempty2(this)"><br><br>
		Prenom:* <input class="input" name="prenom" type="text" placeholder="Entrez votre prenom" onblur="verifempty2(this)"><br><br>
                Vous etes ? 
                 Un homme</b><INPUT TYPE="radio" NAME="sexe" value="0"></p>
                <p style="margin-left:87px;">Une femme<INPUT TYPE="radio" NAME="sexe" value="1"></p>
		<input type="hidden" name="MAX_FILE_SIZE" value="100000">
    		Choisissez une photo : <input type="file" name="avatar"><br><br>
		Adresse email:* <input class="input" name="email" type="text" placeholder="email" onblur="verifmail2(this)"><br><br>
		Mot de passe:* <input class="input" name="pass" type="password" placeholder="**********" onblur="verifempty2(this)"><br><br>
		Veuillez retaper votre mot de passe:* <input class="input" name="pass1" type="password" placeholder="**********" onblur="verifempty2(this)"><br><br>
		* Champs obligatoires.<br><br>
		<div class="div0p"></div>
		<center><input type="submit"  class="button" value="INSCRIPTION"><br></center>
	</form>
</div>
	