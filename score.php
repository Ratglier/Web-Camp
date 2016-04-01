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
			<div class="component">
				<table>
					<thead>
						<tr>
							<th class="classement">Rang</th>
							<th class="nom">prenom</th>
							<th class="rang">Nom</th>
                                                        <th class="rang">Score</th>
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
$req0 = $bdd->query('SELECT * FROM statistiques ORDER BY scores DESC');
$n = 1;
while ( ($res0 = $req0->fetch()) )
{
        //echo '<form method="POST" action="admin.php?question='.$res0[0].'">' . $res0[0] . ' : ' . $res1[0];
        //echo '<input name="modifier" type="submit" value="modifier" style="padding:20px;">';
        //echo '<input name="supprimer" type="submit" value="supprimer" style="padding:20px;"></form>';
        
        echo '<tr>';
        echo '<th>'.$n.'</th>';
        echo '<td>'.$res0['nom'].'</td>';
        echo '<td>'.$res0['prenom'].'</td>';
        echo '<td>'.$res0['scores'].'</td></form>';
        echo '</tr>';
$n++;
}
?>
</table> 
<br>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
	<script src="javascript2/jquery.stickyheader.js"></script>
	</body>
</html>
	