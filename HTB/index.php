<?php 
include 'controleurs/bdd.php';


if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
{
       include 'controleurs/'.$_GET['page'].'.php';
}
else
{
	include 'controleurs/accueil.php';
       //include 'controleurs/forum_rubrique.php';
} ?>