<?php
if(isset($_SESSION['statut'])){

	require('modeles/concert.php');
	$id=$_POST['id'];
	$data=info_concert($id);

	if($_SESSION['statut']=='salle'){
		if($_SESSION['id']==$data['salle_id']){
			$name = $_SESSION['name'];
			validation($id);
			validation_s($name, $id);

			$_SESSION['temp'] = 'Concert validé';

			header ('Location: index.php?page=accueil'); 

		}else{
			$_SESSION['temp'] = 'Cette page ne vous est pas destinée';

			header ('Location: index.php?page=accueil'); 

		}

	}

	if($_SESSION['statut']=='artiste'){
		if($_SESSION['id']==$data['artiste_id']){
			$name = $_SESSION['name'];
			validation($id);
			validation_a($name, $id);


			$_SESSION['temp'] = 'Concert validé';

			header ('Location: index.php?page=accueil'); 

		}else{
			$_SESSION['temp'] = 'Cette page ne vous est pas destinée';
			header ('Location: index.php?page=accueil'); 

		}

	}
}else{
		$_SESSION['temp'] = 'Cette page ne vous est pas destinée';

		header ('Location: index.php?page=accueil'); 

	}

	?>