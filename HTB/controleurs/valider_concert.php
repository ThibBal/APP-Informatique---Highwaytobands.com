<?php
$id=$_POST['id'];
require('modeles/concert.php');

validation($id);

 $_SESSION['temp'] = 'Concert validé';

header ('Location: index.php?page=accueil'); 

?>