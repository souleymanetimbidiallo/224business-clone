<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<?php
			//fichier permettant d'inclure la date: ex Mercredi 31 main 2019
			$jour= array ('','Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
			$mois= ['','Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'];
			$j=date('N');
			$jr=date('d');
			$m=date('n');
			$an=date('Y');
			echo $jour[$j].' le '.$jr.' '.$mois[$m].' '.$an.'<br>';
		?>
</body>
</html> 