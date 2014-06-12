<?php

$question=mysql_real_escape_string(htmlspecialchars($_POST['question']));
$reponse=mysql_real_escape_string(htmlspecialchars($_POST['reponse']));

require('modeles/faq.php'); 

ajout_faq($question, $reponse);

$_SESSION['temp'] = 'Question ajoutée !';


header ('Location: index.php?page=backoffice');
	
?>