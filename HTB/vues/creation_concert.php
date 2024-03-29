<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/inscription_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'controleurs/header.php' ?>
	<div id="inscription">
		<form action="index.php?page=creation_concert" method="post"> 
			<span id="blabla">Ajout d'un concert : Veuillez compléter les champs suivants</span>
	<ul id="formulaire">
		<li class="champs"><span>Nom : </span><input name=name class= "box" type="text"></li>

		<li class="champs"><span>Salle : </span>
			<SELECT name=salle size="1">
				<?php if($_SESSION['statut']=='artiste'){ ?>
		
			<option value="0" selected disabled> Choisir une salle </option>
<?php while ($salle = $salles->fetch()) { ?>
<OPTION value="<?php echo $salle['id']; ?>"><?php echo $salle['name']; ?>
	<?php } ?>
<?php }else{ ?>
			<option value="<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION['name']; ?></option>
<?php } ?>

</SELECT></li>

<li class="champs"><span>Artiste : </span>
			<SELECT name=artiste size="1">
				<?php if($_SESSION['statut']=='salle'){ ?>
		
			<option value="0" selected disabled> Choisir un artiste </option>
<?php while ($artiste = $artistes->fetch()) {?>
<OPTION value="<?php echo $artiste['id']; ?>"><?php echo $artiste['name']; ?>
	<?php } ?>
<?php }else{ ?>
			<option value="<?php echo $_SESSION['id']; ?>"><?php echo $_SESSION['name']; ?></option>

<?php } ?>

</SELECT></li>

		
		<li class="champs"><span>Date : </span><input class="box" type="date" name="date"></li>
		<li class="champs"><span>Description : </span> <br/> <textarea rows=5 cols=50 name=description ></textarea></li>
		<li class="champs"><span>Prix : </span><input name=price class="box" type="text" /></li>
		<li class="CGU"><span>J'accepte les <a href="conditions.php">Conditions Générales d'Utilisation</a></span><input type="checkbox" name="CGU" value="checked"/></li>
		
	</ul>

	<div id="envoi"><input type="submit" value="Proposer le concert" /></div>


	</form>
</div>
<?php include 'controleurs/footer.php' ?>	
	</body>
		</html>
