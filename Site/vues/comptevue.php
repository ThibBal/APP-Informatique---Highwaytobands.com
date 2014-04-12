<!DOCTYPE html>
<html>


<body>
	<?php include 'vues/headervue.php' ?>
	Voici le profil de <?php echo ($_SESSION['login']); ?> : </br>
	Votre id : <?php echo ($_SESSION['id']); ?> </br>

<?php include 'controleurs/footer.php' ?>		
</body>
</html>