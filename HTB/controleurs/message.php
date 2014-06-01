<?php

if(isset($_SESSION['statut'])){
	if(isset($_POST['contenu'])){
		$text=$_POST['contenu'];
		$id_user=$_SESSION['id'];
		$id_sujet=$_GET['S'];
		$date_publication=	date("YmdHis");
		require('modeles/forum.php');
poster_message($text, $date_publication, $id_user, $id_sujet);
		$_SESSION['temp'] = 'Message posté';
		header ('Location: index.php?page=forum');
	}

	include ('vues/creer_message.php');
}else{
	$_SESSION['temp'] = 'Vous devez être connecté';
	header ('Location: index.php?page=forum');
}



?>