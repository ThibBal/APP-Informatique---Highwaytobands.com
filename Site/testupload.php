<html>
  <body>
    <form enctype="multipart/form-data" action="vues/utilisateur.php" method="post">
      
      Transfère le fichier <input type="file" name="monfichier" />
      <input type="submit" />
    </form>
  </body>
</html>



If your script is located in /var/www/dir/index.php then the following would return:

dirname(__FILE__); // /var/www/dir
or

dirname( dirname(__FILE__) ); // /var/www

<body>
	<?php include 'controleurs/header.php' ?>
	<div id="inscription">
		<form action="index.php?page=utilisateur" method="post">
			<span id="blabla">Inscription : Veuillez compléter les champs suivants</span>
	<ul id="formulaire">
		<li class="champs"><span>Login : </span><input name=login class= "box" type="text"></li>
		<li class="champs"><span>Mot de passe :<span class=small>(5 caractères requis)</span>  </span><input name=password class="box" type="password"></li>
		<li class="champs"><span>Vérification du mot de passe : </span><input name=password2 class="box" type="password"></li>
		<li class="champs"><span>Nom : </span><input name=name class= "box" type="text"></li>
		<li class="champs"><span>Adresse E-Mail : </span><input name=mail class="box" type="email"></li>
		<li class="champs"><span>Code postal : </span><input name=zipcode class="box" type="text"></li>
		<li class="champs"><span>Photo de profil : </span><input name=photo class="box" type="file" /></li>
		<li class="CGU"><span>J'accepte les <a href="conditions.php">Conditions Générales d'Utilisation</a></span><input type="checkbox" name="CGU" value="checked"/></li>
		
	</ul>

	<div id="envoi"><input type="submit" value="S'inscrire" /></div>


	</form>
</div>

<?H

$_FILES['photo']['name'];   //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['photo']['type'];     //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['photo']['size'];     //La taille du fichier en octets.
$_FILES['photo']['tmp_name']; //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['photo']['error'];    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.


$extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
//1. strrchr renvoie l'extension avec le point (« . »).
//2. substr(chaine,1) ignore le premier caractère de chaine.
//3. strtolower met l'extension en minuscules.
$extension_upload = strtolower(  substr(  strrchr($_FILES['photo']['name'], '.')  ,1)  );
if ( in_array($extension_upload,$extensions_valides) ){
$nom = "img/1.jpg";
$resultat = move_uploaded_file($_FILES['photo']['tmp_name'],$nom);
if ($resultat) { 
	$message = "Transfert réussi";

}

}

$nomOrigine = $_FILES['photo']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

    if (move_uploaded_file($_FILES["photo"]["tmp_name"], 
                                     $repertoireDestination.$nomDestination)) {
        echo "Le fichier temporaire ".$_FILES["photo"]["tmp_name"].
                " a été déplacé vers ".$repertoireDestination.$nomDestination;
    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}

// Example of accessing data for a newly uploaded file
$fileName = $_FILES["photo"]["name"]; 
$fileTmpLoc = $_FILES["photo"]["tmp_name"];
// Path and file name
$pathAndName = "uploads/".$fileName;
// Run the move_uploaded_file() function here
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
// Evaluate the value returned from the function if needed
if ($moveResult == true) {
    $message = "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
} else {
     $message = "ERROR: File not moved correctly";
}

<html>
<body>
<?php
$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
                                     $repertoireDestination.$nomDestination)) {
        echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                " a été déplacé vers ".$repertoireDestination.$nomDestination;
    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}
?>
</body>
</html>

<?php
// Example of accessing data for a newly uploaded file
$fileName = $_FILES["uploaded_file"]["name"]; 
$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"];
// Path and file name
$pathAndName = "uploads/".$fileName;
// Run the move_uploaded_file() function here
$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
// Evaluate the value returned from the function if needed
if ($moveResult == true) {
    echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
} else {
     echo "ERROR: File not moved correctly";
}
?>


move_uploaded_file ($_FILES['photo'] ['tmp_name'], 
       "/img/{$_FILES['photo']['name']}");

 Example of accessing data for a newly uploaded file
move_uploaded_file ($_FILES['photo']['tmp_name'], 
       "img/{$_FILES['photo']['name']}");

  $photo = "";
