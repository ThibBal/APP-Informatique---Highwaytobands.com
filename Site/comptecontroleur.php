<?php
require('modeles/membremodele.php');
$id=$_SESSION['login'];
$donnees=info($id);
$my_login=$donnees[0];
$my_mail=$donnees[1];
$my_zipcode=$donnees[2];
include('compte.php');
>