<?php 
include 'controleurs/bdd.php';

if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
{
       include 'controleurs/'.$_GET['page'].'.php';
}
else
{
       include 'controleurs/accueilcontroleur.php';
} ?>