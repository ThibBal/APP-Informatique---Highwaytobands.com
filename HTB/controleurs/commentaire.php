<meta charset="utf-8" />
<?php
	$page=$_POST['page'];
	$membre_id=$_SESSION['id'];
	$contenu=mysql_real_escape_string(htmlspecialchars($_POST['commentaire']));
	$date=date("YmdHis");

	if($page=='salle'){
		$salle_id=$_POST['salle_id'];
		$artiste_id='0';
		$concert_id='0';

	require('modeles/commentaire.php');

	poster_comment($membre_id, $artiste_id, $salle_id, $concert_id, $contenu, $date);
	$_SESSION['temp'] = 'Commentaire posté';

		 	header('Location: ' . $_SERVER['HTTP_REFERER']);
		 
}

if($page=='artiste'){
		$salle_id='0';
		$artiste_id=$_POST['artiste_id'];
		$concert_id='0';

	require('modeles/commentaire.php');
	poster_comment($membre_id, $artiste_id, $salle_id, $concert_id, $contenu, $date);
	$_SESSION['temp'] = 'Commentaire posté';

		 
		 	header('Location: ' . $_SERVER['HTTP_REFERER']);
		 
		 
}

if($page=='concert'){
		$salle_id='0';
		$artiste_id='0';
		$concert_id=$_POST['concert_id'];

	require('modeles/commentaire.php');
	poster_comment($membre_id, $artiste_id, $salle_id, $concert_id, $contenu, $date);
	$_SESSION['temp'] = 'Commentaire posté';


		 	header('Location: ' . $_SERVER['HTTP_REFERER']);
		 
		 
}


	?>
