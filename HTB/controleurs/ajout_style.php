<?php

$style=$_POST['style'];

require('modeles/style.php'); 

ajout_style($style);

$_SESSION['temp'] = 'Style ajouté !';


header ('Location: index.php?page=backoffice');
	
?>