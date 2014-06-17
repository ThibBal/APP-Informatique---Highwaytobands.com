<?php

$id=$_POST['question'];

require('modeles/faq.php'); 

supprimer_faq($id);

$_SESSION['temp'] = 'Question supprimée !';


header ('Location: index.php?page=backoffice');
	
?>