<?php

$style=$_POST['style'];

require('modeles/style.php'); 

supprimer_style($style);

$_SESSION['temp'] = 'Style supprimé !';


header ('Location: index.php?page=backoffice');
	
?>