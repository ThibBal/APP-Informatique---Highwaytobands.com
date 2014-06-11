<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/STYLE.css" /> 
</head>

<body>
	<link rel="stylesheet" href="header_style.css" />
	<link href='http://fonts.googleapis.com/css?family=Maiden+Orange' rel='stylesheet' type='text/css'>

	<?php include 'controleurs/header.php' ?>
<center><h1> Back-office de Highway to Bands </h1></center>
	<div id='contenu'>
		<h2> Gestion des utilisateurs </h2>
<form action="index.php?page=supprimer_membre" method="post"><h4> Supprimer un membre </h4>
	
		<SELECT name=membre size="1">
			<option value="0" selected disabled> Sélectionner un membre </option>
<?php while ($membre = $membres->fetch()) { ?>
<OPTION value="<?php echo $membre['id']; ?>"><?php echo $membre['login']; ?>
	<?php } ?>

</SELECT>
<div id="envoi"><input type="submit" value="Supprimer" /></div>

	</form>

<form action="index.php?page=bannir_membre" method="post"><h4> Bannir un membre </h4>
	
		<SELECT name=membre size="1">
			<option value="0" selected disabled> Sélectionner un membre </option>
<?php while ($membre = $membres->fetch()) { ?>
<OPTION value="<?php echo $membre['id']; ?>"><?php echo $membre['login']; ?>
	<?php } ?>

</SELECT>
<div id="envoi"><input type="submit" value="Bannir" /></div>

	</form>


<form action="index.php?page=suppression_artiste" method="post"><h4> Supprimer un artiste </h4>
	
		<SELECT name=artiste size="1">
			<option value="0" selected disabled> Sélectionner un artiste</option>
<?php while ($artiste = $artistes->fetch()) { ?>
<OPTION value="<?php echo $artiste['id']; ?>"><?php echo $artiste['login']; ?>
	<?php } ?>

</SELECT>
<div id="envoi"><input type="submit" value="Supprimer" /></div>

	</form>

<form action="index.php?page=suppression_salle" method="post"><h4> Supprimer une salle </h4>
	
		<SELECT name=salle size="1">
			<option value="0" selected disabled> Sélectionner une salle </option>
<?php while ($salle = $salles->fetch()) { ?>
<OPTION value="<?php echo $salle['id']; ?>"><?php echo $salle['login']; ?>
	<?php } ?>

</SELECT>
<div id="envoi"><input type="submit" value="Supprimer" /></div>

	</form>

<h2> Administration du site </h2>
<form action="index.php?page=ajout_style" method="post"><h4> Ajouter un style de musique </h4>
	<input name=style class= "box" type="text">
<div id="envoi"><input type="submit" value="Ajouter ce style" /></div>

	</form>

<form action="index.php?page=supprimer_style" method="post"><h4> Supprimer un style de musique </h4>
	
		<SELECT name=style size="1">
			<option value="0" selected disabled> Sélectionner un style </option>
<?php while ($style = $styles->fetch()) { ?>
<OPTION value="<?php echo $style['id']; ?>"><?php echo $style['style']; ?>
	<?php } ?>

</SELECT>
<div id="envoi"><input type="submit" value="Supprimer" /></div>

	</form>


<h2> Gestion des concerts </h2>
<form action="index.php?page=creation_concert" method="post"><h4> Ajouter un concert </h4>
	<input name=concert class= "box" type="text">
<div id="envoi"><input type="submit" value="Ajouter ce concert" /></div>

	</form>

<form action="index.php?page=supprimer_concert" method="post"><h4> Supprimer un concert </h4>
	
		<SELECT name=concert size="1">
			<option value="0" selected disabled> Sélectionner un concert </option>
<?php while ($concert = $concerts->fetch()) { ?>
<OPTION value="<?php echo $concert['id']; ?>"><?php echo $concert['name']; ?>
	<?php } ?>

</SELECT>
<div id="envoi"><input type="submit" value="Supprimer" /></div>

	</form>

<h2> Gestion de la Foire Aux Questions </h2>
<form action="index.php?page=ajout_faq" method="post"><h4> Ajouter une question </h4>
	<input name=question class= "box" type="text">
<div id="envoi"><input type="submit" value="Ajouter" /></div>

	</form>

<form action="index.php?page=supprimer_sytyle" method="post"><h4> Supprimer une question </h4>
	
		<SELECT name=question size="1">
			<option value="0" selected disabled> Sélectionner une question </option>
<?php while ($style = $styles->fetch()) { ?>
<OPTION value="<?php echo $style['id']; ?>"><?php echo $style['style']; ?>
	<?php } ?>

</SELECT>
<div id="envoi"><input type="submit" value="Supprimer" /></div>

	</form>




	</div>
</body>



