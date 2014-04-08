<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" href="img/favicon.ico" />
	<title>Highway To Bands</title>    
</head>

<body>
	<?php include 'vues/headervue.php' ?>
	Voici le profil de <?php echo ($_SESSION['login']); ?> : </br>
	Mail : <?php echo ($data['mail']); ?> </br>
id : <?php echo ($_SESSION['id']); ?> </br>

<?php include 'footer.php' ?>		
</body>
</html>