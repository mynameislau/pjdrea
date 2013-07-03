<!DOCTYPE html>

<?php // php yéyé //
	$parties = scandir("parties"); //scan les parties
	//chdir("parties"); // se fout dans le bon dir
	//echo "$parties[2]"; //le nom du fichier brut // ça commence à 2
	
	$partieNom = $partiePath = [];
	
	//LA boucle
	for ($i = 2; $i < count($parties); $i++) {
		$partieNom[$i-2] = "$parties[$i]";
		$partieNom[$i-2] = str_replace("_"," ", $partieNom[$i-2]);
		$partiePath[$i-2] = "parties/" . "$parties[$i]";
		//$j = $i-2;
		//echo "$partieNom[$j]" . " " . "$partiePath[$j]" ;
	}
?>



<!-- HTML yop yop-->
<html>
<head>
<meta charset="ANSI">
	<title>Petits JDR entre amis</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</meta>
</head>
<body>
<div id="warp">
	<div id="menu">
		<img id="ban">
		<div id="connex">
		</div>
	</div>
	<div id="PartiesEnCours">
		<h1> Parties en cours </h1>
		
	</div>
		<div id="PartiesFinies">
		<h1> Parties Finies </h1>
	</div>
</div>
</body>
</html>