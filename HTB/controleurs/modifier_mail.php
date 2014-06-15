<?php

$mail=$_POST['mail'];

require('modeles/admin.php'); 

modifier_mail($mail);

$_SESSION['temp'] = 'Adresse modifiée !';


header ('Location: index.php?page=backoffice');
	
?>