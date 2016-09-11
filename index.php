<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

<div id="header">
	<?php
		include "header.php" ;
	?>

</div>

<div id="programme">

	<?php

		include 'tableau.php';
	

		

	foreach ($variable as $key => $value) {} ;
	
	
	foreach ($spectacle as $ligne){
			echo "Heure : " . $ligne["heure"] . "<br />" . "Titre du spectacle : "  . $ligne["titre_spectacle"] . "<br />" . "Nom de l'artise : " . $ligne["artiste"]. "<br />" . "Photo : " . $ligne["image_url"] . "<br />" . "<br />" ;
		
}



	?>
</div>

	<div id="footer">
	
	 <?php 
	 include "footer.php" ;
	
	?>
		
	</div>

</body>
</html>