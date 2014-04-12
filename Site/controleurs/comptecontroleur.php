<?php

require('modeles/membremodele.php');
   
$_SESSION['id']=recupid($_SESSION['login'], $_SESSION['password']);

include('vues/comptevue.php');



?>

