<html>
<body>
<?php
$nomOrigine = $_FILES['photo']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif", "png");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(dirname(__FILE__))."/"."img"."/";
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
?>
</body>
</html>