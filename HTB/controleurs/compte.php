<?php

require('modeles/membre.php');
   
$_SESSION['id']=recupid($_SESSION['login'], $_SESSION['password']);

include('vues/compte.php');



?>

