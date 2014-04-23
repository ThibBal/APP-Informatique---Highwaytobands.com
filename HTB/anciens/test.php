<html>
<head>
<title>Affichage des données d'un formulaire</title>
</head>
<body>
<?php
if (($nom=="")||($prenom=="")||($age=="")){
if($nom=="") print("Veuillez saisir votre nom !<br>\n");
if($prenom=="") print("Veuillez saisir votre prénom !<br>\n");
if($age=="") print("Veuillez saisir votre âge !<br>\n");
}
else {
echo "Récapitulatif des informations saisies<br>\n
<ul>
<li>Nom : $nom</li>
<li>Prenom : $prenom</li>
<li>Age : $age</li>
</ul>";
}
?>
</body>
</html>

