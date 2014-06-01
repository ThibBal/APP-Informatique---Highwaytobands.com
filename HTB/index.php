<?php 
include 'controleurs/bdd.php';
// FUSEAU HORAIRE
date_default_timezone_set('Europe/Paris');
     
// LANGUE LOCALE
setlocale(LC_TIME, 'fr_FR', 'french', 'fra');

if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
{
       include 'controleurs/'.$_GET['page'].'.php';
}
else
{
	include 'controleurs/accueil.php';
       //include 'controleurs/forum_rubrique.php';
} ?>