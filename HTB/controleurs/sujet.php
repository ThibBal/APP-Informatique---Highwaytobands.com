<?php

if(isset($_SESSION['statut'])){
	if($_SESSION['statut']=='membre'){
	if(isset($_POST['titre'])){
		$text=$_POST['contenu'];
		$titre=$_POST['titre'];
		$id_user=$_SESSION['id'];
		$id_rubrique=$_GET['R'];
		$date_publication=	date("YmdHis");

		require('modeles/forum.php');

poster_sujet($titre, $date_publication, $id_user, $id_rubrique);
$data=dernier_sujet();
$id_sujet=$data['id_sujet'];
poster_message($text, $date_publication, $id_user, $id_sujet);


		$_SESSION['temp'] = 'Sujet créé';
		header ('Location: index.php?page=forum');
	}

	include ('vues/creer_sujet.php');

}else{
	$_SESSION['temp'] = 'Vous devez être connecté';
	header ('Location: index.php?page=forum');
}
}


?>