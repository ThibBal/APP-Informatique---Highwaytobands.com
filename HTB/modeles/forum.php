<?php

function poster_message($text, $date_publication, $id_user, $id_sujet){ // Poster un message
global $bdd; 
    $bdd->query("INSERT INTO forum_message(text, date_publication, id_user, id_sujet) VALUES('$text', '$date_publication', '$id_user', '$id_sujet')");

}

function poster_sujet($titre, $date, $id_user, $id_rubrique){ // Poster un nouveau sujet
global $bdd; 
    $bdd->query("INSERT INTO forum_sujet(titre_sujet, date_creation, id_user, id_rubrique) VALUES('$titre', '$date', '$id_user', '$id_rubrique')");

}

function dernier_sujet(){ // Récupère les informations du dernier sujet (pour ensuite inscrire le premier message)
    global $bdd;
$res = "SELECT * from forum_sujet ORDER BY id_sujet DESC LIMIT 1" ;
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
$data = $req-> fetch();
    return $data;
}

function listeSujet($id){
    global $bdd;
$res = "SELECT * from forum_sujet where id_rubrique=$id";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

        return $req;
}

function liste_message($id){
    global $bdd;
$res = "SELECT * from forum_message where id_sujet=$id";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

        return $req;
}

//Page forum rubrique
function listeRubrique() 
{
	global $bdd;
	$req = $bdd->query('SELECT * FROM forum_rubrique');
	return $req;
}

function derniermessage($id) 
{
    global $bdd;
$res = "SELECT * from forum_message WHERE id_sujet='$id' ORDER BY id_message DESC LIMIT 1" ;
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));
$data = $req-> fetch();
    return $data;
}



//***************************************************************//

function nombreSujet($donnees) 
{
    global $bdd;
    $req = $bdd->prepare('SELECT COUNT(*) AS nb_sujet FROM forum_sujet INNER JOIN forum_rubrique ON forum_sujet.id_rubrique = forum_rubrique.id_rubrique WHERE titre_rub = ?');
    $req->execute(array($donnees));
    return $req;
}

function dernierMessageUser1($donnees)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM membre 
                        INNER JOIN forum_message ON membre.id=forum_message.id_user
                        INNER JOIN forum_sujet ON forum_message.id_sujet = forum_sujet.id_sujet 
                        INNER JOIN forum_rubrique ON forum_sujet.id_rubrique=forum_rubrique.id_rubrique
                        AND forum_rubrique.id_rubrique=?
                        ORDER BY date_publication DESC LIMIT 1 ');
    $req->execute(array($donnees));
    return $req;
} 

function dernierMessageDate1 ($donnees) 
{
    global $bdd;
	$req = $bdd->prepare('SELECT  FROM forum_message 
                        INNER JOIN forum_sujet On forum_sujet.id_sujet=forum_message.id_sujet 
                        INNER JOIN forum_rubrique ON forum_sujet.id_rubrique=forum_rubrique.id_rubrique
                        AND forum_rubrique.id_rubrique=? 
                        ORDER BY date_publication DESC LIMIT 1');
	$req->execute(array($donnees));
	return $req;
}

//Page forum sujet
function afficherSujet1 () 
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM forum_sujet WHERE id_rubrique=?');
    $req->execute(array($_GET['R']));
    return $req;
}

function nombreMessage($donnees)
{
    global $bdd;
    $req=$bdd-> prepare('SELECT COUNT(*) AS nb_message FROM forum_message INNER JOIN forum_sujet ON forum_message.id_sujet = forum_sujet.id_sujet WHERE titre_sujet = ? AND id_rubrique=?');
    $req->execute(array($donnees,$_GET['R']));
    return $req;
}

function dernierMessageUser2 ($donnees)
{
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM membre
                        INNER JOIN forum_message ON membre.id=forum_message.id_user
                        INNER JOIN forum_sujet ON forum_message.id_sujet = forum_sujet.id_sujet AND forum_sujet.id_sujet=?
                        ORDER BY date_publication DESC LIMIT 1 ');
    $req->execute(array($donnees));
    return $req;
}

function dernierMessageDate2 ($donnees)
{
    global $bdd;
    $req=$bdd->prepare('SELECT * FROM forum_message
                            INNER JOIN forum_sujet ON forum_sujet.id_sujet=forum_message.id_sujet
                            AND forum_sujet.id_sujet=?
                            ORDER BY date_publication DESC LIMIT 1');
    $req->execute(array($donnees));
    return $req;
}

function afficherRubrique1() 
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM forum_rubrique WHERE id_rubrique= ?');
    $req->execute(array($_GET['R'] ));
    return $req;
}

function pseudoSujet($donnees) 
{
	global $bdd;
	$req = $bdd->prepare('SELECT login FROM membre INNER JOIN forum_sujet ON membre.id=forum_sujet.id_user WHERE forum_sujet.id_sujet= ?');
	$req->execute(array($donnees));
	return $req;
}

//Page forum message
function listeMessage () 
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM forum_message WHERE id_sujet= ?');
    $req->execute(array($_GET['S']));
    return $req;
}




function afficherPseudo ($donnees)
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM membre INNER JOIN forum_message ON membre.id=forum_message.id_user WHERE id_message= ?');
    $req->execute(array($donnees));
    return $req;
}

function afficherRubrique2 ()
{
    global $bdd;
	$req = $bdd->prepare('SELECT * FROM forum_rubrique 
                    		INNER JOIN forum_sujet ON forum_sujet.id_rubrique=forum_rubrique.id_rubrique
                    		WHERE forum_sujet.id_sujet= ?');
    $req->execute(array($_GET['S']));
    return $req;
}

function afficherSujet2 ()
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM forum_sujet WHERE id_sujet= ?');
    $req->execute(array($_GET['S']));
    return $req;
}

function pseudoSujet2() 
{
	global $bdd;
	$req = $bdd->prepare('SELECT login FROM membre INNER JOIN forum_sujet ON membre.id=forum_sujet.id_user AND id_sujet= ?');
	$req->execute(array($_GET['S']));
	return $req;
}

//Page message
function afficherRubrique3 ()
{
    global $bdd;
	$req = $bdd->prepare('SELECT * FROM forum_rubrique 
                    		INNER JOIN forum_sujet ON forum_sujet.id_rubrique=forum_rubrique.id_rubrique
                    		WHERE forum_sujet.id_sujet= ?');
	$req->execute(array($_GET['M']));
    return $req;
}

function afficherSujet3 ()
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM forum_sujet WHERE id_sujet= ?');
	$req->execute(array($_GET['M']));
    return $req;
}

function insererMessage()
{
	global $bdd;
	$req = $bdd->prepare('INSERT INTO forum_message(text,date_publication,id_sujet,id_user) VALUES (?,NOW(),?,?)');
	$req->execute(array($_POST['text'],$_GET['M'],$_SESSION['id_user']));
	$req->closeCursor();
}


//Page sujet
function afficherRubrique4() 
{
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM forum_rubrique WHERE id_rubrique= ?');
    $req->execute(array($_GET['SU'] ));
    return $req;
}

function insererSujet()
{
	global $bdd;
	$req = $bdd->prepare('INSERT INTO forum_sujet(titre_sujet,description,date_creation,id_rubrique,id_user) VALUES (?,?,NOW(),?,?)');
	$req->execute(array($_POST['titre_sujet'],$_POST['description'],$_GET['SU'],$_SESSION['id_user']));
	$req->closeCursor();

}

function lienprofil($donnees3)   //pour toute les pages du forum
{    
    global $bdd;
    $req = $bdd->prepare('SELECT * FROM membre WHERE login= ?');
    $req->execute(array($donnees3));
    return $req;
}



?>

