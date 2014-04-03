<?php
$connexion = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd", $PARAM_utilisateur, $PARAM_mot_passe); // connexion à la BDD
 
$connexion->exec("INSERT INTO membre(login, password, mail, zipcode, photo) VALUES(:login, :password, :mail, :zipcode, :photo)"); // on modifie le mot de passe de tous les utilisateurs (oui, ça n'a aucun intérêt mais c'est pour l'exemple)
?>